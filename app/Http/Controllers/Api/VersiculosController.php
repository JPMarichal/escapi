<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Versiculos;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * @OA\Tag(
 *     name="Versiculos",
 *     description="API Endpoints para versículos de capítulos"
 * )
 */
class VersiculosController extends Controller
{
    protected function normalizarTexto($texto)
    {
        $unwanted_array = array(
            'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y'
        );
        return strtolower(strtr($texto, $unwanted_array));
    }

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
     *     path="/api/versiculos/item",
     *     summary="Busca un versículo por su referencia",
     *     tags={"Versiculos"},
     *     @OA\Parameter(
     *         name="referencia",
     *         in="query",
     *         required=true,
     *         description="Referencia del versículo (ejemplo: 'Génesis 1:1')",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Versículo encontrado exitosamente",
     *         @OA\JsonContent(ref="#/components/schemas/Versiculo")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Versículo no encontrado"
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Parámetro referencia requerido"
     *     )
     * )
     */
    public function buscarPorReferencia(Request $request)
    {
        if (!$request->has('referencia')) {
            return response()->json(['error' => 'El parámetro referencia es requerido'], 400);
        }

        $referencia = $request->input('referencia');
        $referenciaLower = $this->normalizarTexto($referencia);

        $versiculo = Versiculos::all()->first(function($item) use ($referenciaLower) {
            return str_contains(
                $this->normalizarTexto($item->referencia),
                $referenciaLower
            );
        });

        if (!$versiculo) {
            return response()->json(['error' => 'Versículo no encontrado'], 404);
        }

        return response()->json($versiculo);
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
