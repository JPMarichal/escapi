<?php

namespace Tests\Feature\Api;

class VolumenesControllerTest extends ApiTestCase
{
    public function test_index_returns_all_volumenes()
    {
        $response = $this->get('/api/volumenes');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            '*' => [
                'id',
                'title',
                'description',
                'featured_image',
                'keywords',
                'nombre',
                'created_at',
                'updated_at'
            ]
        ]);
    }

    public function test_show_returns_specific_volumen()
    {
        $response = $this->get('/api/volumenes/1');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'id',
            'title',
            'description',
            'featured_image',
            'keywords',
            'nombre',
            'created_at',
            'updated_at'
        ]);
    }

    public function test_show_returns_404_for_nonexistent_volumen()
    {
        $response = $this->get('/api/volumenes/999');
        
        $response->assertStatus(404);
    }

    public function test_buscar_por_nombre_finds_volumen()
    {
        $response = $this->get('/api/volumenes/item?nombre=Antiguo Testamento');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'id',
            'title',
            'description',
            'featured_image',
            'keywords',
            'nombre',
            'created_at',
            'updated_at'
        ]);
    }

    public function test_buscar_por_nombre_is_case_insensitive()
    {
        $response = $this->get('/api/volumenes/item?nombre=ANTIGUO TESTAMENTO');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonPath('nombre', 'Antiguo Testamento');
    }

    public function test_buscar_por_nombre_handles_accents()
    {
        $response = $this->get('/api/volumenes/item?nombre=antiguo testamentó');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonPath('nombre', 'Antiguo Testamento');
    }

    public function test_buscar_por_nombre_returns_404_for_nonexistent_volumen()
    {
        $response = $this->get('/api/volumenes/item?nombre=Volumen Inexistente');
        
        $response->assertStatus(404)
            ->assertJson(['error' => 'Volumen no encontrado']);
    }

    public function test_buscar_por_nombre_requires_nombre_parameter()
    {
        $response = $this->get('/api/volumenes/item');
        
        $response->assertStatus(400)
            ->assertJson(['error' => 'El parámetro nombre es requerido']);
    }

    public function test_divisiones_returns_divisiones_for_volumen()
    {
        $response = $this->get('/api/volumenes/1/divisiones');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            '*' => [
                'id',
                'title',
                'description',
                'featured_image',
                'keywords',
                'volumen_id',
                'nombre',
                'created_at',
                'updated_at'
            ]
        ]);
    }

    public function test_libros_returns_libros_for_volumen()
    {
        $response = $this->get('/api/volumenes/1/libros');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            '*' => [
                'id',
                'title',
                'description',
                'featured_image',
                'keywords',
                'division_id',
                'nombre',
                'created_at',
                'updated_at'
            ]
        ]);
    }
}
