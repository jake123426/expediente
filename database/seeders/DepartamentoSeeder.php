<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamento::create([
            'nombre' => 'Santa Cruz'
        ]);
        Departamento::create([
            'nombre' => 'Beni'
        ]);
        Departamento::create([
            'nombre' => 'Tarija'
        ]);
        Departamento::create([
            'nombre' => 'Cochabamba'
        ]);
        Departamento::create([
            'nombre' => 'La Paz'
        ]);
    }
}
