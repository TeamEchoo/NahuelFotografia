<?php

namespace Database\Factories;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'title' => $this->faker->text(10),
            'person' => $this->faker->name(),
            'epigraph' => $this->faker->text(30),
            'filename' => $this->faker->text(15),
            'link' => $this->faker->text(20),
            'album_id' => 1
        ];
    }
}
