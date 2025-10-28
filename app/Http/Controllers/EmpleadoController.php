<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::all();
        return response()->json($empleados);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empleado = Empleado::create($request->all());
        return response()->json($producto, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $empleado = Empleado::findOrFail($id);

        $emplado = Empleado::update($request->all());
        return response()->json($empleado, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
