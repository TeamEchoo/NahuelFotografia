<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Album;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_assert_login_exists()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_assert_login_successfully()
    {
        
        $response = $this->withSession(['is_admin' => true])->get('/nahuel');
        $response->assertStatus(200);

    }

    public function test_admin_can_get_to_dashboard()
    {

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/nahuel');
        $response->assertStatus(200);
    }

    public function test_admin_can_watch_albums()
    {

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/album');
        $response->assertStatus(200);
    }

    public function test_admin_can_get_create_album_view()
    {

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/newalbum');
        $response->assertStatus(200)->assertViewIs('admin.createAlbum');
    }

    public function test_admin_can_get_edit_album_view()
    {

        $user = User::factory()->create();
        $album = Album::factory()->create();

        $response = $this->actingAs($user)->get('/album/1');
        $response->assertStatus(200)->assertViewIs('admin.editAlbum');
    }
    


}
