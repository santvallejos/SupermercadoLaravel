<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    //define los atributos que se pueden asignar
    protected $fillable = ["name", "price", "description" ,"image"]; 
}
