<?php

namespace Tests\Feature\Api;

use App\Models\Capitulos;
use App\Models\Libros;
use App\Models\Divisiones;
use App\Models\Pericopas;
use App\Models\Versiculos;

class PericopasControllerTest extends ApiTestCase
{
    /**
     * Lista todas las perícopas disponibles
     * 
     * @test
     * @endpoint GET /api/pericopas
     * @response lista de todas las perícopas
     */
    public function test_index_returns_all_pericopas()
    {
        $response = $this->get('/api/pericopas');

        // Imprimir la respuesta para depuración
        dump($response->getContent());
        dump($response->status());

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            '*' => [
                'id',
                'titulo',
                'capitulo_id',
                'versiculo_inicial',
                'versiculo_final',
                'created_at',
                'updated_at'
            ]
        ]);

        // Verificar que hay al menos una perícopa en la respuesta
        $pericopas = $response->json();
        $this->assertNotEmpty($pericopas, 'La respuesta debe contener al menos una perícopa');
    }

    /**
     * Obtiene una perícopa específica por ID
     * 
     * @test
     * @endpoint GET /api/pericopas/{id}
     * @param int id ID de la perícopa
     * @response perícopa específica
     */
    public function test_show_returns_specific_pericopa()
    {
        $response = $this->get('/api/pericopas/1');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'id',
            'titulo',
            'capitulo_id',
            'versiculo_inicial',
            'versiculo_final',
            'created_at',
            'updated_at'
        ]);

        $pericopa = $response->json();
        $this->assertEquals(1, $pericopa['id']);
    }

    /**
     * Verifica que se retorne 404 para una perícopa inexistente
     * 
     * @test
     * @endpoint GET /api/pericopas/{id}
     * @param int id ID de una perícopa inexistente
     * @response error 404
     */
    public function test_show_returns_404_for_nonexistent_pericopa()
    {
        $response = $this->get('/api/pericopas/999999');
        $response->assertStatus(404);
    }

    /**
     * Busca una perícopa por título
     * 
     * @test
     * @endpoint GET /api/pericopas/item?titulo={titulo}
     * @param string titulo título de la perícopa
     * @response perícopa encontrada
     */
    public function test_buscar_por_titulo_finds_pericopa()
    {
        // Crear datos de prueba
        $this->createTestData();

        $response = $this->get('/api/pericopas/item?titulo=Los seis días de la Creación, día 1');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'id',
            'titulo',
            'capitulo_id',
            'versiculo_inicial',
            'versiculo_final',
            'created_at',
            'updated_at'
        ]);

        // Verificar que encontramos la perícopa correcta
        $response->assertJsonFragment([
            'titulo' => 'Los seis días de la Creación, día 1'
        ]);
    }

    /**
     * Verifica que la búsqueda por título no sea sensible a mayúsculas/minúsculas
     * 
     * @test
     * @endpoint GET /api/pericopas/item?titulo={titulo}
     * @param string titulo título en mayúsculas
     * @response perícopa encontrada con el título original
     */
    public function test_buscar_por_titulo_is_case_insensitive()
    {
        // Crear datos de prueba
        $this->createTestData();

        $response = $this->get('/api/pericopas/item?titulo=LOS SEIS DÍAS DE LA CREACIÓN, DÍA 1');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'id',
            'titulo',
            'capitulo_id',
            'versiculo_inicial',
            'versiculo_final',
            'created_at',
            'updated_at'
        ]);

        // Verificar que encontramos la perícopa correcta a pesar de las mayúsculas
        $response->assertJsonFragment([
            'titulo' => 'Los seis días de la Creación, día 1'
        ]);
    }

    /**
     * Verifica que la búsqueda por título funcione con coincidencias parciales
     * 
     * @test
     * @endpoint GET /api/pericopas/item?titulo={titulo}
     * @param string titulo parte del título
     * @response perícopa que contiene el texto buscado
     */
    public function test_buscar_por_titulo_handles_partial_matches()
    {
        // Crear datos de prueba
        $this->createTestData();

        $response = $this->get('/api/pericopas/item?titulo=Creación');

        $this->assertSuccessfulResponse($response);
        $this->assertTrue(str_contains(
            strtolower($response->json('titulo')), 
            'creación'
        ));
    }

    /**
     * Verifica que la búsqueda por título maneje correctamente los acentos
     * 
     * @test
     * @endpoint GET /api/pericopas/item?titulo={titulo}
     * @param string titulo título sin acentos
     * @response perícopa con título acentuado
     */
    public function test_buscar_por_titulo_handles_accents()
    {
        // Crear datos de prueba
        $this->createTestData();

        $response = $this->get('/api/pericopas/item?titulo=Creacion');

        $this->assertSuccessfulResponse($response);
        $this->assertTrue(str_contains(
            $this->normalizarTexto($response->json('titulo')), 
            'creacion'
        ));
    }

    /**
     * Verifica que se retorne 404 para un título inexistente
     * 
     * @test
     * @endpoint GET /api/pericopas/item?titulo={titulo}
     * @param string titulo título inexistente
     * @response error 404
     */
    public function test_buscar_por_titulo_returns_404_for_nonexistent_pericopa()
    {
        $response = $this->get('/api/pericopas/item?titulo=Título Inexistente');
        $response->assertStatus(404)
            ->assertJson(['error' => 'Pericopa no encontrada']);
    }

    /**
     * Verifica que se requiera el parámetro título
     * 
     * @test
     * @endpoint GET /api/pericopas/item
     * @response error 400 si falta el parámetro titulo
     */
    public function test_buscar_por_titulo_requires_titulo_parameter()
    {
        $response = $this->get('/api/pericopas/item');
        $response->assertStatus(400)
            ->assertJson(['error' => 'El parámetro titulo es requerido']);
    }

    /**
     * Obtiene los versículos de una perícopa
     * 
     * @test
     * @endpoint GET /api/pericopas/{id}/versiculos
     * @param int id ID de la perícopa
     * @response lista de versículos de la perícopa
     */
    public function test_versiculos_returns_versiculos_for_pericopa()
    {
        // Crear datos de prueba y obtener la perícopa
        $pericopa = $this->createTestData();

        $response = $this->get("/api/pericopas/{$pericopa->id}/versiculos");

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            '*' => [
                'id',
                'contenido',
                'num_versiculo',
                'capitulo_id',
                'pericopa_id',
                'created_at',
                'updated_at'
            ]
        ]);

        // Verificar que el versículo de prueba está en la respuesta
        $response->assertJsonFragment([
            'contenido' => 'En el principio creó Dios los cielos y la tierra.',
            'num_versiculo' => 1
        ]);
    }

    /**
     * Obtiene el capítulo al que pertenece una perícopa
     * 
     * @test
     * @endpoint GET /api/pericopas/{id}/capitulo
     * @param int id ID de la perícopa
     * @response capítulo al que pertenece la perícopa
     */
    public function test_capitulo_returns_capitulo_for_pericopa()
    {
        $response = $this->get('/api/pericopas/1/capitulo');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'id',
            'title',
            'description',
            'libro_id',
            'parte_id',
            'num_capitulo',
            'referencia',
            'abreviatura',
            'titulo_capitulo',
            'created_at',
            'updated_at'
        ]);

        // Verificar que es el capítulo correcto
        $response->assertJsonFragment([
            'id' => 1,
            'num_capitulo' => 1,
            'referencia' => 'Génesis 1'
        ]);
    }

    /**
     * Helper para crear datos de prueba consistentes
     * 
     * @return Pericopas perícopa creada para pruebas
     */
    private function createTestData()
    {
        // Crear o encontrar el libro Génesis
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

        // Crear o encontrar el capítulo 1
        $capitulo = Capitulos::where('libro_id', $libro->id)
            ->where('num_capitulo', 1)
            ->first();
            
        if (!$capitulo) {
            $capitulo = Capitulos::create([
                'libro_id' => $libro->id,
                'num_capitulo' => 1,
                'referencia' => 'Génesis 1',
                'abreviatura' => 'GEN 1'
            ]);
        }

        // Crear o encontrar la perícopa
        $pericopa = Pericopas::where('capitulo_id', $capitulo->id)->first();
        if (!$pericopa) {
            $pericopa = Pericopas::create([
                'capitulo_id' => $capitulo->id,
                'versiculo_inicial' => 1,
                'versiculo_final' => 31,
                'titulo' => 'La Creación'
            ]);
        }

        // Crear o encontrar el versículo
        $versiculo = Versiculos::where('capitulo_id', $capitulo->id)
            ->where('num_versiculo', 1)
            ->first();
            
        if (!$versiculo) {
            $versiculo = Versiculos::create([
                'capitulo_id' => $capitulo->id,
                'pericopa_id' => $pericopa->id,
                'num_versiculo' => 1,
                'contenido' => 'En el principio creó Dios los cielos y la tierra.',
                'referencia' => 'Génesis 1:1'
            ]);
        }

        return $pericopa;
    }
}
