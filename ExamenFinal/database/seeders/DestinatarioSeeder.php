<?php

namespace Database\Seeders;

use App\Models\Destinatario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinatarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Destinatario::factory(3)->create();
    }
}
