<?php

namespace Database\Seeders;

use App\Models\Presentation;
use Illuminate\Database\Seeder;

class PresentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Presentation::create([
            'descripcion' => 'Solicitar nueva audiencia',
            'tipo'        => 'Presentación de recurso',
            'NroFojas' => 12,
            'file' => 'prueba.pdf',
            'expediente_id' => 1
        ]);
        Presentation::create([
            'descripcion' => 'Apelación y nulidad',
            'tipo'        => 'Presentación de recurso de aclaratoria' ,
            'NroFojas' => 5,
            'file' => 'prueba.pdf',
            'expediente_id' => 1
        ]);
        Presentation::create([
            'descripcion' => 'Presentar demanda',
            'tipo'        =>  'Presentación electrónica'  ,
            'NroFojas' => 8,
            'file' => 'prueba.pdf',
            'expediente_id' => 1
        ]);
        Presentation::create([
            'descripcion' => 'Prueba material',
            'tipo'        => 'Presentación de recurso de reposición',
            'NroFojas' => 40,
            'file' => 'prueba.pdf',
            'expediente_id' => 4
        ]);

        Presentation::create([
            'descripcion' => 'Denegación de recurso',
            'tipo'        => 'Presentación electrónica' ,
            'NroFojas' => 10,
            'file' => 'prueba.pdf',
            'expediente_id' => 4
        ]);

    }
}
