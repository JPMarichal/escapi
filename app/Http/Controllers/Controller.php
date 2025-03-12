<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;

/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="API de Escrituras",
 *     description="API para acceder a las escrituras de La Iglesia de Jesucristo de los Santos de los Últimos Días",
 *     @OA\Contact(
 *         email="admin@example.com"
 *     )
 * )
 * 
 * @OA\Server(
 *     url="/api",
 *     description="Servidor Local"
 * )
 * 
 * @OA\Schema(
 *     schema="Volumen",
 *     type="object",
 *     @OA\Property(property="id", type="integer"),
 *     @OA\Property(property="nombre", type="string"),
 *     @OA\Property(property="abreviatura", type="string"),
 *     @OA\Property(property="orden", type="integer")
 * )
 * 
 * @OA\Schema(
 *     schema="Division",
 *     type="object",
 *     @OA\Property(property="id", type="integer"),
 *     @OA\Property(property="nombre", type="string"),
 *     @OA\Property(property="abreviatura", type="string"),
 *     @OA\Property(property="orden", type="integer"),
 *     @OA\Property(property="volumen_id", type="integer")
 * )
 * 
 * @OA\Schema(
 *     schema="Libro",
 *     type="object",
 *     @OA\Property(property="id", type="integer"),
 *     @OA\Property(property="nombre", type="string"),
 *     @OA\Property(property="abreviatura", type="string"),
 *     @OA\Property(property="orden", type="integer"),
 *     @OA\Property(property="division_id", type="integer")
 * )
 * 
 * @OA\Schema(
 *     schema="Parte",
 *     type="object",
 *     @OA\Property(property="id", type="integer"),
 *     @OA\Property(property="nombre", type="string"),
 *     @OA\Property(property="orden", type="integer"),
 *     @OA\Property(property="libro_id", type="integer")
 * )
 * 
 * @OA\Schema(
 *     schema="Capitulo",
 *     type="object",
 *     @OA\Property(property="id", type="integer"),
 *     @OA\Property(property="nombre", type="string"),
 *     @OA\Property(property="num_capitulo", type="integer"),
 *     @OA\Property(property="orden", type="integer"),
 *     @OA\Property(property="libro_id", type="integer"),
 *     @OA\Property(property="parte_id", type="integer", nullable=true)
 * )
 * 
 * @OA\Schema(
 *     schema="Pericopa",
 *     type="object",
 *     @OA\Property(property="id", type="integer"),
 *     @OA\Property(property="titulo", type="string"),
 *     @OA\Property(property="orden", type="integer"),
 *     @OA\Property(property="capitulo_id", type="integer")
 * )
 * 
 * @OA\Schema(
 *     schema="Versiculo",
 *     type="object",
 *     @OA\Property(property="id", type="integer"),
 *     @OA\Property(property="contenido", type="string"),
 *     @OA\Property(property="num_versiculo", type="integer"),
 *     @OA\Property(property="orden", type="integer"),
 *     @OA\Property(property="capitulo_id", type="integer"),
 *     @OA\Property(property="pericopa_id", type="integer", nullable=true)
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

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
