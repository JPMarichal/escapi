<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Divisiones;
use App\Traits\TextNormalization;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Response;
use Knuckles\Scribe\Attributes\UrlParam;

#[Group('Divisiones')]
class DivisionesController extends Controller
{
    use TextNormalization;

    /**
     * Lista todas las divisiones.
     * 
     * Retorna una colección de todas las divisiones disponibles en el sistema.
     * Las divisiones son agrupaciones de libros dentro de un volumen (ej: Pentateuco, Libros Históricos).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    #[Response([
        'data' => [
            [
                'id' => 1,
                'nombre' => 'Pentateuco',
                'volumen_id' => 1
            ],
            [
                'id' => 2,
                'nombre' => 'Libros Históricos',
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
    #[UrlParam('id', 'El ID de la división', required: true)]
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
        $division = Divisiones::find($id);
        
        if (!$division) {
            return response()->json(['error' => 'División no encontrada'], 404);
        }

        return response()->json($division);
    }

    /**
     * Busca una división por nombre.
     * 
     * El nombre es insensible a mayúsculas/minúsculas y acentos.
     * La búsqueda debe ser exacta con el nombre de la división.
     *
     * @param string $nombre Nombre de la división (ej: 'Pentateuco')
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('nombre', 'Nombre de la división', required: true, example: 'Pentateuco')]
    #[Response([
        'data' => [
            'id' => 1,
            'nombre' => 'Pentateuco',
            'volumen_id' => 1
        ]
    ])]
    #[Response(status: 404, description: 'División no encontrada')]
    public function buscarPorNombre($nombre)
    {
        if (!$nombre) {
            return response()->json(['error' => 'El nombre de la división es requerido'], 400);
        }

        $nombreNormalizado = $this->normalizarTexto($nombre);
        
        $division = Divisiones::whereRaw('LOWER(nombre) = ?', [$nombreNormalizado])->first();

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
    #[UrlParam('id', 'El ID de la división', required: true)]
    #[Response([
        'data' => [
            [
                'id' => 1,
                'nombre' => 'Génesis',
                'abreviatura' => 'GEN',
                'division_id' => 1,
                'volumen_id' => 1
            ]
        ]
    ])]
    #[Response(status: 404, description: 'División no encontrada')]
    public function libros($id)
    {
        $division = Divisiones::find($id);
        
        if (!$division) {
            return response()->json(['error' => 'División no encontrada'], 404);
        }

        return response()->json($division->libros);
    }

    /**
     * Obtiene el volumen al que pertenece la división.
     *
     * @param int $id ID de la división
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID de la división', required: true)]
    #[Response([
        'data' => [
            'id' => 1,
            'nombre' => 'Antiguo Testamento'
        ]
    ])]
    #[Response(status: 404, description: 'División no encontrada')]
    public function volumen($id)
    {
        $division = Divisiones::find($id);
        
        if (!$division) {
            return response()->json(['error' => 'División no encontrada'], 404);
        }

        return response()->json($division->volumen);
    }
}
