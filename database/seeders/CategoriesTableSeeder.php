<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Almacen',
            'Bebidas',
            'Congelados',
            'Frutas y Verduras',
            'Lacteos',
            'Carnes',
            'Limpieza',
            'Mascotas',
            'Niños y bebes',
            'Perfumeria'
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'slug' => Str::slug($category, '-'),
                'descripcion' => 'Descripción de ' . $category,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
