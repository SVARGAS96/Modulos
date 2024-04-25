<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
<<<<<<< HEAD
    use HasFactory;
    protected $table= 'categorias';
=======
    protected $table = 'categorias'; // Aquí defines el nombre de la tabla

    protected $fillable = ['Nombre', 'Descripcion'];
}
