<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Volumenes;
use Illuminate\Http\Request;

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
     *     summary="Obtiene un volumen específico",
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
