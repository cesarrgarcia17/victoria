<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    // Nombre de la tabla
    protected $table = "solicitantes";

    // Campos que se pueden guardar o modificar
    protected $fillable = [
        'nombre',
        'apellido',
        'tipo_solicitante',
        'estado',
    ];

    // La tabla no utiliza created_at ni updated_at
    public $timestamps = false;
}