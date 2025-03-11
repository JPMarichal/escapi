<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Divisiones;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Divisiones",
 *     description="API Endpoints para divisiones de escritura"
 * )
 */
class DivisionesController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/divisiones",
     *     summary="Lista todas las divisiones",
     *     tags={"Divisiones"},
     *     @OA\Response(
     *         response=200,
     *         description="Lista de divisiones obtenida exitosamente",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Division"))
     *     )
     * )
     */
    public function index()
    {
        $divisiones = Divisiones::all();
        return response()->json($divisiones);
    }

    /**
     * @OA\Get(
     *     path="/api/divisiones/{id}",
     *     summary="Obtiene una división específica",
     *     tags={"Divisiones"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID de la división",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="División encontrada exitosamente",
     *         @OA\JsonContent(ref="#/components/schemas/Division")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="División no encontrada"
     *     )
     * )
     */
    public function show($id)
    {
        $division = Divisiones::findOrFail($id);
        return response()->json($division);
    }

    /**
     * @OA\Get(
     *     path="/api/divisiones/{id}/libros",
     *     summary="Lista todos los libros de una división",
     *     tags={"Divisiones"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID de la división",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Lista de libros obtenida exitosamente",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Libro"))
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="División no encontrada"
     *     )
     * )
     */
    public function libros($id)
    {
        $division = Divisiones::findOrFail($id);
        return response()->json($division->libros);
    }

    /**
     * @OA\Get(
     *     path="/api/divisiones/{id}/volumen",
     *     summary="Obtiene el volumen al que pertenece la división",
     *     tags={"Divisiones"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID de la división",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Volumen obtenido exitosamente",
     *         @OA\JsonContent(ref="#/components/schemas/Volumen")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="División no encontrada"
     *     )
     * )
     */
    public function volumen($id)
    {
        $division = Divisiones::findOrFail($id);
        return response()->json($division->volumen);
    }
}
