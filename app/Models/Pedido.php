<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    // Nombre de la tabla
    protected $table = "pedidos";

    // Campos que se pueden guardar o modificar
    protected $fillable = [
        'solicitante',
        'fecha',
        'hora',
        'curso',
        'grupo',
        'estado',
        'observaciones'
    ];

    // La tabla no utiliza created_at ni updated_at
    public $timestamps = false;
}
