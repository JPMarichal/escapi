<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Capitulos;
use App\Traits\TextNormalization;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Response;
use Knuckles\Scribe\Attributes\QueryParam;
use Knuckles\Scribe\Attributes\UrlParam;

#[Group('Capitulos')]
class CapitulosController extends Controller
{
    use TextNormalization;

    /**
     * Lista todos los capítulos.
     * 
     * Retorna una colección de todos los capítulos disponibles en el sistema.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    #[Response([
        'data' => [
            [
                'id' => 1,
                'nombre' => 'Capítulo 1',
                'num_capitulo' => 1,
                'orden' => 1,
                'libro_id' => 1,
                'parte_id' => null
            ]
        ]
    ])]
    public function index()
    {
        $capitulos = Capitulos::all();
        return response()->json($capitulos);
    }

    /**
     * Obtiene un capítulo específico por ID.
     *
     * @param int $id ID del capítulo
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del capítulo')]
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
    #[Response(status: 404, description: 'Capítulo no encontrado')]
    public function show($id)
    {
        $capitulo = Capitulos::find($id);
        
        if (!$capitulo) {
            return response()->json(['error' => 'Capítulo no encontrado'], 404);
        }
        
        return response()->json($capitulo);
    }

    /**
     * Busca un capítulo por su referencia.
     * 
     * La búsqueda es insensible a mayúsculas/minúsculas y acentos.
     * Ejemplo de referencia: 'Génesis 1'
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    #[QueryParam('referencia', 'Referencia del capítulo', required: true, example: 'Génesis 1')]
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
    #[Response(status: 404, description: 'Capítulo no encontrado')]
    #[Response(status: 400, description: 'El parámetro referencia es requerido')]
    public function buscarPorReferencia(Request $request)
    {
        if (!$request->has('referencia')) {
            return response()->json(['error' => 'El parámetro referencia es requerido'], 400);
        }

        $referencia = trim($request->input('referencia'));
        
        $capitulo = Capitulos::all()->first(function($item) use ($referencia) {
            return strtolower($this->normalizarTexto($item->referencia)) === 
                   strtolower($this->normalizarTexto($referencia));
        });

        if (!$capitulo) {
            return response()->json(['error' => 'Capítulo no encontrado'], 404);
        }

        return response()->json($capitulo);
    }

    /**
     * Lista todas las pericopas de un capítulo.
     *
     * @param int $id ID del capítulo
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del capítulo')]
    #[Response([
        'data' => [
            [
                'id' => 1,
                'titulo' => 'La Creación',
                'orden' => 1,
                'capitulo_id' => 1
            ]
        ]
    ])]
    #[Response(status: 404, description: 'Capítulo no encontrado')]
    public function pericopas($id)
    {
        $capitulo = Capitulos::findOrFail($id);
        return response()->json($capitulo->pericopas);
    }

    /**
     * Obtiene la parte a la que pertenece el capítulo.
     *
     * @param int $id ID del capítulo
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del capítulo')]
    #[Response([
        'data' => [
            'id' => 1,
            'nombre' => 'Parte 1',
            'orden' => 1,
            'libro_id' => 1
        ]
    ])]
    #[Response(status: 404, description: 'Capítulo no encontrado')]
    public function parte($id)
    {
        $capitulo = Capitulos::findOrFail($id);
        return response()->json($capitulo->parte);
    }

    /**
     * Obtiene el libro al que pertenece el capítulo.
     *
     * @param int $id ID del capítulo
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del capítulo')]
    #[Response([
        'data' => [
            'id' => 1,
            'nombre' => 'Génesis',
            'division_id' => 1,
            'volumen_id' => 1
        ]
    ])]
    #[Response(status: 404, description: 'Capítulo no encontrado')]
    public function libro($id)
    {
        $capitulo = Capitulos::findOrFail($id);
        return response()->json($capitulo->libro);
    }

    /**
     * Lista todos los versículos de un capítulo.
     * 
     * Los versículos son retornados ordenados por número de versículo.
     *
     * @param int $id ID del capítulo
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del capítulo')]
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
        ]
    ])]
    #[Response(status: 404, description: 'Capítulo no encontrado')]
    public function versiculos($id)
    {
        $capitulo = Capitulos::findOrFail($id);
        return response()->json($capitulo->versiculos()->orderBy('num_versiculo', 'asc')->get());
    }
}
