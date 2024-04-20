<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoId extends Model
{
    protected $table = 'tipos_id'; // Aquí defines el nombre de la tabla

    protected $fillable = ['Nombre', 'Descripcion'];
}

