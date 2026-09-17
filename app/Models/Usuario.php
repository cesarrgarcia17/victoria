<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //nombre de la tabla
    protected $table = "usuario";

    protected $fillable = [
        'solicitante',
        'mail',
        'contraseña',
        'rol',

     
    ];    
     
}