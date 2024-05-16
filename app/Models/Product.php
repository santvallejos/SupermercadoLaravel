<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /* Esta es una relacion de 1 a 1, un producto pertenece a una categoria */
    /* belongsTo funciona identificando la llave foranea de la tabla en cuestion que seria Producto 
    y la relaciona con la tabla de referencia que seria categoria */ 
   public function category() {
        return $this->belongsTo('App\Category');
   }
}
