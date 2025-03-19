<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Capitulos;
use App\Traits\TextNormalization;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Response;
use Knuckles\Scribe\Attributes\QueryParam;
use Knuckles\Scribe\Attributes\UrlParam;
use App\Traits\ScriptureReferences;

#[Group('Capitulos')]
class CapitulosController extends Controller
{
    use TextNormalization, ScriptureReferences;

    /**
     * Lista todos los capítulos.
     * 
     * Retorna una colección de todos los capítulos disponibles en el sistema.
     * Los capítulos son las divisiones principales de los libros de las escrituras.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    #[Response([
        'data' => [
            [
                'id' => 1,
                'nombre' => 'Capítulo 1',
                'num_capitulo' => 1,
                'orden' => 1,
                'libro_id' => 1,
                'parte_id' => null
            ]
        ]
    ])]
    public function index()
    {
        $capitulos = Capitulos::all();
        return response()->json($capitulos);
    }

    /**
     * Obtiene un capítulo específico por ID.
     *
     * @param int $id ID del capítulo
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del capítulo', required: true)]
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
    #[Response(status: 404, description: 'Capítulo no encontrado')]
    public function show($id)
    {
        $capitulo = Capitulos::findOrFail($id);
        return response()->json($capitulo);
    }

    /**
     * Busca un capítulo por su referencia.
     * 
     * La búsqueda es insensible a mayúsculas/minúsculas y acentos.
     * La referencia debe incluir el nombre del libro (o su abreviatura) y el número de capítulo.
     * Ejemplos válidos:
     * - 'Génesis 1'
     * - 'GEN 1'
     * - 'José Smith-Historia 1'
     *
     * @param string $referencia Referencia del capítulo
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('referencia', 'Referencia del capítulo', required: true, example: 'Génesis 1')]
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
    #[Response(status: 404, description: 'Capítulo no encontrado')]
    public function buscarPorReferencia($referencia)
    {
        if (!$referencia) {
            return response()->json(['error' => 'La referencia es requerida'], 400);
        }

        \Log::info('Referencia recibida:', ['referencia' => $referencia]);
        
        // No normalizamos la referencia completa, solo después del parseo
        $componentes = $this->parsearReferencia($referencia);
        
        \Log::info('Componentes parseados:', ['componentes' => $componentes]);
        
        if (!$componentes) {
            return response()->json(['error' => 'Formato de referencia inválido'], 400);
        }

        $capitulo = $this->encontrarCapituloPorReferencia($referencia);
        
        \Log::info('Capítulo encontrado:', ['capitulo' => $capitulo]);

        if (!$capitulo) {
            return response()->json(['error' => 'Capítulo no encontrado'], 404);
        }

        return response()->json($capitulo);
    }

    /**
     * Lista todas las perícopas de un capítulo.
     *
     * @param int $id ID del capítulo
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del capítulo', required: true)]
    #[Response([
        'data' => [
            [
                'id' => 1,
                'titulo' => 'La Creación',
                'versiculo_inicio' => 1,
                'versiculo_fin' => 31,
                'capitulo_id' => 1
            ]
        ]
    ])]
    #[Response(status: 404, description: 'Capítulo no encontrado')]
    public function pericopas($id)
    {
        $capitulo = Capitulos::findOrFail($id);
        return response()->json($capitulo->pericopas);
    }

    /**
     * Lista todos los versículos de un capítulo.
     *
     * @param int $id ID del capítulo
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del capítulo', required: true)]
    #[Response([
        'data' => [
            [
                'id' => 1,
                'num_versiculo' => 1,
                'contenido' => 'En el principio creó Dios los cielos y la tierra.',
                'capitulo_id' => 1
            ]
        ]
    ])]
    #[Response(status: 404, description: 'Capítulo no encontrado')]
    public function versiculos($id)
    {
        $capitulo = Capitulos::findOrFail($id);
        return response()->json($capitulo->versiculos);
    }

    /**
     * Obtiene la parte a la que pertenece el capítulo, si existe.
     *
     * @param int $id ID del capítulo
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del capítulo', required: true)]
    #[Response([
        'data' => [
            'id' => 1,
            'nombre' => 'Parte 1',
            'orden' => 1,
            'libro_id' => 1
        ]
    ])]
    #[Response(status: 404, description: 'Capítulo no encontrado')]
    public function parte($id)
    {
        $capitulo = Capitulos::findOrFail($id);
        return response()->json($capitulo->parte);
    }

    /**
     * Obtiene el libro al que pertenece el capítulo.
     *
     * @param int $id ID del capítulo
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del capítulo', required: true)]
    #[Response([
        'data' => [
            'id' => 1,
            'nombre' => 'Génesis',
            'abreviatura' => 'GEN',
            'division_id' => 1,
            'volumen_id' => 1
        ]
    ])]
    #[Response(status: 404, description: 'Capítulo no encontrado')]
    public function libro($id)
    {
        $capitulo = Capitulos::findOrFail($id);
        return response()->json($capitulo->libro);
    }
}
