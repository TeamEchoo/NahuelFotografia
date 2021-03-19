<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Photo;
use Tests\TestCase;
use App\Http\Controllers\PhotoController;
use Illuminate\Http\UploadedFile;
use App\Models\Album;


class IndexPhotoTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_all_users_can_see_photos()
    {
        $this->withoutExceptionHandling();

        $album = Album::factory()->create([
            'title' => 'Hola',
            'category' => 'Overview'
        ]);

        $photos = Photo::factory(4)->create();

        $response = $this->get('/')
        ->assertStatus(200)
        ->assertViewIs('home');

    }
}
