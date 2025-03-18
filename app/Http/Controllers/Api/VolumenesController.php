<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Volumenes;
use App\Traits\TextNormalization;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Response;
use Knuckles\Scribe\Attributes\UrlParam;

#[Group('Volúmenes')]
class VolumenesController extends Controller
{
    use TextNormalization;

    /**
     * Lista todos los volúmenes.
     * 
     * Retorna una colección de todos los volúmenes disponibles en el sistema.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    #[Response([
        'data' => [
            ['id' => 1, 'nombre' => 'Antiguo Testamento'],
            ['id' => 2, 'nombre' => 'Nuevo Testamento']
        ]
    ])]
    public function index()
    {
        $volumenes = Volumenes::all();
        return response()->json($volumenes);
    }

    /**
     * Obtiene un volumen específico por ID.
     *
     * @param int $id ID del volumen
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del volumen')]
    #[Response([
        'data' => [
            'id' => 1,
            'nombre' => 'Antiguo Testamento'
        ]
    ])]
    #[Response(status: 404, description: 'Volumen no encontrado')]
    public function show($id)
    {
        $volumen = Volumenes::findOrFail($id);
        return response()->json($volumen);
    }

    /**
     * Busca un volumen por nombre.
     * 
     * El nombre es insensible a mayúsculas/minúsculas y acentos.
     *
     * @param string $nombre Nombre del volumen a buscar
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('nombre', 'Nombre del volumen', required: true, example: 'Antiguo Testamento')]
    #[Response([
        'data' => [
            'id' => 1,
            'nombre' => 'Antiguo Testamento'
        ]
    ])]
    #[Response(status: 404, description: 'Volumen no encontrado')]
    public function buscarPorNombre($nombre)
    {
        if (!$nombre) {
            return response()->json(['error' => 'El nombre del volumen es requerido'], 400);
        }

        $nombreNormalizado = $this->normalizarTexto($nombre);
        
        $volumen = Volumenes::whereRaw('LOWER(nombre) = ?', [$nombreNormalizado])->first();

        if (!$volumen) {
            return response()->json(['error' => 'Volumen no encontrado'], 404);
        }

        return response()->json($volumen);
    }

    /**
     * Lista todas las divisiones de un volumen.
     *
     * @param int $id ID del volumen
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del volumen')]
    #[Response([
        'data' => [
            [
                'id' => 1,
                'nombre' => 'Pentateuco',
                'volumen_id' => 1
            ]
        ]
    ])]
    #[Response(status: 404, description: 'Volumen no encontrado')]
    public function divisiones($id)
    {
        $volumen = Volumenes::findOrFail($id);
        return response()->json($volumen->divisiones);
    }

    /**
     * Lista todos los libros de un volumen.
     *
     * @param int $id ID del volumen
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del volumen')]
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
    #[Response(status: 404, description: 'Volumen no encontrado')]
    public function libros($id)
    {
        $volumen = Volumenes::findOrFail($id);
        return response()->json($volumen->libros);
    }
}
