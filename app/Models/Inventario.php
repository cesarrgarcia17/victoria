<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    //nombre de la tabla
    protected $table = "inventario";

    protected $fillable = [
        'material',
        'estado',
        'cod_productos',
        'descripcion',
    ];    
        

 
}
