<?php

namespace Tests\Api;

use Tests\TestCase;

class ApiFilmTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_get_all(): void
    {
        $response = $this->get('/api/films/');

        $response->assertStatus(200)
            ->assertJsonStructure(
                ['*' => ['id', 'name', 'duration', 'year', 'genre', 'director']]
            );
    }
}
