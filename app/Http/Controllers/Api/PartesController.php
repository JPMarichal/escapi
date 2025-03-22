<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Partes;
use App\Traits\TextNormalization;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Response;
use Knuckles\Scribe\Attributes\QueryParam;
use Knuckles\Scribe\Attributes\UrlParam;

#[Group('Partes')]
class PartesController extends Controller
{
    use TextNormalization;

    /**
     * Lista todas las partes.
     * 
     * Retorna una colección de todas las partes disponibles en el sistema.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    #[Response([
        'data' => [
            [
                'id' => 1,
                'nombre' => 'Parte 1',
                'orden' => 1,
                'libro_id' => 1
            ]
        ]
    ])]
    public function index()
    {
        $partes = Partes::all();
        return response()->json($partes);
    }

    /**
     * Obtiene una parte específica por ID.
     *
     * @param int $id ID de la parte
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID de la parte')]
    #[Response([
        'data' => [
            'id' => 1,
            'nombre' => 'Parte 1',
            'orden' => 1,
            'libro_id' => 1
        ]
    ])]
    #[Response(status: 404, description: 'Parte no encontrada')]
    public function show($id)
    {
        $parte = Partes::find($id);
        if (!$parte) {
            return response()->json(['error' => 'Parte no encontrada'], 404);
        }
        return response()->json($parte);
    }

    /**
     * Busca una parte por nombre.
     * 
     * El nombre es insensible a mayúsculas/minúsculas y acentos.
     * La búsqueda funciona si el nombre buscado está contenido en el nombre de la parte.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    #[QueryParam('nombre', 'Nombre de la parte a buscar', required: true, example: 'Parte 1')]
    #[Response([
        'data' => [
            'id' => 1,
            'nombre' => 'Parte 1',
            'orden' => 1,
            'libro_id' => 1
        ]
    ])]
    #[Response(status: 404, description: 'Parte no encontrada')]
    #[Response(status: 400, description: 'El parámetro nombre es requerido')]
    public function buscarPorNombre(Request $request)
    {
        $nombre = $request->query('nombre');
        if (!$nombre) {
            return response()->json(['error' => 'El parámetro nombre es requerido'], 400);
        }

        $nombreNormalizado = $this->normalizarTexto($nombre);

        $parte = Partes::all()->first(function($parte) use ($nombreNormalizado) {
            $nombreParte = $this->normalizarTexto($parte->nombre);
            return str_contains($nombreParte, $nombreNormalizado);
        });

        if (!$parte) {
            return response()->json(['error' => 'Parte no encontrada'], 404);
        }

        return response()->json($parte);
    }

    /**
     * Lista todos los capítulos de una parte.
     *
     * @param int $id ID de la parte
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID de la parte')]
    #[Response([
        'data' => [
            [
                'id' => 1,
                'nombre' => 'Capítulo 1',
                'num_capitulo' => 1,
                'orden' => 1,
                'libro_id' => 1,
                'parte_id' => 1
            ]
        ]
    ])]
    #[Response(status: 404, description: 'Parte no encontrada')]
    public function capitulos($id)
    {
        $parte = Partes::find($id);
        if (!$parte) {
            return response()->json(['error' => 'Parte no encontrada'], 404);
        }
        return response()->json($parte->capitulos);
    }

    /**
     * Obtiene el libro al que pertenece la parte.
     *
     * @param int $id ID de la parte
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID de la parte')]
    #[Response([
        'data' => [
            'id' => 1,
            'nombre' => 'Génesis',
            'division_id' => 1,
            'volumen_id' => 1
        ]
    ])]
    #[Response(status: 404, description: 'Parte no encontrada')]
    public function libro($id)
    {
        $parte = Partes::find($id);
        if (!$parte) {
            return response()->json(['error' => 'Parte no encontrada'], 404);
        }
        return response()->json($parte->libro);
    }
}
