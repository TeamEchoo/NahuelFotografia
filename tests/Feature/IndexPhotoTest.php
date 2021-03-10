<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Photo;
use Tests\TestCase;
use App\Http\Controllers\PhotoController;
use Illuminate\Http\UploadedFile;


class IndexPhotoTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_indexing_photos()
    {
        $this->withoutExceptionHandling();
        $width = 100;
        $height = 100;
        
        $response = UploadedFile::fake()->image('avatar.jpg', $width, $height)->size(100);
        $response->assertStatus(200)
        ->assertViewIs('admin.photoDashboard')
        ->assertViewHas('photos');
    }
}
