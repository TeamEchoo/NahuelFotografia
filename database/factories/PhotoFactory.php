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
            
            'title' => $this->faker->text(10)->nullable(),
            'person' => $this->faker->name->nullable(),
            'epigraph' => $this->faker->text(30)->nullable(),
            'image_path' => $this->faker->text(15)->nullable(),
            'link' => $this->faker->text(20)->nullable(),
            'category' => $this->faker->text(8),
            'album' => $this->faker->randomDigit()->nullable(),
        ];
    }
}
