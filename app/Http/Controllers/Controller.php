<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

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
}
