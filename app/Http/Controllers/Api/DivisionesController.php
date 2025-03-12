<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Divisiones;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Response;
use Knuckles\Scribe\Attributes\QueryParam;
use Knuckles\Scribe\Attributes\UrlParam;

#[Group('Divisiones')]
class DivisionesController extends Controller
{
    /**
     * Lista todas las divisiones.
     * 
     * Retorna una colección de todas las divisiones disponibles en el sistema.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    #[Response([
        'data' => [
            [
                'id' => 1,
                'nombre' => 'Pentateuco',
                'volumen_id' => 1
            ]
        ]
    ])]
    public function index()
    {
        $divisiones = Divisiones::all();
        return response()->json($divisiones);
    }

    /**
     * Obtiene una división específica por ID.
     *
     * @param int $id ID de la división
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID de la división')]
    #[Response([
        'data' => [
            'id' => 1,
            'nombre' => 'Pentateuco',
            'volumen_id' => 1
        ]
    ])]
    #[Response(status: 404, description: 'División no encontrada')]
    public function show($id)
    {
        $division = Divisiones::findOrFail($id);
        return response()->json($division);
    }

    /**
     * Busca una división por nombre.
     * 
     * El nombre es insensible a mayúsculas/minúsculas y acentos.
     * La búsqueda funciona si el nombre buscado está contenido en el nombre de la división
     * o si el nombre de la división está contenido en el nombre buscado.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    #[QueryParam('nombre', 'Nombre de la división a buscar', required: true, example: 'Pentateuco')]
    #[Response([
        'data' => [
            'id' => 1,
            'nombre' => 'Pentateuco',
            'volumen_id' => 1
        ]
    ])]
    #[Response(status: 404, description: 'División no encontrada')]
    #[Response(status: 400, description: 'El parámetro nombre es requerido')]
    public function buscarPorNombre(Request $request)
    {
        $nombre = $request->query('nombre');
        if (!$nombre) {
            return response()->json(['error' => 'El parámetro nombre es requerido'], 400);
        }

        $nombreNormalizado = $this->normalizarTexto($nombre);

        $division = Divisiones::all()
            ->first(function($division) use ($nombreNormalizado) {
                $nombreDivision = $this->normalizarTexto($division->nombre);
                return str_contains($nombreDivision, $nombreNormalizado) || 
                       str_contains($nombreNormalizado, $nombreDivision);
            });

        if (!$division) {
            return response()->json(['error' => 'División no encontrada'], 404);
        }

        return response()->json($division);
    }

    /**
     * Lista todos los libros de una división.
     *
     * @param int $id ID de la división
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID de la división')]
    #[Response([
        'data' => [
            [
                'id' => 1,
                'nombre' => 'Génesis',
                'division_id' => 1,
                'volumen_id' => 1
            ]
        ]
    ])]
    #[Response(status: 404, description: 'División no encontrada')]
    public function libros($id)
    {
        $division = Divisiones::findOrFail($id);
        return response()->json($division->libros);
    }

    /**
     * Obtiene el volumen al que pertenece la división.
     *
     * @param int $id ID de la división
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID de la división')]
    #[Response([
        'data' => [
            'id' => 1,
            'nombre' => 'Antiguo Testamento'
        ]
    ])]
    #[Response(status: 404, description: 'División no encontrada')]
    public function volumen($id)
    {
        $division = Divisiones::findOrFail($id);
        return response()->json($division->volumen);
    }
}
