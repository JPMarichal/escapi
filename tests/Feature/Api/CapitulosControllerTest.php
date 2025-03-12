<?php

namespace Tests\Feature\Api;

class CapitulosControllerTest extends ApiTestCase
{
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
                'created_at',
                'updated_at'
            ]
        ]);
    }

    public function test_show_returns_specific_capitulo()
    {
        $response = $this->get('/api/capitulos/1');

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

    public function test_show_returns_404_for_nonexistent_capitulo()
    {
        $response = $this->get('/api/capitulos/999');
        
        $response->assertStatus(404);
    }

    public function test_buscar_por_referencia_finds_capitulo()
    {
        $response = $this->get('/api/capitulos/item?referencia=Génesis 1');

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

    public function test_buscar_por_referencia_is_case_insensitive()
    {
        $response = $this->get('/api/capitulos/item?referencia=GÉNESIS 1');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonPath('referencia', 'Génesis 1');
    }

    public function test_buscar_por_referencia_handles_partial_matches()
    {
        $response = $this->get('/api/capitulos/item?referencia=Gen 1');

        $this->assertSuccessfulResponse($response);
        $this->assertTrue(str_contains(
            strtolower($response->json('referencia')), 
            'gen 1'
        ));
    }

    public function test_buscar_por_referencia_handles_accents()
    {
        $response = $this->get('/api/capitulos/item?referencia=genesis 1');

        $this->assertSuccessfulResponse($response);
        $this->assertTrue(str_contains(
            $this->normalizarTexto($response->json('referencia')), 
            'genesis 1'
        ));
    }

    public function test_buscar_por_referencia_returns_404_for_nonexistent_capitulo()
    {
        $response = $this->get('/api/capitulos/item?referencia=Libro Inexistente 999');
        
        $response->assertStatus(404)
            ->assertJson(['error' => 'Capítulo no encontrado']);
    }

    public function test_buscar_por_referencia_requires_referencia_parameter()
    {
        $response = $this->get('/api/capitulos/item');
        
        $response->assertStatus(400)
            ->assertJson(['error' => 'El parámetro referencia es requerido']);
    }

    public function test_versiculos_returns_versiculos_for_capitulo()
    {
        $response = $this->get('/api/capitulos/1/versiculos');

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

    public function test_pericopas_returns_pericopas_for_capitulo()
    {
        $response = $this->get('/api/capitulos/1/pericopas');

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

    public function test_libro_returns_libro_for_capitulo()
    {
        $response = $this->get('/api/capitulos/1/libro');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'id',
            'title',
            'description',
            'featured_image',
            'keywords',
            'division_id',
            'nombre',
            'created_at',
            'updated_at'
        ]);
    }

    public function test_parte_returns_parte_for_capitulo()
    {
        $response = $this->get('/api/capitulos/1/parte');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'id',
            'title',
            'description',
            'featured_image',
            'keywords',
            'libro_id',
            'nombre',
            'created_at',
            'updated_at'
        ]);
    }
}
