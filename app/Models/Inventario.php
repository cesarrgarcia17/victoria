<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inventario extends Model
{
    // Nombre de la tabla
    protected $table = "inventario";

    // Campos que se pueden guardar o modificar
    protected $fillable = [
        'material',
        'estado',
        'cod_productos',
        'descripcion'
    ];

    // La tabla no utiliza created_at ni updated_at
    public $timestamps = false;

    // Relación con la tabla materiales
    public function material(): BelongsTo
    {
        return $this->belongsTo(Material::class, 'material');
    }
}
