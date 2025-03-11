<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pericopas;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Pericopas",
 *     description="API Endpoints para pericopas de capítulos"
 * )
 */
class PericopasController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/pericopas",
     *     summary="Lista todas las pericopas",
     *     tags={"Pericopas"},
     *     @OA\Response(
     *         response=200,
     *         description="Lista de pericopas obtenida exitosamente",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="current_page", type="integer"),
     *             @OA\Property(property="data", type="array", @OA\Items(ref="#/components/schemas/Pericopa")),
     *             @OA\Property(property="total", type="integer"),
     *             @OA\Property(property="per_page", type="integer")
     *         )
     *     )
     * )
     */
    public function index()
    {
        $itemsPerPage = config('pagination.items_per_page.pericopas');
        $pericopas = Pericopas::paginate($itemsPerPage);
        return response()->json($pericopas);
    }

    /**
     * @OA\Get(
     *     path="/api/pericopas/{id}",
     *     summary="Obtiene una perícopa específica",
     *     tags={"Pericopas"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID de la perícopa",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Perícopa encontrada exitosamente",
     *         @OA\JsonContent(ref="#/components/schemas/Pericopa")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Perícopa no encontrada"
     *     )
     * )
     */
    public function show($id)
    {
        $pericopa = Pericopas::findOrFail($id);
        return response()->json($pericopa);
    }

    /**
     * @OA\Get(
     *     path="/api/pericopas/{id}/versiculos",
     *     summary="Lista todos los versículos de una perícopa",
     *     tags={"Pericopas"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID de la perícopa",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Lista de versículos obtenida exitosamente",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Versiculo"))
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Perícopa no encontrada"
     *     )
     * )
     */
    public function versiculos($id)
    {
        $pericopa = Pericopas::findOrFail($id);
        return response()->json($pericopa->versiculos()->orderBy('num_versiculo', 'asc')->get());
    }

    /**
     * @OA\Get(
     *     path="/api/pericopas/{id}/capitulo",
     *     summary="Obtiene el capítulo al que pertenece la perícopa",
     *     tags={"Pericopas"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID de la perícopa",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Capítulo obtenido exitosamente",
     *         @OA\JsonContent(ref="#/components/schemas/Capitulo")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Perícopa no encontrada"
     *     )
     * )
     */
    public function capitulo($id)
    {
        $pericopa = Pericopas::findOrFail($id);
        return response()->json($pericopa->capitulo);
    }
}
