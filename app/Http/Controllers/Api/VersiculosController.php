<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Versiculos;
use App\Models\Capitulos;
use App\Traits\TextNormalization;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Response;
use Knuckles\Scribe\Attributes\QueryParam;
use Knuckles\Scribe\Attributes\UrlParam;

#[Group('Versiculos')]
class VersiculosController extends Controller
{
    use TextNormalization;

    /**
     * Lista todos los versículos.
     * 
     * Retorna una colección paginada de todos los versículos disponibles en el sistema.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    #[Response([
        'data' => [
            [
                'id' => 1,
                'contenido' => 'En el principio creó Dios los cielos y la tierra.',
                'num_versiculo' => 1,
                'orden' => 1,
                'capitulo_id' => 1,
                'pericopa_id' => 1
            ]
        ],
        'current_page' => 1,
        'total' => 100,
        'per_page' => 15
    ])]
    public function index()
    {
        $itemsPerPage = config('pagination.items_per_page.versiculos');
        $versiculos = Versiculos::paginate($itemsPerPage);
        return response()->json($versiculos);
    }

    /**
     * Busca un versículo por su referencia.
     * 
     * La búsqueda es insensible a mayúsculas/minúsculas y acentos.
     * Ejemplo de referencia: 'Génesis 1:1'
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    #[QueryParam('referencia', 'Referencia del versículo', required: true, example: 'Génesis 1:1')]
    #[Response([
        'data' => [
            'id' => 1,
            'contenido' => 'En el principio creó Dios los cielos y la tierra.',
            'num_versiculo' => 1,
            'orden' => 1,
            'capitulo_id' => 1,
            'pericopa_id' => 1
        ]
    ])]
    #[Response(status: 404, description: 'Versículo no encontrado')]
    #[Response(status: 400, description: 'El parámetro referencia es requerido')]
    public function buscarPorReferencia(Request $request)
    {
        if (!$request->has('referencia')) {
            return response()->json(['error' => 'El parámetro referencia es requerido'], 400);
        }

        $referencia = $request->input('referencia');
        $referenciaLower = $this->normalizarTexto($referencia);

        $versiculo = Versiculos::all()->first(function($item) use ($referenciaLower) {
            return str_contains(
                $this->normalizarTexto($item->referencia),
                $referenciaLower
            );
        });

        if (!$versiculo) {
            return response()->json(['error' => 'Versículo no encontrado'], 404);
        }

        return response()->json($versiculo);
    }

    /**
     * Obtiene un versículo específico.
     *
     * @param int $id ID del versículo
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del versículo')]
    #[Response([
        'data' => [
            'id' => 1,
            'contenido' => 'En el principio creó Dios los cielos y la tierra.',
            'num_versiculo' => 1,
            'orden' => 1,
            'capitulo_id' => 1,
            'pericopa_id' => 1
        ]
    ])]
    #[Response(status: 404, description: 'Versículo no encontrado')]
    public function show($id)
    {
        $versiculo = Versiculos::findOrFail($id);
        return response()->json($versiculo);
    }

    /**
     * Obtiene la perícopa a la que pertenece el versículo.
     *
     * @param int $id ID del versículo
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del versículo')]
    #[Response([
        'data' => [
            'id' => 1,
            'titulo' => 'La Creación',
            'orden' => 1,
            'capitulo_id' => 1
        ]
    ])]
    #[Response(status: 404, description: 'Versículo no encontrado')]
    public function pericopa($id)
    {
        $versiculo = Versiculos::findOrFail($id);
        return response()->json($versiculo->pericopa);
    }

    /**
     * Obtiene el capítulo al que pertenece el versículo.
     *
     * @param int $id ID del versículo
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del versículo')]
    #[Response([
        'data' => [
            'id' => 1,
            'nombre' => 'Capítulo 1',
            'num_capitulo' => 1,
            'orden' => 1,
            'libro_id' => 1,
            'parte_id' => null
        ]
    ])]
    #[Response(status: 404, description: 'Versículo no encontrado')]
    public function capitulo($id)
    {
        $versiculo = Versiculos::findOrFail($id);
        return response()->json($versiculo->capitulo);
    }

       /**
     * Parsea una referencia de escritura y retorna sus componentes.
     * 
     * @param string $referencia Ejemplo: "Juan 1:1-3" o "Juan 1:1"
     * @return array|null Retorna null si el formato es inválido
     */
    private function parsearReferencia($referencia)
    {
        // Patrón para Doctrina y Convenios: "DyC 4:2" o "Doctrina y Convenios 4:2"
        $patronDyC = '/^(?:DyC|Doctrina y Convenios)\s+(\d+):(\d+)(?:-(\d+))?$/u';
        
        // Patrón para Declaraciones Oficiales: "DO 2" o "DO 2:3" o "Declaración oficial 2" o "Declaración oficial 2:3"
        $patronDO = '/^(?:DO|Declaraci[óo]n[es]? oficial[es]?)\s+(\d+)(?::(\d+)(?:-(\d+))?)?$/u';
        
        // Patrón general para otros libros: "Juan 1:1" o "Juan 1:1-3" o "1 Juan 1:1-3"
        $patronGeneral = '/^((?:\d\s+)?[A-ZÁÉÍÓÚÜa-záéíóúü\s]+)\s+(\d+):(\d+)(?:-(\d+))?$/u';

        // Intentar coincidencia con DyC
        if (preg_match($patronDyC, $referencia, $matches)) {
            return [
                'libro' => 'Secciones',
                'capitulo' => (int)$matches[1],
                'versiculo_inicio' => (int)$matches[2],
                'versiculo_fin' => isset($matches[3]) ? (int)$matches[3] : (int)$matches[2],
                'es_dyc' => true
            ];
        }
        
        // Intentar coincidencia con DO
        if (preg_match($patronDO, $referencia, $matches)) {
            return [
                'libro' => 'Declaraciones Oficiales',
                'capitulo' => (int)$matches[1],
                'versiculo_inicio' => isset($matches[2]) ? (int)$matches[2] : 1,
                'versiculo_fin' => isset($matches[3]) ? (int)$matches[3] : (isset($matches[2]) ? (int)$matches[2] : 1),
                'es_do' => true
            ];
        }
        
        // Intentar coincidencia con el patrón general
        if (preg_match($patronGeneral, $referencia, $matches)) {
            return [
                'libro' => trim($matches[1]),
                'capitulo' => (int)$matches[2],
                'versiculo_inicio' => (int)$matches[3],
                'versiculo_fin' => isset($matches[4]) ? (int)$matches[4] : (int)$matches[3]
            ];
        }
        
        return null;
    }

