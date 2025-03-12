<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pericopas;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Pericopas",
 *     description="API Endpoints para pericopas de escritura"
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
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Pericopa"))
     *     )
     * )
     */
    public function index()
    {
        $pericopas = Pericopas::all();
        return response()->json($pericopas);
    }

    /**
     * @OA\Get(
     *     path="/api/pericopas/{id}",
     *     summary="Obtiene una pericopa específica por ID",
     *     tags={"Pericopas"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID de la pericopa",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Pericopa encontrada exitosamente",
     *         @OA\JsonContent(ref="#/components/schemas/Pericopa")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Pericopa no encontrada"
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
     *     path="/api/pericopas/item",
     *     summary="Busca una pericopa por título",
     *     tags={"Pericopas"},
     *     @OA\Parameter(
     *         name="titulo",
     *         in="query",
     *         required=true,
     *         description="Título de la pericopa (insensible a mayúsculas/minúsculas y acentos)",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Pericopa encontrada exitosamente",
     *         @OA\JsonContent(ref="#/components/schemas/Pericopa")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Pericopa no encontrada"
     *     )
     * )
     */
    public function buscarPorTitulo(Request $request)
    {
        $titulo = $request->query('titulo');
        if (!$titulo) {
            return response()->json(['error' => 'El parámetro titulo es requerido'], 400);
        }

        $tituloNormalizado = $this->normalizarTexto($titulo);

        // Usar el modelo para buscar la pericopa
        $pericopa = Pericopas::all()
            ->first(function($pericopa) use ($tituloNormalizado) {
                $tituloPericopa = $this->normalizarTexto($pericopa->titulo);
                return str_contains($tituloPericopa, $tituloNormalizado) || 
                       str_contains($tituloNormalizado, $tituloPericopa);
            });

        if (!$pericopa) {
            return response()->json(['error' => 'Pericopa no encontrada'], 404);
        }

        return response()->json($pericopa);
    }

    /**
     * @OA\Get(
     *     path="/api/pericopas/{id}/versiculos",
     *     summary="Lista todos los versículos de una pericopa",
     *     tags={"Pericopas"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID de la pericopa",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Lista de versículos obtenida exitosamente",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Versiculo"))
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Pericopa no encontrada"
     *     )
     * )
     */
    public function versiculos($id)
    {
        $pericopa = Pericopas::findOrFail($id);
        return response()->json($pericopa->versiculos);
    }

    /**
     * @OA\Get(
     *     path="/api/pericopas/{id}/capitulo",
     *     summary="Obtiene el capítulo al que pertenece la pericopa",
     *     tags={"Pericopas"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID de la pericopa",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Capítulo obtenido exitosamente",
     *         @OA\JsonContent(ref="#/components/schemas/Capitulo")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Pericopa no encontrada"
     *     )
     * )
     */
    public function capitulo($id)
    {
        $pericopa = Pericopas::findOrFail($id);
        return response()->json($pericopa->capitulo);
    }
}
