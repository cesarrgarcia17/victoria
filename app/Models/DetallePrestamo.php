<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetallePrestamo extends Model
{
       //nombre de la tabla
    protected $table = "detalle_prestamos";

    protected $fillable = [
        'pedido',
        'inventario',
        'fecha_entrega',
        'estado',
        'observaciones',
    ];    
}
