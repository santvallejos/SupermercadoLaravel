<!-- Modelo para el reseteo de contraseña, utilizado en el ForgotPasswordController -->
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    use HasFactory;
    protected $table = "password_resets";           //Indica a que tabla esta vinculada
    public $timestamps = false;
    protected $fillable = [
        'id','email','token'
    ];
    protected $hidden = ['created_at'];
}