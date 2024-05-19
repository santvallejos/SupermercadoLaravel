<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;
use Database\Seeders\CategoriesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(class:ProductSeeder::class);
        // \App\Models\User::factory(10)->create();
        $this->call(class:CategoriesTableSeeder::class);
    }
}
