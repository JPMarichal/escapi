<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Versiculos;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Versiculos",
 *     description="API Endpoints para versículos de capítulos"
 * )
 */
class VersiculosController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/versiculos",
     *     summary="Lista todos los versículos",
     *     tags={"Versiculos"},
     *     @OA\Response(
     *         response=200,
     *         description="Lista de versículos obtenida exitosamente",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="current_page", type="integer"),
     *             @OA\Property(property="data", type="array", @OA\Items(ref="#/components/schemas/Versiculo")),
     *             @OA\Property(property="total", type="integer"),
     *             @OA\Property(property="per_page", type="integer")
     *         )
     *     )
     * )
     */
    public function index()
    {
        $itemsPerPage = config('pagination.items_per_page.versiculos');
        $versiculos = Versiculos::paginate($itemsPerPage);
        return response()->json($versiculos);
    }

    /**
     * @OA\Get(
     *     path="/api/versiculos/{id}",
     *     summary="Obtiene un versículo específico",
     *     tags={"Versiculos"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del versículo",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Versículo encontrado exitosamente",
     *         @OA\JsonContent(ref="#/components/schemas/Versiculo")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Versículo no encontrado"
     *     )
     * )
     */
    public function show($id)
    {
        $versiculo = Versiculos::findOrFail($id);
        return response()->json($versiculo);
    }

    /**
     * @OA\Get(
     *     path="/api/versiculos/{id}/pericopa",
     *     summary="Obtiene la perícopa a la que pertenece el versículo",
     *     tags={"Versiculos"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del versículo",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Perícopa obtenida exitosamente",
     *         @OA\JsonContent(ref="#/components/schemas/Pericopa")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Versículo no encontrado"
     *     )
     * )
     */
    public function pericopa($id)
    {
        $versiculo = Versiculos::findOrFail($id);
        return response()->json($versiculo->pericopa);
    }

    /**
     * @OA\Get(
     *     path="/api/versiculos/{id}/capitulo",
     *     summary="Obtiene el capítulo al que pertenece el versículo",
     *     tags={"Versiculos"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del versículo",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Capítulo obtenido exitosamente",
     *         @OA\JsonContent(ref="#/components/schemas/Capitulo")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Versículo no encontrado"
     *     )
     * )
     */
    public function capitulo($id)
    {
        $versiculo = Versiculos::findOrFail($id);
        return response()->json($versiculo->capitulo);
    }
}
