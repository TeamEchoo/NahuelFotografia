<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Http\Controllers\ImageController;


class IndexImageTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_indexing_images()
    {
        $this->call('GET', 'photos')
        ->assertViewHas('images');

    }
}