    /**
     * Busca versículos por referencia completa.
     * 
     * Acepta referencias en los siguientes formatos:
     * - Formato general: "Libro Capítulo:Versículo" o "Libro Capítulo:Versículo-Versículo"
     * - Doctrina y Convenios: "DyC 4:2" o "Doctrina y Convenios 4:2"
     * - Declaraciones Oficiales: "DO 2" o "DO 2:3" o "Declaración oficial 2" o "Declaración oficial 2:3"
     * 
     * Ejemplos: 
     * - "Juan 1:1"
     * - "Juan 1:1-3"
     * - "DyC 4:2"
     * - "DO 2:3"
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    #[QueryParam('referencia', 'Referencia completa', required: true, example: 'Juan 1:1-3')]
    #[Response([
        'data' => [
            [
                'id' => 1,
                'contenido' => 'En el principio era el Verbo...',
                'num_versiculo' => 1,
                'orden' => 1
            ]
        ]
    ])]
    #[Response(status: 400, description: 'Formato de referencia inválido')]
    #[Response(status: 404, description: 'Versículos no encontrados')]
    public function buscarPorReferenciaCompleta(Request $request)
    {
        if (!$request->has('referencia')) {
            return response()->json(['error' => 'El parámetro referencia es requerido'], 400);
        }

        $referencia = $request->input('referencia');
        $componentes = $this->parsearReferencia($referencia);

        if (!$componentes) {
            return response()->json([
                'error' => 'Formato de referencia inválido. Use alguno de estos formatos: "Libro Capítulo:Versículo", "DyC Sección:Versículo" o "DO Declaración[:Versículo]"'
            ], 400);
        }

        $libroNormalizado = $this->normalizarTexto($componentes['libro']);

        // Primero encontramos el capítulo correcto
        $query = Capitulos::whereHas('libro', function($query) use ($libroNormalizado) {
            $query->whereRaw('LOWER(nombre) = LOWER(?)', [$libroNormalizado]);
        });

        // Si es DyC o DO, asegurarse que el libro pertenece al volumen correcto
        if (isset($componentes['es_dyc']) || isset($componentes['es_do'])) {
            $query->whereHas('libro.division.volumen', function($query) {
                $query->where('nombre', 'Doctrina y Convenios');
            });
        }

        $capitulo = $query->where('num_capitulo', $componentes['capitulo'])->first();

        if (!$capitulo) {
            return response()->json(['error' => 'Capítulo no encontrado'], 404);
        }

        // Luego buscamos los versículos en el rango especificado
        $versiculos = Versiculos::select('id', 'capitulo_id', 'pericopa_id', 'num_versiculo', 'contenido', 'referencia')
            ->where('capitulo_id', $capitulo->id)
            ->whereBetween('num_versiculo', [
                $componentes['versiculo_inicio'],
                $componentes['versiculo_fin']
            ])
            ->orderBy('num_versiculo')
            ->get();

        if ($versiculos->isEmpty()) {
            return response()->json(['error' => 'Versículos no encontrados'], 404);
        }

        return response()->json($versiculos);
    }
}
