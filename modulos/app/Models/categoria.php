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
>>>>>>> 5a9e3a6881ee007ff5fe82f5bc416c530ef56367
}
