<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MensajeSeeder::class);
        $this->call(DepartamentoSeeder::class);
        $this->call(MateriaSeeder::class);
        $this->call(DespachoSeeder::class);
        $this->call(ExpedinteSeeder::class);
        $this->call(PresentationSeeder::class);
        /* $this->call(ArchivoSeeder::class); */
    }
}
