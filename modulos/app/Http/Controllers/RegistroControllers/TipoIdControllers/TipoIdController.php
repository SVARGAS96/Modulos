<?php

namespace App\Http\Controllers\RegistroControllers\TipoIdControllers;
use App\Http\Controllers\Controller;
use App\Models\TipoId;
use Illuminate\Http\Request;

class TipoIdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos_id = TipoId::all(); // Recupera todos los registros de la tabla TipoId
        return view('registro.TipoID.index', ['tipos_id' => $tipos_id]); // Pasar los registros a la vista
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registro.TipoId.create');//
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipo_id = new TipoID();
        $tipo_id->Nombre = $request->input('Nombre');
        $tipo_id->Descripcion = $request->input('Descripcion');
    
        $tipo_id->save();
        return redirect()->route('tipoId.index');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tipoId = TipoId::findOrFail($id); // Buscar el registro por su ID
        return view('registro.TipoID.show', compact('tipoId')); // Pasar el registro a la vista
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tipoId = TipoId::findOrFail($id); // Buscar el registro por su ID
        return view('registro.TipoID.edit', compact('tipoId')); // Pasar el registro a la vista
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tipoId = TipoId::findOrFail($id); // Buscar el registro por su ID
        $tipoId->update($request->all()); // Actualizar los datos del registro con los datos del formulario
        return redirect()->route('tipoId.index'); // Redirigir al listado de registros
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Buscar la categoría por su ID
        $tipoId = TipoId::findOrFail($id);
        
        // Eliminar el TipoId
        $tipoId->delete();
        
        // Redirigir a la lista de categorías
        return redirect()->route('tipoId.index');
    }
    
}
