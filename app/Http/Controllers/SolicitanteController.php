<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solicitante;

class SolicitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
    
        // Obtiene todos los solicitantes
        $solicitantes = Solicitante::all();

        // Devuelve los solicitantes en formato JSON
        return response()->json($solicitantes);
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Crea un nuevo solicitante
        $solicitante = Solicitante::create([
        'nombre' => $request->nombre,
        'apellido' => $request->apellido,
        'tipo_solicitante' => $request->tipo_solicitante,
        'estado' => $request->estado,
    ]);

        // Devuelve el solicitante creado
        return response()->json($solicitante, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        // Busca el solicitante por su ID
        $solicitante = Solicitante::find($id);

        // Devuelve el solicitante en formato JSON
        return response()->json($solicitante);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Busca el solicitante por su ID
        $solicitante = Solicitante::find($id);

        // Devuelve el solicitante
        return response()->json($solicitante);
    
 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        // Busca el solicitante
        $solicitante = Solicitante::find($id);

        // Actualiza sus datos
        $solicitante->update([
        'nombre' => $request->nombre,
        'apellido' => $request->apellido,
        'tipo_solicitante' => $request->tipo_solicitante,
        'estado' => $request->estado,
    ]);

        // Devuelve el solicitante actualizado
        return response()->json($solicitante);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        // Busca el solicitante
        $solicitante = Solicitante::find($id);

        // Elimina el solicitante
        $solicitante->delete();

        // Devuelve un mensaje
        return response()->json([
        'mensaje' => 'Solicitante eliminado correctamente'
    ]);

    }
}
