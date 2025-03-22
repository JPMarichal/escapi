<?php

namespace Tests\Feature\Api;

use App\Models\Capitulos;
use App\Models\Libros;
use App\Models\Divisiones;
use App\Models\Pericopas;
use App\Models\Versiculos;

class CapitulosControllerTest extends ApiTestCase
{
    protected function assertNotFoundResponse($response)
    {
        $response->assertStatus(404)
            ->assertHeader('Content-Type', 'application/json')
            ->assertJson(['error' => 'Capítulo no encontrado']);
    }

    /**
     * Lista todos los capítulos disponibles
     * 
     * @test
     * @endpoint GET /api/capitulos
     * @response lista de todos los capítulos
     */
    public function test_index_returns_all_capitulos()
    {
        $response = $this->get('/api/capitulos');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            '*' => [
                'id',
                'title',
                'description',
                'featured_image',
                'keywords',
                'libro_id',
                'parte_id',
                'num_capitulo',
                'referencia',
                'abreviatura',
                'num_versiculos',
                'titulo_capitulo',
                'url_oficial',
                'url_audio',
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
            ]
        ]);
    }

    /**
     * Obtiene un capítulo específico por ID
     * 
     * @test
     * @endpoint GET /api/capitulos/{id}
     * @param int id ID del capítulo
     * @response capítulo específico
     */
    public function test_show_returns_specific_capitulo()
    {
        $libro = Libros::where('nombre', 'Génesis')->first();
        if (!$libro) {
            $division = Divisiones::firstOrCreate([
                'nombre' => 'Antiguo Testamento'
            ], [
                'abreviatura' => 'AT',
                'volumen_id' => 1
            ]);

            $libro = Libros::create([
                'nombre' => 'Génesis',
                'abreviatura' => 'GEN',
                'division_id' => $division->id
            ]);
        }

        $capitulo = Capitulos::where('libro_id', $libro->id)
            ->where('num_capitulo', 1)
            ->first();
            
        if (!$capitulo) {
            $capitulo = Capitulos::create([
                'libro_id' => $libro->id,
                'num_capitulo' => 1,
                'title' => 'Capítulo 1',
                'description' => 'El primer capítulo',
                'referencia' => 'Génesis 1',
                'abreviatura' => 'GEN 1'
            ]);
        }

        $response = $this->get("/api/capitulos/{$capitulo->id}");

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'id',
            'title',
            'description',
            'featured_image',
            'keywords',
            'libro_id',
            'parte_id',
            'num_capitulo',
            'referencia',
            'abreviatura',
            'num_versiculos',
            'titulo_capitulo',
            'url_oficial',
            'url_audio',
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
        ]);
    }

    /**
     * Verifica que se retorne 404 para un capítulo inexistente
     * 
     * @test
     * @endpoint GET /api/capitulos/{id}
     * @param int id ID de un capítulo inexistente
     * @response error 404
     */
    public function test_show_returns_404_for_nonexistent_capitulo()
    {
        $maxId = Capitulos::max('id');
        $response = $this->getJson("/api/capitulos/" . ($maxId + 1));
        
        $this->assertNotFoundResponse($response);
    }

    /**
     * Busca un capítulo por referencia
     * 
     * @test
     * @endpoint GET /api/capitulos/{referencia}
     * @param string referencia referencia del capítulo (ej: Génesis 1)
     * @response capítulo encontrado
     */
    public function test_buscar_por_referencia_finds_capitulo()
    {
        // Asegurarnos de que tenemos un libro y capítulo válidos
        $libro = Libros::where('nombre', 'Génesis')->first();
        if (!$libro) {
            $division = Divisiones::firstOrCreate([
                'nombre' => 'Antiguo Testamento'
            ], [
                'abreviatura' => 'AT',
                'volumen_id' => 1
            ]);

            $libro = Libros::create([
                'nombre' => 'Génesis',
                'abreviatura' => 'GEN',
                'division_id' => $division->id
            ]);
        }

        $capitulo = Capitulos::where('libro_id', $libro->id)
            ->where('num_capitulo', 1)
            ->first();
            
        if (!$capitulo) {
            $capitulo = Capitulos::create([
                'libro_id' => $libro->id,
                'num_capitulo' => 1,
                'title' => 'Capítulo 1',
                'description' => 'El primer capítulo',
                'referencia' => 'Génesis 1',
                'abreviatura' => 'GEN 1'
            ]);
        }

        // Verificar que el libro y capítulo existen
        $this->assertNotNull($libro, 'El libro Génesis no se creó correctamente');
        $this->assertNotNull($capitulo, 'El capítulo 1 de Génesis no se creó correctamente');

        $referencia = $libro->nombre . ' ' . $capitulo->num_capitulo;
        
        // Verificar la referencia antes de hacer la petición
        $this->assertEquals('Génesis 1', $referencia, 'La referencia no se formó correctamente');

        $response = $this->get("/api/capitulos/" . rawurlencode($referencia));

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
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
        ]);
        $this->assertCapituloPertenece($response, 'Génesis', 1);
    }

    /**
     * Verifica que se maneje correctamente José Smith-Historia
     * 
     * @test
     * @endpoint GET /api/capitulos/José Smith-Historia 1
     * @response capítulo encontrado
     */
    public function test_buscar_por_referencia_handles_jose_smith_historia()
    {
        $response = $this->get('/api/capitulos/José Smith-Historia 1');

        $this->assertSuccessfulResponse($response);
        $this->assertCapituloPertenece($response, 'José Smith-Historia', 1);
    }

    /**
     * Verifica que se maneje correctamente José Smith-Mateo
     * 
     * @test
     * @endpoint GET /api/capitulos/José Smith-Mateo 1
     * @response capítulo encontrado
     */
    public function test_buscar_por_referencia_handles_jose_smith_mateo()
    {
        $response = $this->get('/api/capitulos/José Smith-Mateo 1');

        $this->assertSuccessfulResponse($response);
        $this->assertCapituloPertenece($response, 'José Smith-Mateo', 1);
    }

    /**
     * Verifica que se manejen correctamente las variaciones de José Smith
     * 
     * @test
     * @endpoint GET /api/capitulos/{referencia}
     * @param string referencia variación de José Smith-Historia o José Smith-Mateo
     * @response capítulo encontrado
     */
    public function test_buscar_por_referencia_handles_jose_smith_variations()
    {
        // Asegurarnos de que tenemos los libros y capítulos de José Smith
        $libroHistoria = Libros::where('nombre', 'José Smith-Historia')->first();
        if (!$libroHistoria) {
            $libroHistoria = Libros::create([
                'nombre' => 'José Smith-Historia',
                'abreviatura' => 'JS-H',
                'division_id' => 1
            ]);
        }

        $capituloHistoria = Capitulos::where('libro_id', $libroHistoria->id)
            ->where('num_capitulo', 1)
            ->first();
            
        if (!$capituloHistoria) {
            $capituloHistoria = Capitulos::create([
                'libro_id' => $libroHistoria->id,
                'num_capitulo' => 1,
                'title' => 'José Smith-Historia 1',
                'description' => 'Historia de José Smith',
                'referencia' => 'José Smith-Historia 1',
                'abreviatura' => 'JS-H 1'
            ]);
        }

        $libroMateo = Libros::where('nombre', 'José Smith-Mateo')->first();
        if (!$libroMateo) {
            $libroMateo = Libros::create([
                'nombre' => 'José Smith-Mateo',
                'abreviatura' => 'JS-M',
                'division_id' => 1
            ]);
        }

        $capituloMateo = Capitulos::where('libro_id', $libroMateo->id)
            ->where('num_capitulo', 1)
            ->first();
            
        if (!$capituloMateo) {
            $capituloMateo = Capitulos::create([
                'libro_id' => $libroMateo->id,
                'num_capitulo' => 1,
                'title' => 'José Smith-Mateo 1',
                'description' => 'Traducción de José Smith de Mateo',
                'referencia' => 'José Smith-Mateo 1',
                'abreviatura' => 'JS-M 1'
            ]);
        }

        // Variaciones en espacios y tildes
        $variaciones = [
            'José Smith-Historia 1',
            'Jose Smith-Historia 1',
            'José  Smith-Historia 1',
            'José Smith--Historia 1',
            'JOSÉ SMITH-HISTORIA 1'
        ];

        foreach ($variaciones as $referencia) {
            $response = $this->get('/api/capitulos/' . rawurlencode($referencia));
            $this->assertSuccessfulResponse($response);
            $this->assertCapituloPertenece($response, 'José Smith-Historia', 1);
        }

        // También probamos con José Smith-Mateo
        $variaciones = [
            'José Smith-Mateo 1',
            'Jose Smith-Mateo 1',
            'José  Smith-Mateo 1',
            'José Smith--Mateo 1',
            'JOSÉ SMITH-MATEO 1'
        ];

        foreach ($variaciones as $referencia) {
            $response = $this->get('/api/capitulos/' . rawurlencode($referencia));
            $this->assertSuccessfulResponse($response);
            $this->assertCapituloPertenece($response, 'José Smith-Mateo', 1);
        }
    }

    /**
     * Verifica que se manejen correctamente los formatos especiales
     * 
     * @test
     * @endpoint GET /api/capitulos/{referencia}
     * @param string referencia referencia con formato especial
     * @response capítulo encontrado
     */
    public function test_buscar_por_referencia_handles_special_formats()
    {
        // Doctrina y Convenios
        $response = $this->get('/api/capitulos/DyC 4');
        $this->assertSuccessfulResponse($response);
        $this->assertCapituloPertenece($response, 'Secciones', 4);

        // Declaración Oficial
        $response = $this->get('/api/capitulos/DO 2');
        $this->assertSuccessfulResponse($response);
        $this->assertCapituloPertenece($response, 'Declaraciones oficiales', 2);
    }

    /**
     * Verifica que se retorne 404 para una referencia inexistente
     * 
     * @test
     * @endpoint GET /api/capitulos/{referencia}
     * @param string referencia referencia inexistente
     * @response error 404
     */
    public function test_buscar_por_referencia_returns_404_for_nonexistent_capitulo()
    {
        $response = $this->get('/api/capitulos/Libro Inexistente 1');
        $this->assertNotFoundResponse($response);
    }

    /**
     * Obtiene las perícopas de un capítulo
     * 
     * @test
     * @endpoint GET /api/capitulos/{id}/pericopas
     * @param int id ID del capítulo
     * @response lista de perícopas del capítulo
     */
    public function test_pericopas_returns_pericopas_for_capitulo()
    {
        // Asegurarnos de que tenemos un libro y capítulo válidos con perícopas
        $libro = Libros::where('nombre', 'Génesis')->first();
        if (!$libro) {
            $division = Divisiones::firstOrCreate([
                'nombre' => 'Antiguo Testamento'
            ], [
                'abreviatura' => 'AT',
                'volumen_id' => 1
            ]);

            $libro = Libros::create([
                'nombre' => 'Génesis',
                'abreviatura' => 'GEN',
                'division_id' => $division->id
            ]);
        }

        $capitulo = Capitulos::where('libro_id', $libro->id)
            ->where('num_capitulo', 1)
            ->first();
            
        if (!$capitulo) {
            $capitulo = Capitulos::create([
                'libro_id' => $libro->id,
                'num_capitulo' => 1,
                'title' => 'Capítulo 1',
                'description' => 'El primer capítulo',
                'referencia' => 'Génesis 1',
                'abreviatura' => 'GEN 1'
            ]);
        }

        // Crear una perícopa de prueba si no existe
        $pericopa = Pericopas::where('capitulo_id', $capitulo->id)->first();
        if (!$pericopa) {
            $pericopa = Pericopas::create([
                'capitulo_id' => $capitulo->id,
                'versiculo_inicial' => 1,
                'versiculo_final' => 31,
                'titulo' => 'La Creación'
            ]);
        }

        // Verificar que el capítulo y la perícopa existen
        $this->assertNotNull($capitulo, 'El capítulo 1 de Génesis no se creó correctamente');
        $this->assertNotNull($pericopa, 'La perícopa de prueba no se creó correctamente');

        $response = $this->get("/api/capitulos/{$capitulo->id}/pericopas");

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            '*' => [
                'id',
                'capitulo_id',
                'versiculo_inicial',
                'versiculo_final',
                'titulo',
                'created_at',
                'updated_at'
            ]
        ]);

        // Verificar que la perícopa creada está en la respuesta
        $response->assertJsonFragment([
            'titulo' => 'La Creación',
            'versiculo_inicial' => 1,
            'versiculo_final' => 31
        ]);
    }

    /**
     * Obtiene los versículos de un capítulo
     * 
     * @test
     * @endpoint GET /api/capitulos/{id}/versiculos
     * @param int id ID del capítulo
     * @response lista de versículos del capítulo
     */
    public function test_versiculos_returns_versiculos_for_capitulo()
    {
        // Asegurarnos de que tenemos un libro y capítulo válidos con versículos
        $libro = Libros::where('nombre', 'Génesis')->first();
        if (!$libro) {
            $division = Divisiones::firstOrCreate([
                'nombre' => 'Antiguo Testamento'
            ], [
                'abreviatura' => 'AT',
                'volumen_id' => 1
            ]);

            $libro = Libros::create([
                'nombre' => 'Génesis',
                'abreviatura' => 'GEN',
                'division_id' => $division->id
            ]);
        }

        $capitulo = Capitulos::where('libro_id', $libro->id)
            ->where('num_capitulo', 1)
            ->first();
            
        if (!$capitulo) {
            $capitulo = Capitulos::create([
                'libro_id' => $libro->id,
                'num_capitulo' => 1,
                'title' => 'Capítulo 1',
                'description' => 'El primer capítulo',
                'referencia' => 'Génesis 1',
                'abreviatura' => 'GEN 1'
            ]);
        }

        // Crear un versículo de prueba si no existe
        $versiculo = Versiculos::where('capitulo_id', $capitulo->id)
            ->where('num_versiculo', 1)
            ->first();
            
        if (!$versiculo) {
            $versiculo = Versiculos::create([
                'capitulo_id' => $capitulo->id,
                'num_versiculo' => 1,
                'contenido' => 'En el principio creó Dios los cielos y la tierra.',
                'referencia' => 'Génesis 1:1'
            ]);
        }

        // Verificar que el capítulo y el versículo existen
        $this->assertNotNull($capitulo, 'El capítulo 1 de Génesis no se creó correctamente');
        $this->assertNotNull($versiculo, 'El versículo de prueba no se creó correctamente');

        $response = $this->get("/api/capitulos/{$capitulo->id}/versiculos");

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            '*' => [
                'id',
                'capitulo_id',
                'pericopa_id',
                'num_versiculo',
                'contenido',
                'referencia',
                'created_at',
                'updated_at'
            ]
        ]);

        // Verificar que el versículo creado está en la respuesta
        $response->assertJsonFragment([
            'num_versiculo' => 1,
            'contenido' => 'En el principio creó Dios los cielos y la tierra.',
            'referencia' => 'Génesis 1:1'
        ]);
    }

    /**
     * Obtiene el libro al que pertenece un capítulo
     * 
     * @test
     * @endpoint GET /api/capitulos/{id}/libro
     * @param int id ID del capítulo
     * @response libro al que pertenece el capítulo
     */
    public function test_libro_returns_libro_for_capitulo()
    {
        // Asegurarnos de que tenemos un libro y capítulo válidos
        $libro = Libros::where('nombre', 'Génesis')->first();
        if (!$libro) {
            $division = Divisiones::firstOrCreate([
                'nombre' => 'Antiguo Testamento'
            ], [
                'abreviatura' => 'AT',
                'volumen_id' => 1
            ]);

            $libro = Libros::create([
                'nombre' => 'Génesis',
                'abreviatura' => 'GEN',
                'division_id' => $division->id
            ]);
        }

        $capitulo = Capitulos::where('libro_id', $libro->id)
            ->where('num_capitulo', 1)
            ->first();
            
        if (!$capitulo) {
            $capitulo = Capitulos::create([
                'libro_id' => $libro->id,
                'num_capitulo' => 1,
                'title' => 'Capítulo 1',
                'description' => 'El primer capítulo',
                'referencia' => 'Génesis 1',
                'abreviatura' => 'GEN 1'
            ]);
        }

        // Verificar que el libro y capítulo existen
        $this->assertNotNull($libro, 'El libro Génesis no se creó correctamente');
        $this->assertNotNull($capitulo, 'El capítulo 1 de Génesis no se creó correctamente');

        $response = $this->get("/api/capitulos/{$capitulo->id}/libro");

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'id',
            'nombre',
            'abreviatura',
            'division_id',
            'created_at',
            'updated_at'
        ]);

        // Verificar que el libro en la respuesta es el correcto
        $response->assertJsonFragment([
            'nombre' => 'Génesis',
            'abreviatura' => 'GEN'
        ]);
    }

    /**
     * Helper para verificar que un capítulo pertenece a un libro y tiene un número específico
     */
    private function assertCapituloPertenece($response, $nombreLibro, $numCapitulo)
    {
        $response->assertJsonFragment([
            'num_capitulo' => $numCapitulo
        ]);

        $capitulo = json_decode($response->getContent());
        $libro = Libros::find($capitulo->libro_id);
        $this->assertEquals($nombreLibro, $libro->nombre);
    }
}
