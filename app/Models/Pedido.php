<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    //nombre de la tabla
    protected $table = "pedidos";

    protected $fillable = [
        'solicitante',
        'fecha',
        'hora',
        'hora',
        'curso',
        'grupo',
        'estado',
        'observaciones',
    ];    
        

 
}
