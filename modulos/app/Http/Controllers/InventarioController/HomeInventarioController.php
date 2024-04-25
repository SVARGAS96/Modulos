<?php

namespace App\Http\Controllers\InventarioController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeInventarioController extends Controller
{
    public function index()
    {
        return view('inventario.indexInventario');//
    }
}
