<?php

namespace Tests\Feature\Api;

class VersiculosControllerTest extends ApiTestCase
{
    public function test_index_returns_all_versiculos()
    {
        $response = $this->get('/api/versiculos');

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
    }

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

    public function test_show_returns_404_for_nonexistent_versiculo()
    {
        $response = $this->get('/api/versiculos/999999');
        
        $response->assertStatus(404);
    }

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

    public function test_buscar_por_referencia_is_case_insensitive()
    {
        $response = $this->get('/api/versiculos/item?referencia=GÉNESIS 1:1');

        $this->assertSuccessfulResponse($response);
        $this->assertTrue(str_contains(
            strtolower($response->json('referencia')), 
            'génesis 1:1'
        ));
    }

    public function test_buscar_por_referencia_handles_partial_matches()
    {
        $response = $this->get('/api/versiculos/item?referencia=Gen 1:1');

        $this->assertSuccessfulResponse($response);
        $this->assertTrue(str_contains(
            strtolower($response->json('referencia')), 
            'gen 1:1'
        ));
    }

    public function test_buscar_por_referencia_handles_accents()
    {
        $response = $this->get('/api/versiculos/item?referencia=genesis 1:1');

        $this->assertSuccessfulResponse($response);
        $this->assertTrue(str_contains(
            $this->normalizarTexto($response->json('referencia')), 
            'genesis 1:1'
        ));
    }

    public function test_buscar_por_referencia_returns_404_for_nonexistent_versiculo()
    {
        $response = $this->get('/api/versiculos/item?referencia=Libro Inexistente 999:999');
        
        $response->assertStatus(404)
            ->assertJson(['error' => 'Versículo no encontrado']);
    }

    public function test_buscar_por_referencia_requires_referencia_parameter()
    {
        $response = $this->get('/api/versiculos/item');
        
        $response->assertStatus(400)
            ->assertJson(['error' => 'El parámetro referencia es requerido']);
    }

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
}
