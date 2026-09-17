<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Material extends Model
{
    // Nombre de la tabla
    protected $table = "materiales";

    // Campos que se pueden guardar o modificar
    protected $fillable = [
        'nombre',
        'imagen',
        'cod_patrimonial',
        'marca',
        'categoria',
        'cantidad',
        'unidad',
        'ubicacion',
        'tipo',
        'descripcion'
    ];

    // La tabla no utiliza created_at ni updated_at
    public $timestamps = false;

    // Relación con la tabla categorías
    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class, 'categoria');
    }
}
