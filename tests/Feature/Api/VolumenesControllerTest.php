<?php

namespace Tests\Feature\Api;

use App\Models\Volumenes;
use App\Traits\TextNormalization;

/**
 * Pruebas para el controlador de Volúmenes
 * 
 * Este controlador maneja las operaciones CRUD y búsquedas para los volúmenes de escritura
 * (Antiguo Testamento, Nuevo Testamento, etc.)
 */
class VolumenesControllerTest extends ApiTestCase
{
    use TextNormalization;

    /**
     * Verifica que el endpoint index retorne todos los volúmenes
     * 
     * @test
     * @endpoint GET /api/volumenes
     * @response array de volúmenes
     */
    public function test_index_returns_all_volumenes()
    {
        $response = $this->get('/api/volumenes');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            '*' => [
                'id',
                'nombre',
                'created_at',
                'updated_at'
            ]
        ]);
    }

    /**
     * Verifica que el endpoint show retorne un volumen específico
     * 
     * @test
     * @endpoint GET /api/volumenes/{id}
     * @param int id ID del volumen
     * @response volumen específico
     */
    public function test_show_returns_specific_volumen()
    {
        $volumen = Volumenes::first();
        $response = $this->get("/api/volumenes/{$volumen->id}");

        $this->assertSuccessfulResponse($response);
        $response->assertJson([
            'id' => $volumen->id,
            'nombre' => $volumen->nombre
        ]);
    }

    /**
     * Verifica que show retorne 404 para un volumen que no existe
     * 
     * @test
     * @endpoint GET /api/volumenes/{id}
     * @param int id ID inexistente
     * @response error 404 en formato JSON
     */
    public function test_show_returns_404_for_nonexistent_volumen()
    {
        $response = $this->getJson('/api/volumenes/999999');
        $this->assertNotFoundResponse($response);
    }

    /**
     * Verifica que se pueda encontrar un volumen por su nombre
     * 
     * @test
     * @endpoint GET /api/volumenes/{nombre}
     * @param string nombre Nombre del volumen
     * @response volumen encontrado
     */
    public function test_buscar_por_nombre_finds_volumen()
    {
        $response = $this->get('/api/volumenes/Antiguo Testamento');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'id',
            'nombre',
            'created_at',
            'updated_at'
        ]);
        $response->assertJsonPath('nombre', 'Antiguo Testamento');
    }

    /**
     * Verifica que la búsqueda por nombre sea insensible a mayúsculas/minúsculas
     * 
     * @test
     * @endpoint GET /api/volumenes/{nombre}
     * @param string nombre Nombre del volumen en mayúsculas
     * @response volumen encontrado
     */
    public function test_buscar_por_nombre_is_case_insensitive()
    {
        $response = $this->get('/api/volumenes/ANTIGUO TESTAMENTO');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonPath('nombre', 'Antiguo Testamento');
    }

    /**
     * Verifica que la búsqueda por nombre maneje acentos correctamente
     * 
     * @test
     * @endpoint GET /api/volumenes/{nombre}
     * @param string nombre Nombre del volumen con acentos
     * @response volumen encontrado
     */
    public function test_buscar_por_nombre_handles_accents()
    {
        $response = $this->get('/api/volumenes/antiguo testamentó');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonPath('nombre', 'Antiguo Testamento');
    }

    /**
     * Verifica que se retorne 404 para un volumen que no existe
     * 
     * @test
     * @endpoint GET /api/volumenes/{nombre}
     * @param string nombre Nombre de volumen inexistente
     * @response error 404
     */
    public function test_buscar_por_nombre_returns_404_for_nonexistent_volumen()
    {
        $response = $this->get('/api/volumenes/Volumen Inexistente');
        
        $response->assertStatus(404)
            ->assertJson(['error' => 'Volumen no encontrado']);
    }

    /**
     * Verifica que se retornen las divisiones de un volumen
     * 
     * @test
     * @endpoint GET /api/volumenes/{id}/divisiones
     * @param int id ID del volumen
     * @response array de divisiones
     */
    public function test_divisiones_returns_divisiones_for_volumen()
    {
        $volumen = Volumenes::first();
        $response = $this->get("/api/volumenes/{$volumen->id}/divisiones");

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
     * Verifica que se retornen los libros de un volumen
     * 
     * @test
     * @endpoint GET /api/volumenes/{id}/libros
     * @param int id ID del volumen
     * @response array de libros
     */
    public function test_libros_returns_libros_for_volumen()
    {
        $volumen = Volumenes::first();
        $response = $this->get("/api/volumenes/{$volumen->id}/libros");

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
}
