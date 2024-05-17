<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table='roles';                        /* Indicamos la tabla donde estan los roles */
    protected $fillable=[
        'name',                                     /* Indicamos que necesitamos solo el nombre del rol dentro de la tabla */
    ];
    protected $hidden=['created_at','update_at'];   /* Spatie no contempla delete de roles */
}
