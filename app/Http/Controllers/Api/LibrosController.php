<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Libros;
use App\Traits\TextNormalization;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Libros",
 *     description="API Endpoints para libros de escritura"
 * )
 */
class LibrosController extends Controller
{
    use TextNormalization;

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
     *     summary="Obtiene un libro específico por ID",
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
     *     path="/api/libros/item",
     *     summary="Busca un libro por nombre",
     *     tags={"Libros"},
     *     @OA\Parameter(
     *         name="nombre",
     *         in="query",
     *         required=true,
     *         description="Nombre del libro (insensible a mayúsculas/minúsculas y acentos)",
     *         @OA\Schema(type="string")
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
    public function buscarPorNombre(Request $request)
    {
        $nombre = $request->query('nombre');
        if (!$nombre) {
            return response()->json(['error' => 'El parámetro nombre es requerido'], 400);
        }

        $busquedaNormalizada = strtolower($this->normalizarTexto($nombre));

        // Buscar el libro usando coincidencia parcial con nombres normalizados
        $libro = Libros::all()->first(function($item) use ($busquedaNormalizada) {
            $nombreNormalizado = strtolower($this->normalizarTexto($item->nombre));
            return str_contains($nombreNormalizado, $busquedaNormalizada);
        });

        if (!$libro) {
            return response()->json(['error' => 'Libro no encontrado'], 404);
        }

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
