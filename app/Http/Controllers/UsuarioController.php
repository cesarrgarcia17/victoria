<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // Obtiene todos los usuarios de la base de datos
        $usuarios = Usuario::all();

        // Devuelve los usuarios en formato JSON
        return response()->json($usuarios);

    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // Crea un nuevo usuario con los datos recibidos
        $usuario = Usuario::create([
        'solicitante' => $request->solicitante,
        'mail' => $request->mail,
        'contraseña' => $request->contraseña,
        'rol' => $request->rol
    ]);

        // Devuelve el usuario creado en formato JSON
        return response()->json($usuario, 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        // Busca el usuario por su ID
        $usuario = Usuario::find($id);

        // Devuelve el usuario en formato JSON
        return response()->json($usuario);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        // Busca el usuario por su ID
        $usuario = Usuario::find($id);

        // Devuelve el usuario en formato JSON
        return response()->json($usuario);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Busca el usuario por su ID
        $usuario = Usuario::find($id);

        // Actualiza los datos del usuario
        $usuario->update([
        'solicitante' => $request->solicitante,
        'mail' => $request->mail,
        'contraseña' => $request->contraseña,
        'rol' => $request->rol
    ]);

        // Devuelve el usuario actualizado en formato JSON
        return response()->json($usuario);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Busca el usuario por su ID
        $usuario = Usuario::find($id);

        // Elimina el usuario de la base de datos
        $usuario->delete();

        // Devuelve un mensaje confirmando que fue eliminado
        return response()->json([
        'mensaje' => 'Usuario eliminado correctamente'
    ]);

    }
}
