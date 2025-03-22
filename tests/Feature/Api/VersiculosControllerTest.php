<?php

namespace Tests\Feature\Api;

use App\Traits\TextNormalization;
use App\Traits\ScriptureReferences;

class VersiculosControllerTest extends ApiTestCase
{
    use TextNormalization, ScriptureReferences;

    /**
     * Verifica que el endpoint index retorne una lista paginada de versículos.
     * 
     * @test
     */
    public function test_index_returns_all_versiculos()
    {
        $response = $this->get('/api/versiculos');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'current_page',
            'data' => [
                '*' => [
                    'id',
                    'contenido',
                    'num_versiculo',
                    'capitulo_id',
                    'pericopa_id',
                    'created_at',
                    'updated_at'
                ]
            ],
            'first_page_url',
            'from',
            'last_page',
            'last_page_url',
            'links',
            'next_page_url',
            'path',
            'per_page',
            'prev_page_url',
            'to',
            'total'
        ]);
    }

    /**
     * Verifica que el endpoint show retorne un versículo específico.
     * 
     * @test
     */
    public function test_show_returns_specific_versiculo()
    {
        $response = $this->get('/api/versiculos/1');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'id',
            'contenido',
            'num_versiculo',
            'capitulo_id',
            'pericopa_id',
            'created_at',
            'updated_at'
        ]);
    }

    /**
     * Verifica que el endpoint show retorne un 404 para un versículo inexistente.
     * 
     * @test
     */
    public function test_show_returns_404_for_nonexistent_versiculo()
    {
        $response = $this->get('/api/versiculos/999999');
        
        $response->assertStatus(404);
    }

    /**
     * Verifica que la búsqueda por referencia encuentre un versículo.
     * 
     * @test
     */
    public function test_buscar_por_referencia_finds_versiculo()
    {
        $response = $this->get('/api/versiculos/item?referencia=Génesis 1:1');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'id',
            'contenido',
            'num_versiculo',
            'capitulo_id',
            'pericopa_id',
            'created_at',
            'updated_at'
        ]);
    }

    /**
     * Verifica que la búsqueda por referencia sea insensible a mayúsculas/minúsculas.
     * 
     * @test
     */
    public function test_buscar_por_referencia_is_case_insensitive()
    {
        $response = $this->get('/api/versiculos/item?referencia=GÉNESIS 1:1');

        $this->assertSuccessfulResponse($response);
        $this->assertTrue(str_contains(
            $this->normalizarTexto($response->json('referencia')), 
            'genesis 1:1'
        ));
    }

    /**
     * Verifica que la búsqueda por referencia maneje correctamente los acentos.
     * 
     * @test
     */
    public function test_buscar_por_referencia_handles_accents()
    {
        $response = $this->get('/api/versiculos/item?referencia=genesis 1:1');

        $this->assertSuccessfulResponse($response);
        $this->assertTrue(str_contains(
            $this->normalizarTexto($response->json('referencia')), 
            'genesis 1:1'
        ));
    }

    /**
     * Verifica que la búsqueda por referencia retorne un 404 para un versículo inexistente.
     * 
     * @test
     */
    public function test_buscar_por_referencia_returns_404_for_nonexistent_versiculo()
    {
        $response = $this->get('/api/versiculos/item?referencia=Libro Inexistente 999:999');
        
        $response->assertStatus(404)
            ->assertJson(['error' => 'Versículo no encontrado']);
    }

    /**
     * Verifica que la búsqueda por referencia requiera el parámetro referencia.
     * 
     * @test
     */
    public function test_buscar_por_referencia_requires_referencia_parameter()
    {
        $response = $this->get('/api/versiculos/item');
        
        $response->assertStatus(400)
            ->assertJson(['error' => 'El parámetro referencia es requerido']);
    }

    /**
     * Verifica que el endpoint capitulo retorne el capítulo al que pertenece un versículo.
     * 
     * @test
     */
    public function test_capitulo_returns_capitulo_for_versiculo()
    {
        $response = $this->get('/api/versiculos/1/capitulo');

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
            'created_at',
            'updated_at'
        ]);
    }

    /**
     * Verifica que el endpoint pericopa retorne la perícopa a la que pertenece un versículo.
     * 
     * @test
     */
    public function test_pericopa_returns_pericopa_for_versiculo()
    {
        $response = $this->get('/api/versiculos/1/pericopa');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'id',
            'title',
            'description',
            'featured_image',
            'keywords',
            'capitulo_id',
            'titulo',
            'versiculo_inicial',
            'versiculo_final',
            'descripcion',
            'created_at',
            'updated_at'
        ]);
    }

    /**
     * Verifica que la búsqueda por referencia completa encuentre versículos.
     * 
     * @test
     */
    public function test_buscar_por_referencia_completa_finds_versiculos()
    {
        $response = $this->get('/api/versiculos/pasaje?referencia=Génesis 1:1-3');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'contenido',
                    'num_versiculo',
                    'orden'
                ]
            ]
        ]);
    }

    /**
     * Verifica que la búsqueda por referencia completa maneje correctamente DyC.
     * 
     * @test
     */
    public function test_buscar_por_referencia_completa_handles_dyc()
    {
        $response = $this->get('/api/versiculos/pasaje?referencia=DyC 4:2');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'contenido',
                    'num_versiculo',
                    'orden'
                ]
            ]
        ]);
    }

    /**
     * Verifica que la búsqueda por referencia completa maneje correctamente DO.
     * 
     * @test
     */
    public function test_buscar_por_referencia_completa_handles_do()
    {
        $response = $this->get('/api/versiculos/pasaje?referencia=DO 2:3');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'contenido',
                    'num_versiculo',
                    'orden'
                ]
            ]
        ]);
    }

    /**
     * Verifica que la búsqueda por referencia completa retorne un 404 para versículos inexistentes.
     * 
     * @test
     */
    public function test_buscar_por_referencia_completa_returns_404_for_nonexistent_versiculos()
    {
        $response = $this->get('/api/versiculos/pasaje?referencia=Libro Inexistente 999:999');
        
        $response->assertStatus(404)
            ->assertJson(['error' => 'Formato de referencia inválido o versículos no encontrados. Use alguno de estos formatos: "Libro Capítulo:Versículo", "DyC Sección:Versículo" o "DO Declaración[:Versículo]"']);
    }

    /**
     * Verifica que la búsqueda por referencia completa requiera el parámetro referencia.
     * 
     * @test
     */
    public function test_buscar_por_referencia_completa_requires_referencia_parameter()
    {
        $response = $this->get('/api/versiculos/pasaje');
        
        $response->assertStatus(400)
            ->assertJson(['error' => 'El parámetro referencia es requerido']);
    }
}
