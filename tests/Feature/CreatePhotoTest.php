<?php

namespace Tests\Feature;

use App\Models\Photo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Storage;
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

        Storage::fake('photos');

        $file = UploadedFile::fake()->image('avatar.jpg');

        $response = $this->post('/album/1/newphoto', [
            'avatar' => $file,
        ]);

        Storage::disk('photos');
        $response->assertStatus(200);

    }
}
