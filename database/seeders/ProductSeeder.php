<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'nombre' => 'Leche',
            'categoria_id' => '5',
            'slug' =>'lecheLaSerenisima',
            'descripcion' =>'leche entera 1 litro',
            'cantidad'=> '20',
            'imagen_product' =>'descarga.jpg',
            'precio' => '1000',
          
        ]);

        Product::create([
            'nombre'=> 'Mayonesa',
            'categoria_id' => '1',
            'slug'=> 'mayonesa',
            'descripcion'=>'leche entera 1 litro',
            'cantidad'=> '20',
            'imagen_product'=>'Mayonesa-Natura-500-Ml-_1.webp',
            'precio'=>'1000',
        ]        
        
        );
    }
}
