<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Volumenes;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Response;
use Knuckles\Scribe\Attributes\QueryParam;
use Knuckles\Scribe\Attributes\UrlParam;

#[Group('Volúmenes')]
class VolumenesController extends Controller
{
    /**
     * Lista todos los volúmenes.
     * 
     * Retorna una colección de todos los volúmenes disponibles en el sistema.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    #[Response([
        'data' => [
            ['id' => 1, 'nombre' => 'Antiguo Testamento'],
            ['id' => 2, 'nombre' => 'Nuevo Testamento']
        ]
    ])]
    public function index()
    {
        $volumenes = Volumenes::all();
        return response()->json($volumenes);
    }

    /**
     * Obtiene un volumen específico por ID.
     *
     * @param int $id ID del volumen
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del volumen')]
    #[Response([
        'data' => [
            'id' => 1,
            'nombre' => 'Antiguo Testamento'
        ]
    ])]
    #[Response(status: 404, description: 'Volumen no encontrado')]
    public function show($id)
    {
        $volumen = Volumenes::findOrFail($id);
        return response()->json($volumen);
    }

    /**
     * Busca un volumen por nombre.
     * 
     * El nombre es insensible a mayúsculas/minúsculas y acentos.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    #[QueryParam('nombre', 'Nombre del volumen a buscar', required: true, example: 'Antiguo Testamento')]
    #[Response([
        'data' => [
            'id' => 1,
            'nombre' => 'Antiguo Testamento'
        ]
    ])]
    #[Response(status: 404, description: 'Volumen no encontrado')]
    #[Response(status: 400, description: 'El parámetro nombre es requerido')]
    public function buscarPorNombre(Request $request)
    {
        $nombre = $request->query('nombre');
        if (!$nombre) {
            return response()->json(['error' => 'El parámetro nombre es requerido'], 400);
        }

        $volumen = Volumenes::all()->first(function($item) use ($nombre) {
            return $this->normalizarTexto($item->nombre) === $this->normalizarTexto($nombre);
        });

        if (!$volumen) {
            return response()->json(['error' => 'Volumen no encontrado'], 404);
        }

        return response()->json($volumen);
    }

    /**
     * Lista todas las divisiones de un volumen.
     *
     * @param int $id ID del volumen
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del volumen')]
    #[Response([
        'data' => [
            [
                'id' => 1,
                'nombre' => 'Pentateuco',
                'volumen_id' => 1
            ]
        ]
    ])]
    #[Response(status: 404, description: 'Volumen no encontrado')]
    public function divisiones($id)
    {
        $volumen = Volumenes::findOrFail($id);
        return response()->json($volumen->divisiones);
    }

    /**
     * Lista todos los libros de un volumen.
     *
     * @param int $id ID del volumen
     * @return \Illuminate\Http\JsonResponse
     */
    #[UrlParam('id', 'El ID del volumen')]
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
    #[Response(status: 404, description: 'Volumen no encontrado')]
    public function libros($id)
    {
        $volumen = Volumenes::findOrFail($id);
        return response()->json($volumen->libros);
    }

    /**
     * Normaliza un texto removiendo acentos y convirtiendo a minúsculas
     */
    protected function normalizarTexto($texto)
    {
        $unwanted_array = array(
            'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y'
        );
        return Str::lower(strtr($texto, $unwanted_array));
    }
}
