<?php

namespace Tests\Feature\Api;

class PartesControllerTest extends ApiTestCase
{
    public function test_index_returns_all_partes()
    {
        $response = $this->get('/api/partes');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            '*' => [
                'id',
                'title',
                'description',
                'featured_image',
                'keywords',
                'libro_id',
                'nombre',
                'created_at',
                'updated_at'
            ]
        ]);
    }

    public function test_show_returns_specific_parte()
    {
        $response = $this->get('/api/partes/1');

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

    public function test_show_returns_404_for_nonexistent_parte()
    {
        $response = $this->get('/api/partes/999');
        
        $response->assertStatus(404);
    }

    public function test_buscar_por_nombre_finds_parte()
    {
        $response = $this->get('/api/partes/item?nombre=La Creación');

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

    public function test_buscar_por_nombre_is_case_insensitive()
    {
        $response = $this->get('/api/partes/item?nombre=LA CREACIÓN');

        $this->assertSuccessfulResponse($response);
        $this->assertTrue(
            str_contains(
                $this->normalizarTexto($response->json('nombre')),
                'creacion'
            )
        );
    }

    public function test_buscar_por_nombre_handles_partial_matches()
    {
        $response = $this->get('/api/partes/item?nombre=Creación');

        $this->assertSuccessfulResponse($response);
        $this->assertTrue(
            str_contains(
                $this->normalizarTexto($response->json('nombre')),
                'creacion'
            )
        );
    }

    public function test_buscar_por_nombre_handles_accents()
    {
        $response = $this->get('/api/partes/item?nombre=creacion');

        $this->assertSuccessfulResponse($response);
        $this->assertTrue(
            str_contains(
                $this->normalizarTexto($response->json('nombre')),
                'creacion'
            )
        );
    }

    public function test_buscar_por_nombre_returns_404_for_nonexistent_parte()
    {
        $response = $this->get('/api/partes/item?nombre=Parte Inexistente');
        
        $response->assertStatus(404)
            ->assertJson(['error' => 'Parte no encontrada']);
    }

    public function test_buscar_por_nombre_requires_nombre_parameter()
    {
        $response = $this->get('/api/partes/item');
        
        $response->assertStatus(400)
            ->assertJson(['error' => 'El parámetro nombre es requerido']);
    }

    public function test_capitulos_returns_capitulos_for_parte()
    {
        $response = $this->get('/api/partes/1/capitulos');

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

    public function test_libro_returns_libro_for_parte()
    {
        $response = $this->get('/api/partes/1/libro');

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
}
