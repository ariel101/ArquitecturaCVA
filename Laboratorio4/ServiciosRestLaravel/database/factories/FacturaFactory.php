<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Factura>
 */
class FacturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nro' => $this->faker->unique()->numberBetween(1, 1000),
            'fecha' => $this->faker->date,
            'cuf' => $this->faker->text(30),
            'cufd' => $this->faker->text(30),
            'monto_total' => $this->faker->randomFloat(2, 10, 10000),
        ];
    }
}
