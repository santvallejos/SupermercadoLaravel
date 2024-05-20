<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Aceite Cocinero 900ml',
                'price' => 1580,
                'image' => 'https://dcdn.mitiendanube.com/stores/001/108/127/products/aceite-cocinero-girasol-900mlbyb1-d180f4b5935ecfbda815881176915719-640-0.png',
            ],
            [
                'id' => 2,
                'name' => 'Harina Caserita',
                'price' => 699,
                'image' => 'https://dcdn.mitiendanube.com/stores/001/108/127/products/caserita-harina-0001-d353732837e611af8d15899876041936-240-0.png',
            ],
            [
                'id' => 3,
                'name' => 'Pan Bimbo',
                'price' => 3356.65,
                'image' => 'https://d287z5784cyr3t.cloudfront.net/s3fs-public/productos/integral.png',
            ],
            [
                'id' => 4,
                'name' => 'Fideos Lucchetti',
                'price' => 866.15,
                'image' => 'https://www.mamalucchetti.com.ar/wp-content/uploads/2020/04/TIRABUZON-1.png',
            ],
            [
                'id' => 5,
                'name' => 'Arroz Lucchetti',
                'price' => 1869.15,
                'image' => 'https://www.mamalucchetti.com.ar/wp-content/uploads/2020/07/largo.png.webp',
            ],
            [
                'id' => 6,
                'name' => 'Gaseosa Cocacola',
                'price' => 2634.15,
                'image' => 'https://i.pinimg.com/originals/19/e2/da/19e2da7f17560b9e182d821170d8d132.png',
            ],
            [
                'id' => 7,
                'name' => 'Ñoquis La Salteña',
                'price' => 957.10,
                'image' => 'https://dcdn.mitiendanube.com/stores/001/108/127/products/saltena-noquis1-00e07cbdf4232dc80115961481919959-480-0.png',
            ],
            [
                'id' => 8,
                'name' => 'Patitas grangas de sol',
                'price' => 3620,
                'image' => 'https://www.granjadelsol.com.ar/wp-content/uploads/2017/10/patitas-400g.webp',
            ],
            [
                'id' => 9,
                'name' => 'Puré de tomamte De La huerta',
                'price' => 679.15,
                'image' => 'https://dulcilandia.com.ar/par/wp-content/uploads/sites/4/2020/05/13714057.png',
            ],
            [
                'id' => 10,
                'name' => 'Hamburgesas Paty',
                'price' => 2811,
                'image' => 'https://dcdn.mitiendanube.com/stores/001/108/127/products/paty-express-x4byb1-9df3317fc7baef782a15888173648696-240-0.png',
            ],
        ]);
    }
}
