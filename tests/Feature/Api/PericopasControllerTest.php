<?php

namespace Tests\Feature\Api;

class PericopasControllerTest extends ApiTestCase
{
    public function test_index_returns_all_pericopas()
    {
        $response = $this->get('/api/pericopas');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            '*' => [
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
            ]
        ]);
    }

    public function test_show_returns_specific_pericopa()
    {
        $response = $this->get('/api/pericopas/1');

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

    public function test_show_returns_404_for_nonexistent_pericopa()
    {
        $response = $this->get('/api/pericopas/999999');
        
        $response->assertStatus(404);
    }

    public function test_buscar_por_titulo_finds_pericopa()
    {
        $response = $this->get('/api/pericopas/item?titulo=Los seis días de la Creación, día 1');

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

    public function test_buscar_por_titulo_is_case_insensitive()
    {
        $response = $this->get('/api/pericopas/item?titulo=LOS SEIS DÍAS DE LA CREACIÓN, DÍA 1');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonPath('titulo', 'Los seis días de la Creación, día 1');
    }

    public function test_buscar_por_titulo_handles_partial_matches()
    {
        $response = $this->get('/api/pericopas/item?titulo=días de la Creación');

        $this->assertSuccessfulResponse($response);
        $this->assertTrue(str_contains(
            strtolower($response->json('titulo')), 
            'días de la creación'
        ));
    }

    public function test_buscar_por_titulo_handles_accents()
    {
        $response = $this->get('/api/pericopas/item?titulo=dias de la Creacion');

        $this->assertSuccessfulResponse($response);
        $this->assertTrue(str_contains(
            $this->normalizarTexto($response->json('titulo')), 
            'dias de la creacion'
        ));
    }

    public function test_buscar_por_titulo_returns_404_for_nonexistent_pericopa()
    {
        $response = $this->get('/api/pericopas/item?titulo=Título Inexistente');
        
        $response->assertStatus(404)
            ->assertJson(['error' => 'Pericopa no encontrada']);
    }

    public function test_buscar_por_titulo_requires_titulo_parameter()
    {
        $response = $this->get('/api/pericopas/item');
        
        $response->assertStatus(400)
            ->assertJson(['error' => 'El parámetro titulo es requerido']);
    }

    public function test_versiculos_returns_versiculos_for_pericopa()
    {
        $response = $this->get('/api/pericopas/1/versiculos');

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

    public function test_capitulo_returns_capitulo_for_pericopa()
    {
        $response = $this->get('/api/pericopas/1/capitulo');

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
}
