<?php

namespace Tests\Feature\Api;

use App\Models\Libros;
use App\Traits\TextNormalization;

/**
 * Pruebas para el controlador de Libros
 * 
 * Este controlador maneja las operaciones CRUD y búsquedas para los libros de escritura
 * (Génesis, Éxodo, etc.)
 */
class LibrosControllerTest extends ApiTestCase
{
    use TextNormalization;

    /**
     * Verifica que el endpoint index retorne todos los libros
     * 
     * @test
     * @endpoint GET /api/libros
     * @response array de libros
     */
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
                'volumen_id',
                'division_id',
                'nombre',
                'abreviatura',
                'abreviatura_online',
                'num_capitulos',
                'palabra_clave',
                'concepto_principal',
                'autor',
                'autor_why',
                'f_redaccion',
                'fecha_redaccion_why',
                'descripcion',
                'introduccion',
                'temas_estructura',
                'sumario',
                'url',
                'created_at',
                'updated_at'
            ]
        ]);
    }

    /**
     * Verifica que el endpoint show retorne un libro específico
     * 
     * @test
     * @endpoint GET /api/libros/{id}
     * @param int id ID del libro
     * @response libro específico
     */
    public function test_show_returns_specific_libro()
    {
        $libro = Libros::first();
        $response = $this->get("/api/libros/{$libro->id}");

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'id',
            'title',
            'description',
            'featured_image',
            'keywords',
            'volumen_id',
            'division_id',
            'nombre',
            'abreviatura',
            'abreviatura_online',
            'num_capitulos',
            'palabra_clave',
            'concepto_principal',
            'autor',
            'autor_why',
            'f_redaccion',
            'fecha_redaccion_why',
            'descripcion',
            'introduccion',
            'temas_estructura',
            'sumario',
            'url',
            'created_at',
            'updated_at'
        ]);
    }

    /**
     * Verifica que show retorne 404 para un libro que no existe
     * 
     * @test
     * @endpoint GET /api/libros/{id}
     * @param int id ID inexistente
     * @response error 404 en formato JSON
     */
    public function test_show_returns_404_for_nonexistent_libro()
    {
        $response = $this->getJson('/api/libros/999999');
        $this->assertNotFoundResponse($response);
    }

    /**
     * Verifica que se pueda encontrar un libro por su nombre
     * 
     * @test
     * @endpoint GET /api/libros/{nombre}
     * @param string nombre Nombre del libro
     * @response libro encontrado
     */
    public function test_buscar_por_nombre_finds_libro()
    {
        $response = $this->get('/api/libros/Génesis');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            'id',
            'title',
            'description',
            'featured_image',
            'keywords',
            'volumen_id',
            'division_id',
            'nombre',
            'abreviatura',
            'abreviatura_online',
            'num_capitulos',
            'palabra_clave',
            'concepto_principal',
            'autor',
            'autor_why',
            'f_redaccion',
            'fecha_redaccion_why',
            'descripcion',
            'introduccion',
            'temas_estructura',
            'sumario',
            'url',
            'created_at',
            'updated_at'
        ]);
    }

    /**
     * Verifica que la búsqueda por nombre sea insensible a mayúsculas/minúsculas
     * 
     * @test
     * @endpoint GET /api/libros/{nombre}
     * @param string nombre Nombre del libro en mayúsculas
     * @response libro encontrado
     */
    public function test_buscar_por_nombre_is_case_insensitive()
    {
        $response = $this->get('/api/libros/GÉNESIS');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonPath('nombre', 'Génesis');
    }

    /**
     * Verifica que se retorne 404 para un libro que no existe
     * 
     * @test
     * @endpoint GET /api/libros/{nombre}
     * @param string nombre Nombre de libro inexistente
     * @response error 404
     */
    public function test_buscar_por_nombre_returns_404_for_nonexistent_libro()
    {
        $response = $this->get('/api/libros/Libro Inexistente');
        
        $response->assertStatus(404)
            ->assertJson(['error' => 'Libro no encontrado']);
    }

    /**
     * Verifica que se retornen los capítulos de un libro
     * 
     * @test
     * @endpoint GET /api/libros/{id}/capitulos
     * @param int id ID del libro
     * @response array de capítulos
     */
    public function test_capitulos_returns_capitulos_for_libro()
    {
        $libro = Libros::first();
        $response = $this->get("/api/libros/{$libro->id}/capitulos");

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
     * Verifica que se retorne la división a la que pertenece un libro
     * 
     * @test
     * @endpoint GET /api/libros/{id}/division
     * @param int id ID del libro
     * @response división a la que pertenece el libro
     */
    public function test_division_returns_division_for_libro()
    {
        $libro = Libros::first();
        $response = $this->get("/api/libros/{$libro->id}/division");

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

    /**
     * Verifica que se maneje correctamente el caso especial de José Smith-Historia
     * 
     * @test
     * @endpoint GET /api/libros/{nombre}
     * @param string nombre Nombre del libro (José Smith-Historia)
     * @response libro encontrado
     */
    public function test_buscar_por_nombre_handles_jose_smith_historia()
    {
        $response = $this->get('/api/libros/José Smith-Historia');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonPath('nombre', 'José Smith-Historia');
    }

    /**
     * Verifica que se maneje correctamente el caso especial de José Smith-Mateo
     * 
     * @test
     * @endpoint GET /api/libros/{nombre}
     * @param string nombre Nombre del libro (José Smith-Mateo)
     * @response libro encontrado
     */
    public function test_buscar_por_nombre_handles_jose_smith_mateo()
    {
        $response = $this->get('/api/libros/José Smith-Mateo');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonPath('nombre', 'José Smith-Mateo');
    }
}
