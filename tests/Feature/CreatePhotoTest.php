<?php

namespace Tests\Feature;

use App\Models\Photo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use App\Models\Album;

class CreatePhotoTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_upload_photo()
    {
        $this->withoutExceptionHandling();
        
        $user = User::factory()->create([
            'is_admin' => true,
            'name' => 'Nahuel',
            'email' => 'admin@admin.com',
            'password' => '12345678'
        ]);

            
        $this->actingAs($user);
        

        Storage::disk('photos');

        $file = UploadedFile::fake()->image('avatar.jpg');

        $album = Album::factory()->create([
            "title" => 'Nahuel',
            "description" => 'Este es un album',
        ]);

        $photo = Photo::factory()->create([
            'title' => 'hola', 
            'epigraph' => 'esta es una foto', 
            'person' => 'kaura', 
            'link' => 'lala', 
            'filename' => $file, 
            'cover_image' => false, 
            'album_id' => $album
        ]);
        
        $response = $this->post('/album/1/newphoto', [$photo => 'photo']);

        $response->assertStatus(302);

    }
}
