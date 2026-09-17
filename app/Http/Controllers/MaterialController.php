<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

            // Obtiene todos los materiales de la base de datos
            $materiales = Material::all();

            // Devuelve todos los materiales en formato JSON
             return response()->json($materiales);

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         // Crea un nuevo material con los datos recibidos
        $material = Material::create([
        'nombre' => $request->nombre,
        'imagen' => $request->imagen,
        'cod_patrimonial' => $request->cod_patrimonial,
        'marca' => $request->marca,
        'categoria' => $request->categoria,
        'cantidad' => $request->cantidad,
        'unidad' => $request->unidad,
        'ubicacion' => $request->ubicacion,
        'tipo' => $request->tipo,
        'descripcion' => $request->descripcion
     ]);

        // Devuelve el material creado en formato JSON
        return response()->json($material, 201);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

         // Busca el material por su ID
        $material = Material::find($id);

        // Devuelve el material en formato JSON
        return response()->json($material);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Busca el material por su ID
        $material = Material::find($id);

        // Devuelve el material en formato JSON
        return response()->json($material);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

         // Busca el material por su ID
        $material = Material::find($id);

        // Actualiza los datos del material
        $material->update([
        'nombre' => $request->nombre,
        'imagen' => $request->imagen,
        'cod_patrimonial' => $request->cod_patrimonial,
        'marca' => $request->marca,
        'categoria' => $request->categoria,
        'cantidad' => $request->cantidad,
        'unidad' => $request->unidad,
        'ubicacion' => $request->ubicacion,
        'tipo' => $request->tipo,
        'descripcion' => $request->descripcion
    ]);

        // Devuelve el material actualizado en formato JSON
        return response()->json($material);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        // Busca el material por su ID
        $material = Material::find($id);

        // Elimina el material de la base de datos
         $material->delete();

        // Devuelve un mensaje confirmando que fue eliminado
         return response()->json([
        'mensaje' => 'Material eliminado correctamente'
    ]);

    }
}
