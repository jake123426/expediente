<?php

namespace Database\Seeders;

use App\Models\Despacho;
use Illuminate\Database\Seeder;

class DespachoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Despacho::create([
            'nombre' => 'Juzgado de primera instancia en lo civil y comercial del decimo sexto turno'
        ]);
        Despacho::create([
            'nombre' => 'Juzgado de primera instancia en lo constitucional del decimo turno'
        ]);
        Despacho::create([
            'nombre' => 'Juzgado de primera instancia en lo laboral del cuarto turno'
        ]);
        Despacho::create([
            'nombre' => 'Juzgado de primera instancia en lo penal del quinto turno'
        ]);
        Despacho::create([
            'nombre' => 'Juzgado de primera instancia en la niñez y adolescencia del sexto turno'
        ]);
    }
}
