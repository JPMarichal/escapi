<?php

namespace App\Traits;

use App\Models\Capitulos;
use App\Models\Versiculos;
use Illuminate\Support\Facades\Log;

trait ScriptureReferences
{
    use TextNormalization;

    /**
     * Formatea una referencia de escritura.
     * 
     * @param string $libro Nombre del libro
     * @param int $capitulo Número del capítulo
     * @return string Referencia formateada
     */
    protected function formatearReferencia($libro, $capitulo)
    {
        return "{$libro} {$capitulo}";
    }

    /**
     * Parsea una referencia de escritura y devuelve sus componentes
     * 
     * @param string $referencia
     * @return array|null
     */
    protected function parsearReferencia($referencia)
    {
        Log::info('Parseando referencia:', ['referencia' => $referencia]);

        if (!$referencia) {
            Log::info('Referencia vacía');
            return null;
        }

        // Manejo especial para José Smith-Historia y José Smith-Mateo
        if (preg_match('/^(José\s*Smith[-]+(?:Historia|Mateo))\s+(\d+)(?::(\d+)(?:-(\d+))?)?/ui', $referencia, $matches)) {
            Log::info('Referencia de José Smith encontrada:', [
                'libro' => $matches[1],
                'capitulo' => $matches[2],
                'versiculo_inicio' => $matches[3] ?? null,
                'versiculo_fin' => $matches[4] ?? null
            ]);
            return [
                'libro' => $matches[1],
                'capitulo' => (int)$matches[2],
                'versiculo_inicio' => isset($matches[3]) ? (int)$matches[3] : null,
                'versiculo_fin' => isset($matches[4]) ? (int)$matches[4] : null
            ];
        }

        // Para otros libros, intentar parsear la referencia normal
        if (preg_match('/^(.*?)\s+(\d+)(?::(\d+)(?:-(\d+))?)?$/u', $referencia, $matches)) {
            $libro = trim($matches[1]);
            $capitulo = (int)$matches[2];

            // Detectar si es una referencia a DyC o DO
            $es_dyc = preg_match('/^D\.?\s*y\s*C\.?$/ui', $libro) || 
                     preg_match('/^Doctrina\s+y\s+Convenios$/ui', $libro);
            $es_do = preg_match('/^D\.?\s*O\.?$/ui', $libro) || 
                    preg_match('/^Declaraci[óo]n(?:es)?\s+[Oo]ficial(?:es)?$/ui', $libro);

            Log::info('Referencia normal encontrada:', [
                'libro' => $libro,
                'capitulo' => $capitulo,
                'versiculo_inicio' => $matches[3] ?? null,
                'versiculo_fin' => $matches[4] ?? null,
                'es_dyc' => $es_dyc,
                'es_do' => $es_do
            ]);

            return [
                'libro' => $libro,
                'capitulo' => $capitulo,
                'versiculo_inicio' => isset($matches[3]) ? (int)$matches[3] : null,
                'versiculo_fin' => isset($matches[4]) ? (int)$matches[4] : null,
                'es_dyc' => $es_dyc,
                'es_do' => $es_do
            ];
        }

        Log::info('No se pudo parsear la referencia');
        return null;
    }

