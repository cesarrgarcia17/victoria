<?php

use Illuminate\Support\Facades\Route;
use App\Models\Material;

Route::get('/materiales', function () {
    $materiales = Material::all();

    return response()->json($materiales);
});

Route::post('/materiales', function () {
    Material::create([
        'nombre' => "Pinza",
        'categoria' => 1,
        'cantidad' => 4,
        'unidad' => 'unidad',
        'tipo' => 'bien durable',
    ]);

    return response()->json();
});
