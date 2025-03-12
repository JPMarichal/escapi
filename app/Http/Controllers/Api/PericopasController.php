<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pericopas;
use App\Traits\TextNormalization;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Response;
use Knuckles\Scribe\Attributes\QueryParam;
use Knuckles\Scribe\Attributes\UrlParam;

#[Group('Pericopas')]
class PericopasController extends Controller
{
    use TextNormalization;

    /**
     * Lista todas las pericopas.
     * 
     * Retorna una colección de todas las pericopas disponibles en el sistema.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    #[Response([
        'data' => [
            [
                'id' => 1,
                'titulo' => 'La Creación',
                'orden' => 1,
                'capitulo_id' => 1
            ]
        ]
    ])]
    public function index()
    {
        $pericopas = Pericopas::all();
        return response()->json($pericopas);
    }

    /**
     * Obtiene una pericopa específica por ID.
     *
     * @param int $id ID de la pericopa
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID de la pericopa')]
    #[Response([
        'data' => [
            'id' => 1,
            'titulo' => 'La Creación',
            'orden' => 1,
            'capitulo_id' => 1
        ]
    ])]
    #[Response(status: 404, description: 'Pericopa no encontrada')]
    public function show($id)
    {
        $pericopa = Pericopas::findOrFail($id);
        return response()->json($pericopa);
    }

    /**
     * Busca una pericopa por título.
     * 
     * La búsqueda es insensible a mayúsculas/minúsculas y acentos.
     * Encuentra coincidencias parciales en ambas direcciones.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    #[QueryParam('titulo', 'Título de la pericopa', required: true, example: 'La Creación')]
    #[Response([
        'data' => [
            'id' => 1,
            'titulo' => 'La Creación',
            'orden' => 1,
            'capitulo_id' => 1
        ]
    ])]
    #[Response(status: 404, description: 'Pericopa no encontrada')]
    #[Response(status: 400, description: 'El parámetro titulo es requerido')]
    public function buscarPorTitulo(Request $request)
    {
        $titulo = $request->query('titulo');
        if (!$titulo) {
            return response()->json(['error' => 'El parámetro titulo es requerido'], 400);
        }

        $tituloNormalizado = $this->normalizarTexto($titulo);

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
     * Lista todos los versículos de una pericopa.
     *
     * @param int $id ID de la pericopa
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID de la pericopa')]
    #[Response([
        'data' => [
            [
                'id' => 1,
                'contenido' => 'En el principio creó Dios los cielos y la tierra.',
                'num_versiculo' => 1,
                'orden' => 1,
                'capitulo_id' => 1,
                'pericopa_id' => 1
            ]
        ]
    ])]
    #[Response(status: 404, description: 'Pericopa no encontrada')]
    public function versiculos($id)
    {
        $pericopa = Pericopas::findOrFail($id);
        return response()->json($pericopa->versiculos);
    }

    /**
     * Obtiene el capítulo al que pertenece la pericopa.
     *
     * @param int $id ID de la pericopa
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID de la pericopa')]
    #[Response([
        'data' => [
            'id' => 1,
            'nombre' => 'Capítulo 1',
            'num_capitulo' => 1,
            'orden' => 1,
            'libro_id' => 1,
            'parte_id' => null
        ]
    ])]
    #[Response(status: 404, description: 'Pericopa no encontrada')]
    public function capitulo($id)
    {
        $pericopa = Pericopas::findOrFail($id);
        return response()->json($pericopa->capitulo);
    }
}
