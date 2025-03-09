<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DivisionesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('divisiones')->delete();
        
        \DB::table('divisiones')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Introducción al estudio de la Ley de Moisés',
                'description' => NULL,
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'nombre' => 'La Ley',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Introducción al estudio de los libros históricos del Antiguo Testamento',
                'description' => NULL,
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
            'nombre' => 'Libros históricos (AT)',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Introducción al estudio de los libros poéticos de la Biblia',
                'description' => NULL,
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'nombre' => 'Libros poéticos',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Introducción al estudio de los profetas mayores de la Biblia',
                'description' => NULL,
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'nombre' => 'Profetas mayores',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Introducción al estudio de los profetas menores de la Biblia',
                'description' => NULL,
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 1,
                'nombre' => 'Profetas menores',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Introducción al estudio de los evangelios del Nuevo Testamento',
                'description' => NULL,
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'nombre' => 'Los evangelios',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Introducción al estudio de los libros históricos del Nuevo Testamento',
                'description' => NULL,
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
            'nombre' => 'Libros históricos (NT)',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Introducción al estudio de las epístolas paulinas, en la Biblia',
                'description' => NULL,
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'nombre' => 'Epístolas paulinas',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Introducción al estudio de las epístolas universales de la Biblia',
                'description' => NULL,
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'nombre' => 'Epístolas universales',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Introducción al estudio de los libros proféticos del Nuevo Testamento',
                'description' => NULL,
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 2,
                'nombre' => 'Libros proféticos',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'Introducción al estudio de las planchas menores del Libro de Mormón',
                'description' => 'Estas son las planchas menores',
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 3,
                'nombre' => 'Planchas menores',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'Introducción a las Palabras de Mormón como puente editorial',
                'description' => NULL,
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 3,
                'nombre' => 'Puente editorial',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'Introducción al estudio de las planchas mayores del Libro de Mormón',
                'description' => NULL,
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 3,
                'nombre' => 'Planchas mayores',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'Introducción a los escritos del profeta Mormón',
                'description' => NULL,
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 3,
                'nombre' => 'Escritos de Mormón',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'Introducción a las adiciones de Moroni al Libro de Mormón',
                'description' => NULL,
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 3,
                'nombre' => 'Adiciones de Moroni',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            15 => 
            array (
                'id' => 16,
                'title' => 'Introducción a las secciones de Doctrina y Convenios',
                'description' => NULL,
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 4,
                'nombre' => 'Secciones',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            16 => 
            array (
                'id' => 17,
                'title' => 'Introducción a las Declaraciones Oficiales de Doctrina y Convenios',
                'description' => NULL,
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 4,
                'nombre' => 'Declaraciones oficiales',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            17 => 
            array (
                'id' => 18,
                'title' => 'Los libros relacionados con el Antiguo Testamento en la Perla de Gran Precio',
                'description' => NULL,
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 5,
                'nombre' => 'Relacionados con el Antiguo Testamento',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            18 => 
            array (
                'id' => 19,
                'title' => 'Los libros relacionados con el Nuevo Testamento en la Perla de Gran Precio',
                'description' => NULL,
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 5,
                'nombre' => 'Relacionados con el Nuevo Testamento',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            19 => 
            array (
                'id' => 20,
                'title' => 'Los libros relacionados con la Restauración en la Perla de Gran Precio',
                'description' => NULL,
                'featured_image' => NULL,
                'keywords' => NULL,
                'volumen_id' => 5,
                'nombre' => 'Relacionados con la Restauración',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
        ));
        
        
    }
}