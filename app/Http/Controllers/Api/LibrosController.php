<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Libros;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Libros",
 *     description="API Endpoints para libros de escritura"
 * )
 */
class LibrosController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/libros",
     *     summary="Lista todos los libros",
     *     tags={"Libros"},
     *     @OA\Response(
     *         response=200,
     *         description="Lista de libros obtenida exitosamente",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Libro"))
     *     )
     * )
     */
    public function index()
    {
        $libros = Libros::all();
        return response()->json($libros);
    }

    /**
     * @OA\Get(
     *     path="/api/libros/{id}",
     *     summary="Obtiene un libro específico",
     *     tags={"Libros"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del libro",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Libro encontrado exitosamente",
     *         @OA\JsonContent(ref="#/components/schemas/Libro")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Libro no encontrado"
     *     )
     * )
     */
    public function show($id)
    {
        $libro = Libros::findOrFail($id);
        return response()->json($libro);
    }

    /**
     * @OA\Get(
     *     path="/api/libros/{id}/partes",
     *     summary="Lista todas las partes de un libro",
     *     tags={"Libros"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del libro",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Lista de partes obtenida exitosamente",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Parte"))
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Libro no encontrado"
     *     )
     * )
     */
    public function partes($id)
    {
        $libro = Libros::findOrFail($id);
        return response()->json($libro->partes);
    }

    /**
     * @OA\Get(
     *     path="/api/libros/{id}/capitulos",
     *     summary="Lista todos los capítulos de un libro",
     *     tags={"Libros"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del libro",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Lista de capítulos obtenida exitosamente",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Capitulo"))
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Libro no encontrado"
     *     )
     * )
     */
    public function capitulos($id)
    {
        $libro = Libros::findOrFail($id);
        return response()->json($libro->capitulos);
    }

    /**
     * @OA\Get(
     *     path="/api/libros/{id}/division",
     *     summary="Obtiene la división a la que pertenece el libro",
     *     tags={"Libros"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del libro",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="División obtenida exitosamente",
     *         @OA\JsonContent(ref="#/components/schemas/Division")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Libro no encontrado"
     *     )
     * )
     */
    public function division($id)
    {
        $libro = Libros::findOrFail($id);
        return response()->json($libro->division);
    }

    /**
     * @OA\Get(
     *     path="/api/libros/{id}/volumen",
     *     summary="Obtiene el volumen al que pertenece el libro",
     *     tags={"Libros"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del libro",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Volumen obtenido exitosamente",
     *         @OA\JsonContent(ref="#/components/schemas/Volumen")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Libro no encontrado"
     *     )
     * )
     */
    public function volumen($id)
    {
        $libro = Libros::findOrFail($id);
        return response()->json($libro->volumen);
    }
}
