<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{  
       //nombre de la tabla
    protected $table = "detalle_pedidos";

    protected $fillable = [
        'pedido',
        'material',
        'cantidad',
        
    ];


}
