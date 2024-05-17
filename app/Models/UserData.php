<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;
    protected $table='users_data';
    protected $fillable = [
        'name',
        'username',
        'fechadenacimiento',
        'sexo',
        'email',
        'password',
    ];
    protected $hidden=['deleted_at','created_at','updated_at'];
}
