<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Capitulos;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * @OA\Tag(
 *     name="Capitulos",
 *     description="API Endpoints para capítulos de escritura"
 * )
 */
class CapitulosController extends Controller
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
     *     path="/api/capitulos",
     *     summary="Lista todos los capítulos",
     *     tags={"Capitulos"},
     *     @OA\Response(
     *         response=200,
     *         description="Lista de capítulos obtenida exitosamente",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Capitulo"))
     *     )
     * )
     */
    public function index()
    {
        $capitulos = Capitulos::all();
        return response()->json($capitulos);
    }

    /**
     * @OA\Get(
     *     path="/api/capitulos/{id}",
     *     summary="Obtiene un capítulo específico por ID",
     *     tags={"Capitulos"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del capítulo",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Capítulo encontrado exitosamente",
     *         @OA\JsonContent(ref="#/components/schemas/Capitulo")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Capítulo no encontrado"
     *     )
     * )
     */
    public function show($id)
    {
        $capitulo = Capitulos::findOrFail($id);
        return response()->json($capitulo);
    }

    /**
     * @OA\Get(
     *     path="/api/capitulos/item",
     *     summary="Busca un capítulo por su referencia",
     *     tags={"Capitulos"},
     *     @OA\Parameter(
     *         name="referencia",
     *         in="query",
     *         required=true,
     *         description="Referencia del capítulo (ejemplo: 'Génesis 1')",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Capítulo encontrado exitosamente",
     *         @OA\JsonContent(ref="#/components/schemas/Capitulo")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Capítulo no encontrado"
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

        $capitulo = Capitulos::all()->first(function($item) use ($referenciaLower) {
            return str_contains(
                $this->normalizarTexto($item->referencia),
                $referenciaLower
            );
        });

        if (!$capitulo) {
            return response()->json(['error' => 'Capítulo no encontrado'], 404);
        }

        return response()->json($capitulo);
    }

    /**
     * @OA\Get(
     *     path="/api/capitulos/{id}/pericopas",
     *     summary="Lista todas las pericopas de un capítulo",
     *     tags={"Capitulos"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del capítulo",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Lista de pericopas obtenida exitosamente",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Pericopa"))
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Capítulo no encontrado"
     *     )
     * )
     */
    public function pericopas($id)
    {
        $capitulo = Capitulos::findOrFail($id);
        return response()->json($capitulo->pericopas);
    }

    /**
     * @OA\Get(
     *     path="/api/capitulos/{id}/parte",
     *     summary="Obtiene la parte a la que pertenece el capítulo",
     *     tags={"Capitulos"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del capítulo",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Parte obtenida exitosamente",
     *         @OA\JsonContent(ref="#/components/schemas/Parte")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Capítulo no encontrado"
     *     )
     * )
     */
    public function parte($id)
    {
        $capitulo = Capitulos::findOrFail($id);
        return response()->json($capitulo->parte);
    }

    /**
     * @OA\Get(
     *     path="/api/capitulos/{id}/libro",
     *     summary="Obtiene el libro al que pertenece el capítulo",
     *     tags={"Capitulos"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del capítulo",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Libro obtenido exitosamente",
     *         @OA\JsonContent(ref="#/components/schemas/Libro")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Capítulo no encontrado"
     *     )
     * )
     */
    public function libro($id)
    {
        $capitulo = Capitulos::findOrFail($id);
        return response()->json($capitulo->libro);
    }

    /**
     * @OA\Get(
     *     path="/api/capitulos/{id}/versiculos",
     *     summary="Lista todos los versículos de un capítulo",
     *     tags={"Capitulos"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del capítulo",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Lista de versículos obtenida exitosamente",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Versiculo"))
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Capítulo no encontrado"
     *     )
     * )
     */
    public function versiculos($id)
    {
        $capitulo = Capitulos::findOrFail($id);
        return response()->json($capitulo->versiculos()->orderBy('num_versiculo', 'asc')->get());
    }
}
