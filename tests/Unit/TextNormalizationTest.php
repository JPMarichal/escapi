<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\DataProvider;
use App\Traits\TextNormalization;

class TextNormalizationTest extends TestCase
{
    use TextNormalization;

    #[Test]
    #[DataProvider('casosDePrueba')]
    public function prueba_normalizacion_de_texto(string $entrada, string $esperado): void
    {
        $resultado = $this->normalizarTexto($entrada);
        $this->assertEquals($esperado, $resultado);
    }

    public static function casosDePrueba(): array
    {
        return [
            'José Smith-Historia exacto' => ['José Smith-Historia', 'jose smith-historia'],
            'José Smith-Mateo exacto' => ['José Smith-Mateo', 'jose smith-mateo'],
            'José Smith-Historia con espacios extra' => ['José  Smith-Historia', 'jose smith-historia'],
            'José Smith-Mateo con espacios extra' => ['José  Smith-Mateo', 'jose smith-mateo'],
            'José Smith-Historia todo mayúsculas' => ['JOSÉ SMITH-HISTORIA', 'jose smith-historia'],
            'José Smith-Mateo todo mayúsculas' => ['JOSÉ SMITH-MATEO', 'jose smith-mateo'],
            'José Smith-Historia sin tilde' => ['Jose Smith-Historia', 'jose smith-historia'],
            'José Smith-Mateo sin tilde' => ['Jose Smith-Mateo', 'jose smith-mateo'],
            
            // Casos que no deben coincidir con el patrón especial
            'Texto normal con guión' => ['José-María', 'jose-maria'],
            'Texto normal con acentos' => ['José', 'jose'],
            'Texto normal con espacios' => ['José María', 'jose maria'],
            
            // Casos límite para José Smith
            'José Smith sin guión' => ['José Smith Historia', 'jose smith historia'],
            'José Smith guión incorrecto' => ['José Smith--Historia', 'jose smith-historia'],
            'José Smith parte incorrecta' => ['José Smith-Otro', 'jose smith-otro'],
        ];
    }
}
