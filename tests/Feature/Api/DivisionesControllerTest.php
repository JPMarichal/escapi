<?php

namespace Tests\Feature\Api;

use App\Models\Divisiones;
use App\Traits\TextNormalization;

/**
 * Pruebas para el controlador de Divisiones
 * 
 * Este controlador maneja las operaciones CRUD y búsquedas para las divisiones de escritura
 * (Pentateuco, Libros Históricos, etc.)
 */
class DivisionesControllerTest extends ApiTestCase
{
    use TextNormalization;

    /**
     * Verifica que el endpoint index retorne todas las divisiones
     * 
     * @test
     * @endpoint GET /api/divisiones
     * @response array de divisiones
     */
    public function test_index_returns_all_divisiones()
    {
        $response = $this->get('/api/divisiones');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            '*' => [
                'id',
                'nombre',
                'volumen_id',
                'created_at',
                'updated_at'
            ]
        ]);
    }

    /**
     * Verifica que el endpoint show retorne una división específica
     * 
     * @test
     * @endpoint GET /api/divisiones/{id}
     * @param int id ID de la división
     * @response división específica
     */
    public function test_show_returns_specific_division()
    {
        $division = Divisiones::first();
        $response = $this->get("/api/divisiones/{$division->id}");

        $this->assertSuccessfulResponse($response);
        $response->assertJson([
            'id' => $division->id,
            'nombre' => $division->nombre
        ]);
    }

    /**
     * Verifica que show retorne 404 para una división que no existe
     * 
     * @test
     * @endpoint GET /api/divisiones/{id}
     * @param int id ID inexistente
     * @response error 404 en formato JSON
     */
    public function test_show_returns_404_for_nonexistent_division()
    {
        $response = $this->getJson('/api/divisiones/999999');
        $this->assertNotFoundResponse($response);
    }

    /**
     * Verifica que se pueda encontrar una división por su nombre
     * 
     * @test
     * @endpoint GET /api/divisiones/{nombre}
     * @param string nombre Nombre de la división
     * @response división encontrada
     */
    public function test_buscar_por_nombre_finds_division()
    {
        $response = $this->get('/api/divisiones/La Ley');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'id',
            'nombre',
            'volumen_id',
            'created_at',
            'updated_at'
        ]);
    }

    /**
     * Verifica que la búsqueda por nombre sea insensible a mayúsculas/minúsculas
     * 
     * @test
     * @endpoint GET /api/divisiones/{nombre}
     * @param string nombre Nombre de la división en mayúsculas
     * @response división encontrada
     */
    public function test_buscar_por_nombre_is_case_insensitive()
    {
        $response = $this->get('/api/divisiones/LA LEY');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonPath('nombre', 'La Ley');
    }

    /**
     * Verifica que se retorne 404 para una división que no existe
     * 
     * @test
     * @endpoint GET /api/divisiones/{nombre}
     * @param string nombre Nombre de división inexistente
     * @response error 404
     */
    public function test_buscar_por_nombre_returns_404_for_nonexistent_division()
    {
        $response = $this->get('/api/divisiones/División Inexistente');
        
        $response->assertStatus(404)
            ->assertJson(['error' => 'División no encontrada']);
    }

    /**
     * Verifica que se retornen los libros de una división
     * 
     * @test
     * @endpoint GET /api/divisiones/{id}/libros
     * @param int id ID de la división
     * @response array de libros
     */
    public function test_libros_returns_libros_for_division()
    {
        $division = Divisiones::first();
        $response = $this->get("/api/divisiones/{$division->id}/libros");

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            '*' => [
                'id',
                'nombre',
                'division_id',
                'created_at',
                'updated_at'
            ]
        ]);
    }

    /**
     * Verifica que se retorne el volumen al que pertenece una división
     * 
     * @test
     * @endpoint GET /api/divisiones/{id}/volumen
     * @param int id ID de la división
     * @response volumen al que pertenece la división
     */
    public function test_volumen_returns_volumen_for_division()
    {
        $division = Divisiones::first();
        $response = $this->get("/api/divisiones/{$division->id}/volumen");

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'id',
            'nombre',
            'created_at',
            'updated_at'
        ]);
    }
}
