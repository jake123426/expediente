<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jaime',
            'apellido' => 'Soto Solar',
            'CI' => 4137681,
            'celular' => 69102452,
            'email' => 'admin@correo.com',
            'password' => bcrypt('1234'),
        ])->assignRole('Admin');
        User::create([
            'name' => 'Mijael',
            'apellido' => 'Soto Solar',
            'CI' => 4137682,
            'celular' => 69102453,
            'email' => 'operario@correo.com',
            'password' => bcrypt('1234'),
        ])->assignRole('Operario');
        User::create([
            'name' => 'Luz',
            'apellido' => 'Lijeron Solar',
            'CI' => 4137687,
            'celular' => 69102453,
            'email' => 'operario2@correo.com',
            'password' => bcrypt('1234'),
        ])->assignRole('Operario');
        User::create([
            'name' => 'Franz',
            'apellido' => 'Calizaya Solar',
            'CI' => 4137683,
            'celular' => 69102453,
            'email' => 'usuario1@correo.com',
            'password' => bcrypt('1234'),
        ])->assignRole('Usuario');
        User::create([
            'name' => 'Fulano',
            'apellido' => 'Calizaya Solar',
            'CI' => 4137684,
            'celular' => 69102453,
            'email' => 'usuario2@correo.com',
            'password' => bcrypt('1234'),
        ])->assignRole('Usuario');
        User::create([
            'name' => 'Sutano',
            'apellido' => 'Calizaya Solar',
            'CI' => 4137685,
            'celular' => 69102453,
            'email' => 'usuario3@correo.com',
            'password' => bcrypt('1234'),
        ])->assignRole('Usuario');
        User::create([
            'name' => 'Mengano',
            'apellido' => 'Calizaya Solar',
            'CI' => 4137686,
            'celular' => 69102453,
            'email' => 'usuario4@correo.com',
            'password' => bcrypt('1234'),
        ])->assignRole('Usuario');
    }
}
