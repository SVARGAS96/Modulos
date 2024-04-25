<?php

namespace App\Http\Controllers\InventarioController\CategoriaControllers;
use App\Http\Controllers\Controller;
use App\Models\categoria;
use Database\Seeders\categoriaSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoria = categoria::all(); // Recupera todos los registros de la tabla TipoId
        return view('inventario.categoria.index', ['categorias' => $categoria]); // Pasar los registros a la vista
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventario.categoria.crear');//
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorias = new categoria();
        $categorias->Nombre = $request->input('Nombre');
        $categorias->Descripción = $request->input('Descripcion');
    
        $categorias->save();
        return redirect()->route('categoria.index');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categoria_id = categoria::findOrFail($id); // Buscar el registro por su ID
        return view('inventario.categoria.mostrar', compact('categoria_id')); // Pasar el registro a la vista
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categoria_id = categoria::findOrFail($id); // Buscar el registro por su ID
        return view('inventario.categoria.editar', compact('categoria_id')); // Pasar el registro a la vista
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $categoria_id = categoria::findOrFail($id); // Buscar el registro por su ID
        $categoria_id->update($request->all()); // Actualizar los datos del registro con los datos del formulario
        return redirect()->route('categoria.index'); // Redirigir al listado de registros
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Buscar la categoría por su ID
        $categoria = Categoria::findOrFail($id);
        
        // Eliminar la categoría
        $categoria->delete();
        
        // Redirigir a la lista de categorías
        return redirect()->route('categoria.index');
    }


}
