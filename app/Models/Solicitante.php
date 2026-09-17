<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitantes extends Model
{
    //nombre de la tabla
    protected $table = "solicitantes";

    protected $fillable = [
        'nombre',
        'apellido',
        'tipo_solicitante',
        'estado',

     
    ];    

}