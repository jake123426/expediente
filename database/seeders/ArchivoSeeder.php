<?php

namespace Database\Seeders;

use App\Models\Archivo;
use Illuminate\Database\Seeder;

class ArchivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Archivo::create([
            'Url' => 'https\imagen\img.jpg',
            'tipo' => 'Imagen',
            'presentation_id' => 1
        ]);
        Archivo::create([
            'Url' => 'https\imagen\img.jpg',
            'tipo' => 'Imagen',
            'presentation_id' => 2
        ]);
        Archivo::create([
            'Url' => 'https\imagen\img.jpg',
            'tipo' => 'Imagen',
            'presentation_id' => 3
        ]);
        Archivo::create([
            'Url' => 'https\imagen\img.jpg',
            'tipo' => 'Imagen',
            'presentation_id' => 4
        ]);
    }
}
