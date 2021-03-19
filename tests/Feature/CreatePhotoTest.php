<?php

namespace Tests\Feature;

use App\Models\Photo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Http\UploadedFile;

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
        
        $response = $this->post('/album/1/newphoto', [
            'title' => 'hola', 
            'epigraph' => 'esta es una foto', 
            'person' => 'kaura', 
            'link' => 'lala', 
            'filename' => $file, 
            'cover_image' => false, 
            'album_id' => 1
            ]);

        $response->assertStatus(302);

    }
}
