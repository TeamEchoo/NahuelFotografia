<?php

namespace Tests\Feature;

use App\Http\Controllers\ImageController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Intervention\Image\Facades\Image;
use App\Models\ImageModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class CreateImageTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_upload_image()
    {
        $this->withoutExceptionHandling();

        $image = [
            'filename' => 'laura.jpg',
        ];
        
        $response = $this->post(route('photoStore'), $image);
        $response->assertStatus(200);
        
    }
}
