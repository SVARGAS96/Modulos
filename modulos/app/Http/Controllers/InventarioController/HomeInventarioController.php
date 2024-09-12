<?php

namespace App\Http\Controllers\InventarioControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HomeInventarioController extends Controller
{
    public function index()
    {
        return view('inventario.indexInventario');//
    }
    
}