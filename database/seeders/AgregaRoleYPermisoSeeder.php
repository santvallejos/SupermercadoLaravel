<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\UserData;


class AgregaRoleYPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name'=>'users.index']);
        Permission::create(['name'=>'users.edit']);
        Permission::create(['name'=>'users.show']);
        Permission::create(['name'=>'users.create']);
        Permission::create(['name'=>'users.destroy']);


        $roleClient = Role::create(['name'=>'Client']);
        $roleUser   = Role::create(['name'=>'User']);
        $roleAdmin  = Role::create(['name'=>'Administrator']);

        $roleUser->givePermissionTo([
            'users.index',
            'users.edit',
            'users.show',
            'users.create',
            'users.destroy',
        ]);
        $roleClient->givePermissionTo([
            'users.show',
        ]);


        $roleAdmin->givePermissionTo([
            'users.index',
            'users.edit',
            'users.show',
            'users.create',
            'users.destroy',
        ]);
        $user = User::create([
            'name'          =>    'admin',
            'username'      =>    'admin',
            'email'         =>  'admin@gmail.com',
            'password'      => bcrypt('123123123'),
        ]);
        UserData::create([
            'user_id'           =>  $user->id,
            'nombre'            =>  '',
            'apellido'          =>  '',
            'fechadenacimiento' => '1999-03-25',
            'sexo'              => '',
        ]);
        
        $user->assignRole('Administrator');
    }
}
