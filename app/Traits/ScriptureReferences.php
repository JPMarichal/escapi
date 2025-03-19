<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;

trait ScriptureReferences
{
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
     * Parsea una referencia de escritura y retorna sus componentes.
     * 
     * @param string $referencia Ejemplo: "Juan 1:1-3" o "DyC 4:2"
     * @return array|null Retorna null si el formato es inválido
     */
    protected function parsearReferencia($referencia)
    {
        // Patrón para José Smith
        $patronJoseSmith = '/^(José\s*Smith[-]+(?:Historia|Mateo))\s+(\d+)(?::(\d+)(?:-(\d+))?)?$/ui';
        
        // Patrón para Doctrina y Convenios: "DyC 4" o "DyC 4:2" o "Doctrina y Convenios 4:2"
        $patronDyC = '/^(?:DyC|Doctrina y Convenios)\s+(\d+)(?::(\d+)(?:-(\d+))?)?$/u';
        
        // Patrón para Declaraciones Oficiales: "DO 2" o "DO 2:3" o "Declaración oficial 2" o "Declaración oficial 2:3"
        $patronDO = '/^(?:DO|Declaraci[óo]n[es]? oficial[es]?)\s+(\d+)(?::(\d+)(?:-(\d+))?)?$/u';
        
        // Patrón general para otros libros: "Juan 1" o "Juan 1:1" o "Juan 1:1-3" o "1 Juan 1:1-3"
        $patronGeneral = '/^((?:\d\s+)?[A-ZÁÉÍÓÚÜa-záéíóúü\s]+)\s+(\d+)(?::(\d+)(?:-(\d+))?)?$/u';

        // Primero intentar coincidencia con José Smith
        if (preg_match($patronJoseSmith, $referencia, $matches)) {
            \Log::info('Coincidencia José Smith:', ['matches' => $matches]);
            return [
                'libro' => $matches[1],
                'capitulo' => (int)$matches[2],
                'versiculo_inicio' => isset($matches[3]) ? (int)$matches[3] : null,
                'versiculo_fin' => isset($matches[4]) ? (int)$matches[4] : (isset($matches[3]) ? (int)$matches[3] : null)
            ];
        }

        // Intentar coincidencia con DyC
        if (preg_match($patronDyC, $referencia, $matches)) {
            return [
                'libro' => 'Secciones',
                'capitulo' => (int)$matches[1],
                'versiculo_inicio' => isset($matches[2]) ? (int)$matches[2] : null,
                'versiculo_fin' => isset($matches[3]) ? (int)$matches[3] : (isset($matches[2]) ? (int)$matches[2] : null),
                'es_dyc' => true
            ];
        }
        
        // Intentar coincidencia con DO
        if (preg_match($patronDO, $referencia, $matches)) {
            return [
                'libro' => 'Declaraciones Oficiales',
                'capitulo' => (int)$matches[1],
                'versiculo_inicio' => isset($matches[2]) ? (int)$matches[2] : null,
                'versiculo_fin' => isset($matches[3]) ? (int)$matches[3] : (isset($matches[2]) ? (int)$matches[2] : null),
                'es_do' => true
            ];
        }
        
        // Intentar coincidencia con el patrón general
        if (preg_match($patronGeneral, $referencia, $matches)) {
            return [
                'libro' => trim($matches[1]),
                'capitulo' => (int)$matches[2],
                'versiculo_inicio' => isset($matches[3]) ? (int)$matches[3] : null,
                'versiculo_fin' => isset($matches[4]) ? (int)$matches[4] : (isset($matches[3]) ? (int)$matches[3] : null)
            ];
        }
        
        return null;
    }

    /**
     * Encuentra un capítulo usando una referencia.
     * 
     * @param string $referencia La referencia a buscar (e.g., "DyC 4", "Juan 1")
     * @return \App\Models\Capitulos|null
     */
    protected function encontrarCapituloPorReferencia($referencia)
    {
        $componentes = $this->parsearReferencia($referencia);
        
        if (!$componentes) {
            return null;
        }

        $libro = $componentes['libro'];

        // Manejo especial para libros de José Smith
        if (preg_match('/^josé\s*smith[-]+(historia|mateo)$/i', $libro)) {
            $libroFormateado = preg_replace(
                '/^josé\s*smith[-]+(historia|mateo)$/i',
                'José Smith-$1',
                $libro
            );
            
            // Capitalizar la primera letra después del guión
            $libroFormateado = preg_replace_callback(
                '/-(.)/u',
                function($matches) {
                    return '-' . mb_strtoupper($matches[1]);
                },
                $libroFormateado
            );

            // Buscar el libro exacto para José Smith
            $query = \App\Models\Capitulos::whereHas('libro', function($query) use ($libroFormateado) {
                $query->where('nombre', $libroFormateado);
            });
        } else {
            // Para otros libros, usar la normalización estándar
            $libroNormalizado = $this->normalizarTexto($libro);

            // Construir la consulta base
            $query = \App\Models\Capitulos::whereHas('libro', function($query) use ($libroNormalizado) {
                $query->whereRaw('LOWER(nombre) = LOWER(?)', [$libroNormalizado])
                    ->orWhereRaw('LOWER(abreviatura) = LOWER(?)', [$libroNormalizado]);
            });
        }

        // Si es DyC o DO, asegurarse que el libro pertenece al volumen correcto
        if (isset($componentes['es_dyc']) || isset($componentes['es_do'])) {
            $query->whereHas('libro.division.volumen', function($query) {
                $query->where('nombre', 'Doctrina y Convenios');
            });
        }

        return $query->where('num_capitulo', $componentes['capitulo'])->first();
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
        if ($componentes['versiculo_inicio'] !== null) {
            $query->whereBetween('num_versiculo', [
                $componentes['versiculo_inicio'],
                $componentes['versiculo_fin'] ?? $componentes['versiculo_inicio']
            ]);
        }

        return $query->orderBy('num_versiculo')->get();
    }
}
