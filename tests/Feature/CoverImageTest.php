<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Album;
use App\Models\Photo;

use function PHPUnit\Framework\assertIsBool;

class CoverImageTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_cover_image()
    {
        //scenrari
        $album = Album::factory()->create();
        
        $photo = Photo::factory()->create([
            
            'album_id' => $album->id,
            'cover_image' => $album->photo_cover_image
            
            ]);

            

            $response = assertIsBool(true);

        

        //where

        //then
    }
}
