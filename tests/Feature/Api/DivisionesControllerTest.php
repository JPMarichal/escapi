<?php

namespace Tests\Feature\Api;

class DivisionesControllerTest extends ApiTestCase
{
    public function test_index_returns_all_divisiones()
    {
        $response = $this->get('/api/divisiones');

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

    public function test_show_returns_specific_division()
    {
        $response = $this->get('/api/divisiones/1');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'id',
            'title',
            'description',
            'featured_image',
            'keywords',
            'volumen_id',
            'nombre',
            'created_at',
            'updated_at'
        ]);
    }

    public function test_show_returns_404_for_nonexistent_division()
    {
        $response = $this->get('/api/divisiones/999');
        
        $response->assertStatus(404);
    }

    public function test_buscar_por_nombre_finds_division()
    {
        $response = $this->get('/api/divisiones/item?nombre=La Ley');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'id',
            'title',
            'description',
            'featured_image',
            'keywords',
            'volumen_id',
            'nombre',
            'created_at',
            'updated_at'
        ]);
    }

    public function test_buscar_por_nombre_is_case_insensitive()
    {
        $response = $this->get('/api/divisiones/item?nombre=LA LEY');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonPath('nombre', 'La Ley');
    }

    public function test_buscar_por_nombre_handles_partial_matches()
    {
        $response = $this->get('/api/divisiones/item?nombre=Ley');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonPath('nombre', 'La Ley');
    }

    public function test_buscar_por_nombre_returns_404_for_nonexistent_division()
    {
        $response = $this->get('/api/divisiones/item?nombre=División Inexistente');
        
        $response->assertStatus(404)
            ->assertJson(['error' => 'División no encontrada']);
    }

    public function test_buscar_por_nombre_requires_nombre_parameter()
    {
        $response = $this->get('/api/divisiones/item');
        
        $response->assertStatus(400)
            ->assertJson(['error' => 'El parámetro nombre es requerido']);
    }

    public function test_libros_returns_libros_for_division()
    {
        $response = $this->get('/api/divisiones/1/libros');

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

    public function test_volumen_returns_volumen_for_division()
    {
        $response = $this->get('/api/divisiones/1/volumen');

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
}
