<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtiene todos los pedidos de la base de datos
         $pedidos = Pedido::all();

        // Devuelve los pedidos en formato JSON
         return response()->json($pedidos);

    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Guarda el pedido en la base de datos
        $pedido = Pedido::create([
        'solicitante' => $request->solicitante,
        'fecha' => $request->fecha,
        'hora' => $request->hora,
        'curso' => $request->curso,
        'grupo' => $request->grupo,
        'estado' => $request->estado,
        'observaciones' => $request->observaciones
    ]);

         // Devuelve el pedido creado en formato JSON
        return response()->json($pedido, 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        // Busca el pedido por su ID
        $pedido = Pedido::find($id);

        // Devuelve el pedido en formato JSON
        return response()->json($pedido);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Busca el pedido por su ID
        $pedido = Pedido::find($id);

        // Devuelve el pedido en formato JSON
        return response()->json($pedido);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // Busca el pedido por su ID
        $pedido = Pedido::find($id);

        // Actualiza los datos del pedido
        $pedido->update([
        'solicitante' => $request->solicitante,
        'fecha' => $request->fecha,
        'hora' => $request->hora,
        'curso' => $request->curso,
        'grupo' => $request->grupo,
        'estado' => $request->estado,
        'observaciones' => $request->observaciones
    ]);

        // Devuelve el pedido actualizado en formato JSON
        return response()->json($pedido);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        // Busca el pedido por su ID
        $pedido = Pedido::find($id);

        // Elimina el pedido de la base de datos
         $pedido->delete();

        // Devuelve un mensaje confirmando que fue eliminado
        return response()->json([
        'mensaje' => 'Pedido eliminado correctamente'
    ]);

    }
}
