<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AddRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleClient = Role::create(['name'=>'Client']);
        $roleUser   = Role::create(['name'=>'User']);

        /* con givePermissionTo permite asociar entre el/los permiso/s y el rol */
        $roleUser->givePermissionTo([
            'users.index',
            'users.edit',
            'users.show',
            'users.create',
            'users.destroy',
        ]);
        
        /* con givePermissionTo permite asociar entre el/los permiso/s y el rol */
        $roleClient->givePermissionTo([
            'users.index',
            'users.edit',
            'users.show',
            'users.create',
            'users.destroy',
        ]);
    }
}
