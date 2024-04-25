<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index()
    {
        return view('inventario.producto.index');
    }
    
    public function create()
    {
        return view('inventario.producto.crear');
    }
    public function store(Request $request)
    {
        return view('inventario.producto.mostrar');
    }
    public function show(string $id)
    {
        return view('inventario.producto.editar');
    }
    public function edit(string $id)
    {
        return view('inventario.producto.guardar');
    }
    public function update(Request $request, string $id)
    {
        return view('inventario.producto.eliminar');
    }

    public function destroy(string $id)
    {
        //
    }
}
