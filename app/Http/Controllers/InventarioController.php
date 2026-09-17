<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtiene todos los registros de la base de datos
        $inventarios = Inventario::all();

        // Devuelve los registros en formato JSON
        return response()->json($inventarios);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Guarda el registro en la base de datos
        $inventario = Inventario::create([
        'material' => $request->material,
        'estado' => $request->estado,
        'cod_productos' => $request->cod_productos,
        'descripcion' => $request->descripcion
    ]);

        // Devuelve el registro creado en formato JSON
        return response()->json($inventario, 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        // Busca el registro del inventario por su ID
        $inventario = Inventario::find($id);

        // Devuelve el registro en formato JSON
        return response()->json($inventario);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        // Busca el registro por su ID
        $inventario = Inventario::find($id);

        // Devuelve el registro en formato JSON
        return response()->json($inventario);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // Busca el registro por su ID
        $inventario = Inventario::find($id);

        // Actualiza los datos del registro
        $inventario->update([
        'material' => $request->material,
        'estado' => $request->estado,
        'cod_productos' => $request->cod_productos,
        'descripcion' => $request->descripcion
    ]);

        // Devuelve el registro actualizado en formato JSON
        return response()->json($inventario);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        // Busca el registro por su ID
        $inventario = Inventario::find($id);

        // Elimina el registro de la base de datos
        $inventario->delete();

        // Devuelve un mensaje confirmando que fue eliminado
        return response()->json([
        'mensaje' => 'Registro de inventario eliminado correctamente'
    ]);

    }
}
