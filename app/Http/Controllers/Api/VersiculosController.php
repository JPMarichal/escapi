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
use App\Traits\ScriptureReferences;

#[Group('Versiculos')]
class VersiculosController extends Controller
{
    use TextNormalization, ScriptureReferences;

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
        $versiculos = $this->encontrarVersiculosPorReferencia($referencia);

        if (!$versiculos) {
            return response()->json([
                'error' => 'Formato de referencia inválido o versículos no encontrados. Use alguno de estos formatos: "Libro Capítulo:Versículo", "DyC Sección:Versículo" o "DO Declaración[:Versículo]"'
            ], 404);
        }

        return response()->json($versiculos);
    }
}
