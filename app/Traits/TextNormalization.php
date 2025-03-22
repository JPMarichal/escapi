<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;

trait TextNormalization
{
    /**
     * Normaliza un texto eliminando acentos y convirtiendo a minúsculas.
     * Maneja casos especiales para los libros de José Smith.
     *
     * @param string $texto Texto a normalizar
     * @return string Texto normalizado
     */
    protected function normalizarTexto($texto)
    {
        // Primero verificamos si es un caso especial de José Smith
        if (preg_match('/^josé\s*smith[-]+(historia|mateo)$/i', $texto)) {
            // Normalizamos manteniendo el guión y la estructura exacta
            return 'jose smith-' . strtolower(preg_replace('/.*[-](.*)$/i', '$1', $texto));
        }

        $unwanted_array = array(
            'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y'
        );

        // Para el resto de los casos, normalizamos como antes
        $texto = strtr($texto, $unwanted_array);
        return mb_strtolower($texto);
    }
}
