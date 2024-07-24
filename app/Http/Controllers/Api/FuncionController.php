<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Funcion;
use DateTime;
use Illuminate\Http\Request;

class FuncionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Funcion::with('pelicula','sala.cine')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos recibidos
        $validatedData = $request->validate([
            'pelicula_id' => 'required|integer',
            'sala_id' => 'required|integer',
            'fecha' => 'required|date_format:Y-m-d H:i:s',
        ]);
    
        // Convertir la fecha a un objeto DateTime
        $fecha = new DateTime($validatedData['fecha']);
    
        // Restar 5 horas
        $fecha->modify('-5 hours');
    
        // Actualizar el campo fecha en el array validado
        $validatedData['fecha'] = $fecha->format('Y-m-d H:i:s');
    
        // Crear y guardar la nueva función usando el método create
        return Funcion::create($validatedData);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Funcion $funcion)
    {
        return $funcion->load('pelicula','sala.cine');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
