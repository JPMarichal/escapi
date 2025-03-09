<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VolumenesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('volumenes')->delete();
        
        \DB::table('volumenes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => NULL,
                'description' => 'Conoce cómo se inicio del mundo, el convenio de Dios con Abraham, Isaac e Israel, y las profecías que anticipan a Jesucristo.




',
                'featured_image' => 'https://images.pexels.com/photos/1287075/pexels-photo-1287075.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500',
                'keywords' => NULL,
                'nombre' => 'Antiguo Testamento',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => NULL,
                'description' => 'Descubre la vida y enseñanzas de Jesucristo, su sacrificio redentor y el nacimiento de la Iglesia primitiva, guiada por los primeros apóstoles.




',
                'featured_image' => 'https://images.pexels.com/photos/1287075/pexels-photo-1287075.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500',
                'keywords' => NULL,
                'nombre' => 'Nuevo Testamento',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => NULL,
                'description' => 'Explora la crónica de las antiguas civilizaciones de América, su fe en Cristo y las enseñanzas del Salvador resucitado entre ellos.




',
                'featured_image' => '/images/volumenes/Jesus%20Christ%20descending%20among%20the%20Nephites,%20an%20iconic%20event%20from%20the%20Book%20of%20Mormon.jpg',
                'keywords' => NULL,
                'nombre' => 'Libro de Mormón',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => NULL,
                'description' => 'Conoce las revelaciones modernas dadas a José Smith y otros, que establecen la doctrina y organización de La Iglesia de Jesucristo de los Santos de los Últimos Días.




',
                'featured_image' => 'https://images.pexels.com/photos/614512/pexels-photo-614512.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500',
                'keywords' => NULL,
                'nombre' => 'Doctrina y Convenios',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => NULL,
                'description' => 'Sumérgete en las escrituras reveladas y traducidas por José Smith, que incluyen textos antiguos y la historia inicial de la Iglesia y sus creencias.',
                'featured_image' => 'https://images.pexels.com/photos/1287075/pexels-photo-1287075.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500',
                'keywords' => NULL,
                'nombre' => 'Perla de Gran Precio',
                'created_at' => '2024-03-12 15:18:02',
                'updated_at' => '2024-03-12 15:18:02',
            ),
        ));
        
        
    }
}