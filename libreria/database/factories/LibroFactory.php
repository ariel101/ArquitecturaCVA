<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Editorial;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $editorial =Editorial::inRandomOrder()->first()->id;

        return [
            //
            'titulo' => fake()->text(100),
            'editorial_id' => $editorial,
            'edicion' => fake()->randomNumber(2),
            'pais' => fake()->country,
            'precio' => fake()->randomFloat(2,10,1000),
        ];
    }
}
