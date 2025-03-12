<?php

namespace Tests\Feature\Api;

class LibrosControllerTest extends ApiTestCase
{
    public function test_index_returns_all_libros()
    {
        $response = $this->get('/api/libros');

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

    public function test_show_returns_specific_libro()
    {
        $response = $this->get('/api/libros/1');

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

    public function test_show_returns_404_for_nonexistent_libro()
    {
        $response = $this->get('/api/libros/999');
        
        $response->assertStatus(404);
    }

    public function test_buscar_por_nombre_finds_libro()
    {
        $response = $this->get('/api/libros/item?nombre=Génesis');

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

    public function test_buscar_por_nombre_is_case_insensitive()
    {
        $response = $this->get('/api/libros/item?nombre=GÉNESIS');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonPath('nombre', 'Génesis');
    }

    public function test_buscar_por_nombre_handles_partial_matches()
    {
        $response = $this->get('/api/libros/item?nombre=Gene');

        $this->assertSuccessfulResponse($response);
        $nombreNormalizado = strtolower($this->normalizarTexto($response->json('nombre')));
        $busquedaNormalizada = strtolower($this->normalizarTexto('Gene'));
        $this->assertTrue(
            str_contains($nombreNormalizado, $busquedaNormalizada),
            "El nombre normalizado '{$nombreNormalizado}' debería contener '{$busquedaNormalizada}'"
        );
    }

    public function test_buscar_por_nombre_handles_accents()
    {
        $response = $this->get('/api/libros/item?nombre=genesis');

        $this->assertSuccessfulResponse($response);
        $nombreNormalizado = strtolower($this->normalizarTexto($response->json('nombre')));
        $busquedaNormalizada = strtolower($this->normalizarTexto('genesis'));
        $this->assertTrue(
            str_contains($nombreNormalizado, $busquedaNormalizada),
            "El nombre normalizado '{$nombreNormalizado}' debería contener '{$busquedaNormalizada}'"
        );
    }

    public function test_buscar_por_nombre_returns_404_for_nonexistent_libro()
    {
        $response = $this->get('/api/libros/item?nombre=Libro Inexistente');
        
        $response->assertStatus(404)
            ->assertJson(['error' => 'Libro no encontrado']);
    }

    public function test_buscar_por_nombre_requires_nombre_parameter()
    {
        $response = $this->get('/api/libros/item');
        
        $response->assertStatus(400)
            ->assertJson(['error' => 'El parámetro nombre es requerido']);
    }

    public function test_partes_returns_partes_for_libro()
    {
        $response = $this->get('/api/libros/1/partes');

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

    public function test_capitulos_returns_capitulos_for_libro()
    {
        $response = $this->get('/api/libros/1/capitulos');

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

    public function test_division_returns_division_for_libro()
    {
        $response = $this->get('/api/libros/1/division');

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
}
