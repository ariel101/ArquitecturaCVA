<?php

namespace Database\Factories;

use App\Models\Destinatario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Correspondencia>
 */
class CorrespondenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $destino =Destinatario::inRandomOrder()->first()->id;
        return [
            //
            'fecha' => fake()->date(),
            'remitente' => fake()->text(50),
            'asunto' => fake()->text(50),
            'cite' => fake()->text(30),
            'destinatario_id'=> $destino
        ];
    }
}
