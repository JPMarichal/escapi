<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Volumenes;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * @OA\Tag(
 *     name="Volumenes",
 *     description="API Endpoints para volúmenes de escritura"
 * )
 */
class VolumenesController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/volumenes",
     *     summary="Lista todos los volúmenes",
     *     tags={"Volumenes"},
     *     @OA\Response(
     *         response=200,
     *         description="Lista de volúmenes obtenida exitosamente",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Volumen"))
     *     )
     * )
     */
    public function index()
    {
        $volumenes = Volumenes::all();
        return response()->json($volumenes);
    }

    /**
     * @OA\Get(
     *     path="/api/volumenes/{id}",
     *     summary="Obtiene un volumen específico por ID",
     *     tags={"Volumenes"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del volumen",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Volumen encontrado exitosamente",
     *         @OA\JsonContent(ref="#/components/schemas/Volumen")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Volumen no encontrado"
     *     )
     * )
     */
    public function show($id)
    {
        $volumen = Volumenes::findOrFail($id);
        return response()->json($volumen);
    }

    /**
     * @OA\Get(
     *     path="/api/volumenes/item",
     *     summary="Busca un volumen por nombre",
     *     tags={"Volumenes"},
     *     @OA\Parameter(
     *         name="nombre",
     *         in="query",
     *         required=true,
     *         description="Nombre del volumen (insensible a mayúsculas/minúsculas y acentos)",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Volumen encontrado exitosamente",
     *         @OA\JsonContent(ref="#/components/schemas/Volumen")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Volumen no encontrado"
     *     )
     * )
     */
    public function buscarPorNombre(Request $request)
    {
        $nombre = $request->query('nombre');
        if (!$nombre) {
            return response()->json(['error' => 'El parámetro nombre es requerido'], 400);
        }

        // Buscar el volumen comparando los nombres normalizados
        $volumen = Volumenes::all()->first(function($item) use ($nombre) {
            return $this->normalizarTexto($item->nombre) === $this->normalizarTexto($nombre);
        });

        if (!$volumen) {
            return response()->json(['error' => 'Volumen no encontrado'], 404);
        }

        return response()->json($volumen);
    }

    /**
     * @OA\Get(
     *     path="/api/volumenes/{id}/divisiones",
     *     summary="Lista todas las divisiones de un volumen",
     *     tags={"Volumenes"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del volumen",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Lista de divisiones obtenida exitosamente",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Division"))
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Volumen no encontrado"
     *     )
     * )
     */
    public function divisiones($id)
    {
        $volumen = Volumenes::findOrFail($id);
        return response()->json($volumen->divisiones);
    }

    /**
     * @OA\Get(
     *     path="/api/volumenes/{id}/libros",
     *     summary="Lista todos los libros de un volumen",
     *     tags={"Volumenes"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del volumen",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Lista de libros obtenida exitosamente",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Libro"))
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Volumen no encontrado"
     *     )
     * )
     */
    public function libros($id)
    {
        $volumen = Volumenes::findOrFail($id);
        return response()->json($volumen->libros);
    }
}
