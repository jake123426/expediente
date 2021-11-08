<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Operario']);
        $role3 = Role::create(['name' => 'Usuario']);

        Permission::create(['name' => 'admin.usuarios.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.usuarios.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.usuarios.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.usuarios.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.bitacora'])->syncRoles([$role1]);


        Permission::create(['name' => 'admin.home'])->syncRoles([$role2, $role3]);
        Permission::create(['name' => 'admin.create'])->syncRoles([$role2]);
        Permission::create(['name' => 'admin.mostrar'])->syncRoles([$role2, $role3]);


        Permission::create(['name' => 'main.expediente'])->syncRoles([$role2, $role3]);

    }
}
