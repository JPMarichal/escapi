<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Libros;
use App\Traits\TextNormalization;
use Illuminate\Http\Request;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Response;
use Knuckles\Scribe\Attributes\QueryParam;
use Knuckles\Scribe\Attributes\UrlParam;

#[Group('Libros')]
class LibrosController extends Controller
{
    use TextNormalization;

    /**
     * Lista todos los libros.
     * 
     * Retorna una colección de todos los libros disponibles en el sistema.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    #[Response([
        'data' => [
            [
                'id' => 1,
                'nombre' => 'Génesis',
                'division_id' => 1,
                'volumen_id' => 1
            ]
        ]
    ])]
    public function index()
    {
        $libros = Libros::all();
        return response()->json($libros);
    }

    /**
     * Obtiene un libro específico por ID.
     *
     * @param int $id ID del libro
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del libro')]
    #[Response([
        'data' => [
            'id' => 1,
            'nombre' => 'Génesis',
            'division_id' => 1,
            'volumen_id' => 1
        ]
    ])]
    #[Response(status: 404, description: 'Libro no encontrado')]
    public function show($id)
    {
        $libro = Libros::findOrFail($id);
        return response()->json($libro);
    }

    /**
     * Busca un libro por nombre.
     * 
     * El nombre es insensible a mayúsculas/minúsculas y acentos.
     * La búsqueda funciona si el nombre buscado está contenido en el nombre del libro.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    #[QueryParam('nombre', 'Nombre del libro a buscar', required: true, example: 'Génesis')]
    #[Response([
        'data' => [
            'id' => 1,
            'nombre' => 'Génesis',
            'division_id' => 1,
            'volumen_id' => 1
        ]
    ])]
    #[Response(status: 404, description: 'Libro no encontrado')]
    #[Response(status: 400, description: 'El parámetro nombre es requerido')]
    public function buscarPorNombre(Request $request)
    {
        $nombre = $request->query('nombre');
        if (!$nombre) {
            return response()->json(['error' => 'El parámetro nombre es requerido'], 400);
        }

        $busquedaNormalizada = strtolower($this->normalizarTexto($nombre));

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
     * Lista todas las partes de un libro.
     *
     * @param int $id ID del libro
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del libro')]
    #[Response([
        'data' => [
            [
                'id' => 1,
                'nombre' => 'Parte 1',
                'orden' => 1,
                'libro_id' => 1
            ]
        ]
    ])]
    #[Response(status: 404, description: 'Libro no encontrado')]
    public function partes($id)
    {
        $libro = Libros::findOrFail($id);
        return response()->json($libro->partes);
    }

    /**
     * Lista todos los capítulos de un libro.
     *
     * @param int $id ID del libro
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del libro')]
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
    #[Response(status: 404, description: 'Libro no encontrado')]
    public function capitulos($id)
    {
        $libro = Libros::findOrFail($id);
        return response()->json($libro->capitulos);
    }

    /**
     * Obtiene la división a la que pertenece el libro.
     *
     * @param int $id ID del libro
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del libro')]
    #[Response([
        'data' => [
            'id' => 1,
            'nombre' => 'Pentateuco',
            'volumen_id' => 1
        ]
    ])]
    #[Response(status: 404, description: 'Libro no encontrado')]
    public function division($id)
    {
        $libro = Libros::findOrFail($id);
        return response()->json($libro->division);
    }

    /**
     * Obtiene el volumen al que pertenece el libro.
     *
     * @param int $id ID del libro
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del libro')]
    #[Response([
        'data' => [
            'id' => 1,
            'nombre' => 'Antiguo Testamento'
        ]
    ])]
    #[Response(status: 404, description: 'Libro no encontrado')]
    public function volumen($id)
    {
        $libro = Libros::findOrFail($id);
        return response()->json($libro->volumen);
    }
}
