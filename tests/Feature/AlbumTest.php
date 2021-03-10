<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Album;

class AlbumTest extends TestCase

{

    use RefreshDatabase;

    public function test_album_can_be_created()
    {
        $album = Album::factory()->create([
            'title' => 'Holis',
            'category' => 'Overview',
        ]);
        $response = $album->get('/newalbum', 'Holis');
        $response->assertRedirect('/album')
        ->assertStatus(200);

    }
    
}