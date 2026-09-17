<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //nombre de la tabla
    protected $table = "materiales";

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

    public $timestamps = false;


    public function categoria(): HasOne
    {
        return $this->hasOne(Categoria::class,'categoria');
    }
}
