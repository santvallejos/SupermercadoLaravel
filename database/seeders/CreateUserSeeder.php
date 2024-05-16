<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'maxis',
            'username'=> 'maxis',
            'fechadenacimiento'=> 12/12/1212,
            'sexo'=> 'femenino',
            'email'=> 'maxis@gmail.com',
            'password'=> '12345678',
        ]);
    }
}
