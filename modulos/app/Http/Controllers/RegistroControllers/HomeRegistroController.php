<?php

namespace App\Http\Controllers\RegistroControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HomeRegistroController extends Controller
{
    public function index()
    {
        return view('registro.indexRegistro');//
    }
    
}