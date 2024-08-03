<?php

namespace Database\Seeders;

use App\Models\Editorial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EditorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Editorial::create([
            'nombre'=>'E. librere'
        ]);

        Editorial::create([
            'nombre'=>'E. TextWorld'
        ]);

        Editorial::create([
            'nombre'=>'E. mundo-libro'
        ]);

        Editorial::create([
            'nombre'=>'E. vida'
        ]);
        Editorial::create([
            'nombre'=>'E. vision'
        ]);

        Editorial::create([
            'nombre'=>'E. gran chaco'
        ]);
        Editorial::create([
            'nombre'=>'E. colonia'
        ]);

        Editorial::create([
            'nombre'=>'E. kantuta'
        ]);

        Editorial::create([
            'nombre'=>'E. bolivia'
        ]);

        Editorial::create([
            'nombre'=>'E. sucre'
        ]);

    }
}
