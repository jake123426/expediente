<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mensaje;

class MensajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mensaje1 = Mensaje::create([
            'asunto' => 'Añadido nueva actuacion procesal',
            'fecha' => date('Y-m-d')
        ]);
        $mensaje2 = Mensaje::create([
            'asunto' => 'Añadido nueva presentacion',
            'fecha' => date('Y-m-d')
        ]);
        $mensaje3 = Mensaje::create([
            'asunto' => 'Añadido nueva evidencia',
            'fecha' => date('Y-m-d')
        ]);

        $mensaje1->usuarios()->attach(1);

        $mensaje2->usuarios()->attach([1,2]);

        $mensaje3->usuarios()->attach(1);
    }
}
