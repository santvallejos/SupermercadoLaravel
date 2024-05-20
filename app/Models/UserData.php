<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;

    protected $table = 'users_datas';
    protected $fillable = [
        'user_id',
        'nombre',
        'apellido',
        'fechadenacimiento',
        'sexo',
    ];

}
