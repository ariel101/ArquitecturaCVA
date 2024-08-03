<?php

namespace Database\Seeders;

use App\Models\Correspondencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CorrespondenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Correspondencia::factory(100)->create();
    }
}
