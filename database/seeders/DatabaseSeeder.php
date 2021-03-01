<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Photo::factory(10)->create();
        \App\Models\Album::factory(10)->create();
        \App\Models\User::factory()->create([
            'isAdmin' => true,
            'email' => 'admin@admin.com',
            'password' => Hash::make("12345678"),
        ]);
    }
}
