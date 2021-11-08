<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Expediente;

class ExpedinteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $expediente1 = Expediente::create([
            'NroExpediente' => '08713',
            'proceso' => 'PRELIMINAR - EJECUTIVO',
            'tribunal' => 'JUEZ DE INSTRUCCIÓN EN LO CIVIL',
            'departamento_id' => 1,
            'despacho_id' => 1,
            'materia_id' => 1
        ]);
        $expediente2 = Expediente::create([
            'NroExpediente' => '07895',
            'proceso' => 'EXPLOTACION LABORAL',
            'tribunal' => 'JUZGADO PUBLICO NIÑEZ Y ADOLESCENCIA Nº4',
            'departamento_id' => 2,
            'despacho_id' => 2,
            'materia_id' => 2
        ]);
        $expediente3 = Expediente::create([
            'NroExpediente' => '04589',
            'proceso' => 'ORDINARIO DIVORCIO',
            'tribunal' => 'JUZGADO Nº2 PUBLICO DE FAMILIA',
            'departamento_id' => 3,
            'despacho_id' => 3,
            'materia_id' => 3
        ]);
        $expediente4 = Expediente::create([
            'NroExpediente' => '08751',
            'proceso' => 'ORDINARIO',
            'tribunal' => 'JUZGADO PUBLICO CIVIL Y COMERCIAL Nº1',
            'departamento_id' => 4,
            'despacho_id' => 4,
            'materia_id' => 4
        ]);
        $expediente5 = Expediente::create([
            'NroExpediente' => '06584',
            'proceso' => 'DEMANDA EJECUTIVA',
            'tribunal' => 'JUZGADO PUBLICO COMERCIAL Nº2',
            'departamento_id' => 5,
            'despacho_id' => 5,
            'materia_id' => 5
        ]);

        $expediente1->usuarios()->attach([2,4,5]);
        /* $expediente2->usuarios()->attach([2,4,5]);
        $expediente3->usuarios()->attach([2,4,5]); */
        $expediente4->usuarios()->attach([3,6,7]);
       /*  $expediente5->usuarios()->attach([3,6,7]); */


    }
}
