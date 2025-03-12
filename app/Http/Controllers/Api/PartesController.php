<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Partes;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Partes",
 *     description="API Endpoints para partes de escritura"
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
     *     summary="Obtiene una parte específica por ID",
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
     *     path="/api/partes/item",
     *     summary="Busca una parte por nombre",
     *     tags={"Partes"},
     *     @OA\Parameter(
     *         name="nombre",
     *         in="query",
     *         required=true,
     *         description="Nombre de la parte (insensible a mayúsculas/minúsculas y acentos)",
     *         @OA\Schema(type="string")
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
    public function buscarPorNombre(Request $request)
    {
        $nombre = $request->query('nombre');
        if (!$nombre) {
            return response()->json(['error' => 'El parámetro nombre es requerido'], 400);
        }

        $nombreNormalizado = $this->normalizarTexto($nombre);

        // Usar el modelo para buscar la parte
        $parte = Partes::all()
            ->first(function($parte) use ($nombreNormalizado) {
                $nombreParte = $this->normalizarTexto($parte->nombre);
                return str_contains($nombreParte, $nombreNormalizado) || 
                       str_contains($nombreNormalizado, $nombreParte);
            });

        if (!$parte) {
            return response()->json(['error' => 'Parte no encontrada'], 404);
        }

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
