<?php

namespace Tests\Feature\Api;

use App\Models\Partes;

class PartesControllerTest extends ApiTestCase
{
    /**
     * Lista todas las partes disponibles
     * 
     * @test
     * @endpoint GET /api/partes
     * @response lista de todas las partes
     */
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
                'sumario',
                'descripcion',
                'orden',
                'created_at',
                'updated_at'
            ]
        ]);
    }

    /**
     * Obtiene una parte específica por ID
     * 
     * @test
     * @endpoint GET /api/partes/{id}
     * @param int id ID de la parte
     * @response parte específica
     */
    public function test_show_returns_specific_parte()
    {
        $parte = Partes::first();
        $response = $this->get("/api/partes/{$parte->id}");

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'id',
            'title',
            'description',
            'featured_image',
            'keywords',
            'libro_id',
            'nombre',
            'sumario',
            'descripcion',
            'orden',
            'created_at',
            'updated_at'
        ]);
    }

    /**
     * Verifica que se retorne 404 para una parte inexistente
     * 
     * @test
     * @endpoint GET /api/partes/{id}
     * @param int id ID de una parte inexistente
     * @response error 404
     */
    public function test_show_returns_404_for_nonexistent_parte()
    {
        $response = $this->getJson('/api/partes/999');
        
        $response->assertStatus(404)
            ->assertJson(['error' => 'Parte no encontrada']);
    }

    /**
     * Busca una parte por nombre
     * 
     * @test
     * @endpoint GET /api/partes/item?nombre={nombre}
     * @param string nombre nombre de la parte a buscar
     * @response parte encontrada
     */
    public function test_buscar_por_nombre_finds_parte()
    {
        $parte = Partes::first();
        $response = $this->get("/api/partes/item?nombre={$parte->nombre}");

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'id',
            'title',
            'description',
            'featured_image',
            'keywords',
            'libro_id',
            'nombre',
            'sumario',
            'descripcion',
            'orden',
            'created_at',
            'updated_at'
        ]);
    }

    /**
     * Verifica que la búsqueda por nombre sea insensible a mayúsculas/minúsculas
     * 
     * @test
     * @endpoint GET /api/partes/item?nombre={nombre}
     * @param string nombre nombre de la parte en mayúsculas
     * @response parte encontrada
     */
    public function test_buscar_por_nombre_is_case_insensitive()
    {
        $parte = Partes::first();
        $response = $this->get("/api/partes/item?nombre=" . strtoupper($parte->nombre));

        $this->assertSuccessfulResponse($response);
        $this->assertTrue(
            str_contains(
                $this->normalizarTexto($response->json('nombre')),
                $this->normalizarTexto($parte->nombre)
            )
        );
    }

    /**
     * Verifica que la búsqueda por nombre maneje acentos correctamente
     * 
     * @test
     * @endpoint GET /api/partes/item?nombre={nombre}
     * @param string nombre nombre de la parte sin acentos
     * @response parte encontrada
     */
    public function test_buscar_por_nombre_handles_accents()
    {
        $parte = Partes::first();
        $response = $this->get("/api/partes/item?nombre=" . $this->normalizarTexto($parte->nombre));

        $this->assertSuccessfulResponse($response);
        $this->assertTrue(
            str_contains(
                $this->normalizarTexto($response->json('nombre')),
                $this->normalizarTexto($parte->nombre)
            )
        );
    }

    /**
     * Verifica que se retorne 404 para una parte inexistente
     * 
     * @test
     * @endpoint GET /api/partes/item?nombre={nombre}
     * @param string nombre nombre de una parte inexistente
     * @response error 404
     */
    public function test_buscar_por_nombre_returns_404_for_nonexistent_parte()
    {
        $response = $this->getJson('/api/partes/item?nombre=Parte Inexistente');
        
        $response->assertStatus(404)
            ->assertJson(['error' => 'Parte no encontrada']);
    }

    /**
     * Lista todos los capítulos de una parte
     * 
     * @test
     * @endpoint GET /api/partes/{id}/capitulos
     * @param int id ID de la parte
     * @response lista de capítulos de la parte
     */
    public function test_capitulos_returns_capitulos_for_parte()
    {
        $parte = Partes::first();
        $response = $this->get("/api/partes/{$parte->id}/capitulos");

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

    /**
     * Obtiene el libro al que pertenece una parte
     * 
     * @test
     * @endpoint GET /api/partes/{id}/libro
     * @param int id ID de la parte
     * @response libro al que pertenece la parte
     */
    public function test_libro_returns_libro_for_parte()
    {
        $parte = Partes::first();
        $response = $this->get("/api/partes/{$parte->id}/libro");

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
