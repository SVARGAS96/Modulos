<?php

namespace App\Http\Controllers\inventarioController\CategoriaControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CategoriaController extends Controller
{
    
    public function index()
    {
        
        return view ('inventario/categoria.index');
    }
    public function create()
    {
        return view ('inventario/categoria.crear');
    }
    public function store(Request $request)
    {
        return view ('inventario/categoria.guardar');
    }
    public function show(string $id)
    {
        return view ('inventario/categoria.mostrar');
    }
    public function edit(string $id)
    {
        return view('inventario/categoria.editar');
    }
    public function update(Request $request, string $id)
    {
        return view('inventario/categoria.actualizar');
    }
    public function destroy(string $id)
    {
        return view('inventario/categoria.eliminar');
    }
}
