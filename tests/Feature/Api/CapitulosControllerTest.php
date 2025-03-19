<?php

namespace Tests\Feature\Api;

class CapitulosControllerTest extends ApiTestCase
{
    protected function assertNotFoundResponse($response)
    {
        $response->assertStatus(404)
            ->assertHeader('Content-Type', 'application/json')
            ->assertJson(['error' => 'Capítulo no encontrado']);
    }

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
        
        $this->assertNotFoundResponse($response);
    }

    public function test_buscar_por_referencia_finds_capitulo()
    {
        $response = $this->get('/api/capitulos/Génesis 1');

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

    public function test_buscar_por_referencia_handles_jose_smith_historia()
    {
        $response = $this->get('/api/capitulos/José Smith-Historia 1');

        $this->assertSuccessfulResponse($response);
        $this->assertCapituloPertenece($response, 'José Smith-Historia', 1);
    }

    public function test_buscar_por_referencia_handles_jose_smith_mateo()
    {
        $response = $this->get('/api/capitulos/José Smith-Mateo 1');

        $this->assertSuccessfulResponse($response);
        $this->assertCapituloPertenece($response, 'José Smith-Mateo', 1);
    }

    public function test_buscar_por_referencia_handles_jose_smith_variations()
    {
        // Variaciones en espacios
        $response = $this->get('/api/capitulos/José  Smith-Historia 1');
        $this->assertSuccessfulResponse($response);
        $this->assertCapituloPertenece($response, 'José Smith-Historia', 1);

        // Sin tilde
        $response = $this->get('/api/capitulos/Jose Smith-Historia 1');
        $this->assertSuccessfulResponse($response);
        $this->assertCapituloPertenece($response, 'José Smith-Historia', 1);

        // Múltiples guiones
        $response = $this->get('/api/capitulos/José Smith--Historia 1');
        $this->assertSuccessfulResponse($response);
        $this->assertCapituloPertenece($response, 'José Smith-Historia', 1);
    }

    public function test_buscar_por_referencia_handles_special_formats()
    {
        // DyC
        $response = $this->get('/api/capitulos/DyC 1');
        $this->assertSuccessfulResponse($response);
        $this->assertCapituloPertenece($response, 'Secciones', 1);

        // DO
        $response = $this->get('/api/capitulos/DO 1');
        $this->assertSuccessfulResponse($response);
        $this->assertCapituloPertenece($response, 'Declaraciones Oficiales', 1);
    }

    public function test_buscar_por_referencia_returns_404_for_nonexistent_capitulo()
    {
        $response = $this->get('/api/capitulos/Libro Inexistente 1');
        
        $this->assertNotFoundResponse($response);
    }

    public function test_buscar_por_referencia_requires_referencia()
    {
        $response = $this->get('/api/capitulos/');
        
        $response->assertStatus(404);
    }

    private function assertCapituloPertenece($response, $nombreLibro, $numCapitulo)
    {
        $capitulo = $response->json();
        $this->assertEquals($numCapitulo, $capitulo['num_capitulo']);
        
        // Obtener el libro asociado al capítulo
        $responseLibro = $this->get("/api/capitulos/{$capitulo['id']}/libro");
        $this->assertSuccessfulResponse($responseLibro);
        $this->assertEquals($nombreLibro, $responseLibro->json('nombre'));
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
                'versiculo_inicio',
                'versiculo_fin',
                'titulo',
                'created_at',
                'updated_at'
            ]
        ]);
    }

    public function test_versiculos_returns_versiculos_for_capitulo()
    {
        $response = $this->get('/api/capitulos/1/versiculos');

        $this->assertSuccessfulResponse($response);
        $response->assertJsonStructure([
            '*' => [
                'id',
                'title',
                'description',
                'featured_image',
                'keywords',
                'capitulo_id',
                'pericopa_id',
                'num_versiculo',
                'contenido',
                'referencia',
                'created_at',
                'updated_at'
            ]
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
}
