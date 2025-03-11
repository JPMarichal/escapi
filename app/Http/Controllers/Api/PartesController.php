<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Partes;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Partes",
 *     description="API Endpoints para partes de libros"
 * )
 */
class PartesController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/partes",
     *     summary="Lista todas las partes",
     *     tags={"Partes"},
     *     @OA\Response(
     *         response=200,
     *         description="Lista de partes obtenida exitosamente",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Parte"))
     *     )
     * )
     */
    public function index()
    {
        $partes = Partes::all();
        return response()->json($partes);
    }

    /**
     * @OA\Get(
     *     path="/api/partes/{id}",
     *     summary="Obtiene una parte específica",
     *     tags={"Partes"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID de la parte",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Parte encontrada exitosamente",
     *         @OA\JsonContent(ref="#/components/schemas/Parte")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Parte no encontrada"
     *     )
     * )
     */
    public function show($id)
    {
        $parte = Partes::findOrFail($id);
        return response()->json($parte);
    }

    /**
     * @OA\Get(
     *     path="/api/partes/{id}/capitulos",
     *     summary="Lista todos los capítulos de una parte",
     *     tags={"Partes"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID de la parte",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Lista de capítulos obtenida exitosamente",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Capitulo"))
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Parte no encontrada"
     *     )
     * )
     */
    public function capitulos($id)
    {
        $parte = Partes::findOrFail($id);
        return response()->json($parte->capitulos);
    }

    /**
     * @OA\Get(
     *     path="/api/partes/{id}/libro",
     *     summary="Obtiene el libro al que pertenece la parte",
     *     tags={"Partes"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID de la parte",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Libro obtenido exitosamente",
     *         @OA\JsonContent(ref="#/components/schemas/Libro")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Parte no encontrada"
     *     )
     * )
     */
    public function libro($id)
    {
        $parte = Partes::findOrFail($id);
        return response()->json($parte->libro);
    }
}
