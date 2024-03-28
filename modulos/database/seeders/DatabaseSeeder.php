<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;
class categoriaSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Categoria::create([
            'nombre' => 'Accesorios',
            'descripcion' => 'Candado con alarma',

        ]);

        Categoria::create([
            'nombre' => 'Repuestos',
            'descripcion' => 'Cargador USB',

        ]);

        
    }
}
