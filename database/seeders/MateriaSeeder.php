<?php

namespace Database\Seeders;

use App\Models\Materia;
use Illuminate\Database\Seeder;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Materia::create([
            'nombre' => 'Civil y comercial'
        ]);
        Materia::create([
            'nombre' => 'Penal'
        ]);
        Materia::create([
            'nombre' => 'Constitucional'
        ]);
        Materia::create([
            'nombre' => 'Niñez y adolescencia'
        ]);

        Materia::create([
            'nombre' => 'Laboral'
        ]);
    }
}
