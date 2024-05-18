<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class AddRoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Definimos los permisos para el rol usuario, cada rol esta asociado a un modelo,
        tambien definimos el nombre y la tabla donde le apuntamos "users" */
        Permission::create(['name'=>'users.index']);    
        Permission::create(['name'=>'users.edit']);
        Permission::create(['name'=>'users.show']);
        Permission::create(['name'=>'users.create']);
        Permission::create(['name'=>'users.destroy']);

        /* Definimos la variable donde de almacenara el nombre del rol */
        $roleAdmin = Role::create(['name'=>'Admin']);

        /* con givePermissionTo permite asociar entre el/los permiso/s y el rol */
        $roleAdmin->givePermissionTo([
            'users.index',
            'users.edit',
            'users.show',
            'users.create',
            'users.destroy',
        ]);
        $user = User::create([
            'name'              => 'admin',
            'username'          => 'admin',
            'fechadenacimiento' => 05/05/2024,
            'sexo'              => 'masculino',
            'email'             => 'admin@gmail.com',
            'password'          =>  bcrypt ('12345678'),
        ]);
        $user->assignRole('Admin');
    }
}
