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
                'title' => 'Capítulo 1',
                'description' => 'Descripción del capítulo',
                'featured_image' => 'ruta/a/imagen.jpg',
                'keywords' => 'palabras,clave',
                'libro_id' => 1,
                'parte_id' => null,
                'num_capitulo' => 1,
                'url_audio' => 'ruta/a/audio.mp3',
                'referencia' => 'Juan 1',
                'abreviatura' => 'Jn 1',
                'num_versiculos' => 51,
                'titulo_capitulo' => 'El Verbo se hizo carne',
                'url_oficial' => 'https://escrituras.lds.org/juan/1',
                'id_periodo' => 1,
                'sumario' => 'Resumen corto del capítulo',
                'resumen' => 'Resumen detallado del capítulo',
                'ajuste_pericopas' => null,
                'secuencia' => null,
                'url_bc' => null,
                'url_bcdev' => null,
                'introduccion' => 'Introducción al capítulo',
                'conclusion' => 'Conclusión del capítulo',
                'estado_publicacion' => 0,
                'created_at' => '2022-01-01 12:00:00',
                'updated_at' => '2022-01-01 12:00:00'
            ]
        ]
    ])]
    public function index()
    {
        $capitulos = Capitulos::select([
            'id',
            'title',
            'description',
            'featured_image',
            'keywords',
            'libro_id',
            'parte_id',
            'num_capitulo',
            'url_audio',
            'referencia',
            'abreviatura',
            'num_versiculos',
            'titulo_capitulo',
            'url_oficial',
            'id_periodo',
            'sumario',
            'resumen',
            'ajuste_pericopas',
            'secuencia',
            'url_bc',
            'url_bcdev',
            'introduccion',
            'conclusion',
            'estado_publicacion',
            'created_at',
            'updated_at'
        ])->get();
        
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
            'title' => 'Capítulo 1',
            'description' => 'Descripción del capítulo',
            'featured_image' => 'ruta/a/imagen.jpg',
            'keywords' => 'palabras,clave',
            'libro_id' => 1,
            'parte_id' => null,
            'num_capitulo' => 1,
            'url_audio' => 'ruta/a/audio.mp3',
            'referencia' => 'Juan 1',
            'abreviatura' => 'Jn 1',
            'num_versiculos' => 51,
            'titulo_capitulo' => 'El Verbo se hizo carne',
            'url_oficial' => 'https://escrituras.lds.org/juan/1',
            'id_periodo' => 1,
            'sumario' => 'Resumen corto del capítulo',
            'resumen' => 'Resumen detallado del capítulo',
            'ajuste_pericopas' => null,
            'secuencia' => null,
            'url_bc' => null,
            'url_bcdev' => null,
            'introduccion' => 'Introducción al capítulo',
            'conclusion' => 'Conclusión del capítulo',
            'estado_publicacion' => 0,
            'created_at' => '2022-01-01 12:00:00',
            'updated_at' => '2022-01-01 12:00:00'
        ]
    ])]
    #[Response(status: 404, description: 'Capítulo no encontrado')]
    public function show($id)
    {
        $capitulo = Capitulos::select([
            'id',
            'title',
            'description',
            'featured_image',
            'keywords',
            'libro_id',
            'parte_id',
            'num_capitulo',
            'url_audio',
            'referencia',
            'abreviatura',
            'num_versiculos',
            'titulo_capitulo',
            'url_oficial',
            'id_periodo',
            'sumario',
            'resumen',
            'ajuste_pericopas',
            'secuencia',
            'url_bc',
            'url_bcdev',
            'introduccion',
            'conclusion',
            'estado_publicacion',
            'created_at',
            'updated_at'
        ])->find($id);

        if (!$capitulo) {
            return response()->json(['error' => 'Capítulo no encontrado'], 404);
        }

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
            'title' => 'Capítulo 1',
            'description' => 'Descripción del capítulo',
            'featured_image' => 'ruta/a/imagen.jpg',
            'keywords' => 'palabras,clave',
            'libro_id' => 1,
            'parte_id' => null,
            'num_capitulo' => 1,
            'url_audio' => 'ruta/a/audio.mp3',
            'referencia' => 'Juan 1',
            'abreviatura' => 'Jn 1',
            'num_versiculos' => 51,
            'titulo_capitulo' => 'El Verbo se hizo carne',
            'url_oficial' => 'https://escrituras.lds.org/juan/1',
            'id_periodo' => 1,
            'sumario' => 'Resumen corto del capítulo',
            'resumen' => 'Resumen detallado del capítulo',
            'ajuste_pericopas' => null,
            'secuencia' => null,
            'url_bc' => null,
            'url_bcdev' => null,
            'introduccion' => 'Introducción al capítulo',
            'conclusion' => 'Conclusión del capítulo',
            'estado_publicacion' => 0,
            'created_at' => '2022-01-01 12:00:00',
            'updated_at' => '2022-01-01 12:00:00'
        ]
    ])]
    #[Response(status: 404, description: 'Capítulo no encontrado')]
    public function buscarPorReferencia($referencia)
    {
        Log::info('Buscando capítulo por referencia:', ['referencia' => $referencia]);

        if (!$referencia) {
            return response()->json(['error' => 'La referencia es requerida'], 400);
        }

        $capitulo = $this->encontrarCapituloPorReferencia($referencia);
        if (!$capitulo) {
            Log::info('No se encontró el capítulo');
            return response()->json(['error' => 'Capítulo no encontrado'], 404);
        }

        Log::info('Capítulo encontrado:', ['capitulo' => $capitulo]);
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
        $capitulo = Capitulos::find($id);
        if (!$capitulo) {
            return response()->json(['error' => 'Capítulo no encontrado'], 404);
        }
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
        $capitulo = Capitulos::find($id);
        if (!$capitulo) {
            return response()->json(['error' => 'Capítulo no encontrado'], 404);
        }
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
        $capitulo = Capitulos::find($id);
        if (!$capitulo) {
            return response()->json(['error' => 'Capítulo no encontrado'], 404);
        }
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
        $capitulo = Capitulos::find($id);
        if (!$capitulo) {
            return response()->json(['error' => 'Capítulo no encontrado'], 404);
        }
        return response()->json($capitulo->libro);
    }
}
