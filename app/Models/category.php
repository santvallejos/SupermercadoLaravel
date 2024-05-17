<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /* Esta es una relacion de 1 a n, una categoria pueden pertenecer muchos productos */
    public function products() {
        return $this->hasMany(Product::class);
   }
}
