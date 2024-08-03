<?php

namespace Database\Factories;

use App\Models\Profesion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persona>
 */
class PersonaFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      "nombres" => fake()->name(),
      "apellidos" => fake()->lastName(),
      "direccion" => fake()->address(),
      "correo_electronico" => fake()->unique()->safeEmail(),
      "fecha_nacimiento" => fake()->date(),
      "profesion_id"=> Profesion::inRandomOrder()->get()->first()->id
      //
    ];
  }
}