    /**
     * Encuentra un capítulo por su referencia
     * 
     * @param string $referencia
     * @return Capitulos|null
     */
    protected function encontrarCapituloPorReferencia($referencia)
    {
        Log::info('Buscando capítulo por referencia:', ['referencia' => $referencia]);

        $componentes = $this->parsearReferencia($referencia);
        
        if (!$componentes) {
            Log::info('No se pudieron parsear los componentes de la referencia');
            return null;
        }

        $libro = $componentes['libro'];
        $query = Capitulos::query();

        // Usar la normalización del trait TextNormalization
        $libroNormalizado = $this->normalizarTexto($libro);
        
        Log::info('Buscando libro:', [
            'libro_original' => $libro,
            'libro_normalizado' => $libroNormalizado,
            'capitulo' => $componentes['capitulo']
        ]);

        // Construir la consulta base
        $query->whereHas('libro', function($query) use ($libro, $libroNormalizado) {
            $query->where(function($q) use ($libro, $libroNormalizado) {
                // Búsqueda por nombre
                $q->whereRaw('LOWER(nombre) = ?', [strtolower($libro)])
                  ->orWhereRaw('LOWER(nombre) = ?', [strtolower($libroNormalizado)])
                  // Búsqueda por abreviatura
                  ->orWhereRaw('LOWER(abreviatura) = ?', [strtolower($libro)])
                  ->orWhereRaw('LOWER(abreviatura) = ?', [strtolower($libroNormalizado)]);
            });
        });

        // Si es DyC o DO, asegurarse que el libro pertenece al volumen correcto
        if (isset($componentes['es_dyc']) && $componentes['es_dyc']) {
            $query->whereHas('libro', function($query) {
                $query->where('nombre', 'Secciones');
            });
        } elseif (isset($componentes['es_do']) && $componentes['es_do']) {
            $query->whereHas('libro', function($query) {
                $query->where('nombre', 'Declaraciones oficiales');
            });
        }

        $query->where('num_capitulo', $componentes['capitulo']);

        // Obtener la consulta SQL antes de ejecutarla
        $sqlQuery = $query->toSql();
        $bindings = $query->getBindings();

        Log::info('Consulta SQL:', [
            'sql' => $sqlQuery,
            'bindings' => $bindings
        ]);

        $capitulo = $query->first();

        // Verificar si se encontró el capítulo
        if ($capitulo) {
            Log::info('Capítulo encontrado:', [
                'id' => $capitulo->id,
                'libro_id' => $capitulo->libro_id,
                'num_capitulo' => $capitulo->num_capitulo,
                'referencia' => $capitulo->referencia
            ]);
        } else {
            // Si no se encontró, buscar el libro directamente para ver si existe
            $libroExistente = \App\Models\Libros::where('nombre', $libro)
                ->orWhere('nombre', $libroNormalizado)
                ->orWhere('abreviatura', $libro)
                ->orWhere('abreviatura', $libroNormalizado)
                ->first();

            Log::info('No se encontró el capítulo. Estado del libro:', [
                'libro_existe' => $libroExistente ? true : false,
                'libro_id' => $libroExistente ? $libroExistente->id : null,
                'libro_nombre' => $libroExistente ? $libroExistente->nombre : null
            ]);
        }
        
        return $capitulo;
    }

    /**
     * Encuentra versículos usando una referencia completa.
     * 
     * @param string $referencia La referencia a buscar (e.g., "DyC 4:2", "Juan 1:1-3")
     * @return \Illuminate\Database\Eloquent\Collection|null
     */
    protected function encontrarVersiculosPorReferencia($referencia)
    {
        $componentes = $this->parsearReferencia($referencia);
        
        if (!$componentes) {
            return null;
        }

        $capitulo = $this->encontrarCapituloPorReferencia($referencia);
        
        if (!$capitulo) {
            return null;
        }

        $query = \App\Models\Versiculos::select('id', 'capitulo_id', 'pericopa_id', 'num_versiculo', 'contenido', 'referencia')
            ->where('capitulo_id', $capitulo->id);

        // Si se especificaron versículos, filtrar por rango
        if (isset($componentes['versiculo_inicio'])) {
            $query->whereBetween('num_versiculo', [
                $componentes['versiculo_inicio'],
                $componentes['versiculo_fin'] ?? $componentes['versiculo_inicio']
            ]);
        }

        $versiculos = $query->get();

        // Agregar el campo orden basado en el número de versículo
        $versiculos = $versiculos->map(function($versiculo) {
            $versiculo->orden = $versiculo->num_versiculo;
            return $versiculo;
        });

        return $versiculos;
    }
}
