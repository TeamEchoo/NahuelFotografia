<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Album;
use App\Models\User;

class AlbumTest extends TestCase

{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_album_can_be_created()
    {
        $user = User::factory()->create([
            'is_admin' => true,
            'name' => 'Nahuel',
            'email' => 'admin@admin.com',
            'password' => '12345678'
        ]);

            
        $this->actingAs($user);

        $response = $this->post('/album', ['title' => 'Hola', 'category' => 'Overview'])
                ->assertStatus(302);

        $this->assertDatabaseCount('albums', 1);

    }
    
}