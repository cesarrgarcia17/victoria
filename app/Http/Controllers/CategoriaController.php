<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categorias= Categoria::all();
        return response()->json($categorias);

    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $categoria = Categoria::create([
            'nombre' => $request->nombre
        ]);

        return response()->json($categoria, 201);
    }

    /**
    * Muestra el recurso especificado
     */
    public function show(string $id)
    {
         // Busca la categoría por su ID
        $categoria = Categoria::find($id);

         // Devuelve la categoría en formato JSON
        return response()->json($categoria);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         // Busca la categoría por su ID
        $categoria = Categoria::find($id);

         // Devuelve la categoría en formato JSON
        return response()->json($categoria);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          // Busca la categoría por su ID
         $categoria = Categoria::find($id);

          // Actualiza el nombre de la categoría
         $categoria->update([
             'nombre' => $request->nombre
    ]);

          // Devuelve la categoría actualizada en formato JSON
          return response()->json($categoria);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
            // Busca la categoría por su ID
             $categoria = Categoria::find($id);

            // Elimina la categoría de la base de datos
             $categoria->delete();

            // Devuelve un mensaje confirmando que fue eliminada
            return response()->json([
                 'mensaje' => 'Categoría eliminada correctamente'
    ]);

    }
}
