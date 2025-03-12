<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Traits\TextNormalization;

class ApiTestCase extends TestCase
{
    use TextNormalization;

    protected function setUp(): void
    {
        parent::setUp();
        
        // Ejecutar migraciones y seeders antes de cada test
        $this->artisan('migrate:fresh');
        $this->artisan('db:seed');
    }

    protected function assertSuccessfulResponse($response)
    {
        $response->assertStatus(200)
            ->assertHeader('Content-Type', 'application/json');
    }

    protected function assertNotFoundResponse($response)
    {
        $response->assertStatus(404)
            ->assertHeader('Content-Type', 'application/json')
            ->assertJsonStructure(['error']);
    }

    protected function assertBadRequestResponse($response)
    {
        $response->assertStatus(400)
            ->assertHeader('Content-Type', 'application/json')
            ->assertJsonStructure(['error']);
    }
}
