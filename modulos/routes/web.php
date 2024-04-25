<!-- estas líneas de código están definiendo una ruta en una aplicación Laravel 
que apunta a un controlador específico para manejar las solicitudes GET en la raíz de la aplicación. -->
<?php
#Esta línea importa la clase Route del framework Laravel. Route se utiliza para definir las rutas en una aplicación Laravel.

use App\Http\Controllers\HomeController;

use App\Http\Controllers\InventarioController\CategoriaControllers\CategoriaController;
use App\Http\Controllers\InventarioController\HomeInventarioController;

use App\Http\Controllers\RegistroControllers\TipoIdControllers\TipoIdController;
use App\Http\Controllers\RegistroControllers\HomeRegistroController;

use Illuminate\Support\Facades\Route;
#Aquí se importa el controlador TercerosController que está ubicado en el namespace App\Http\Controllers..
<<<<<<< HEAD
=======
#use App\Http\Controllers\TercerosController;
use App\Http\Controllers\inventarioController\CategoriaControllers\CategoriaController;
<<<<<<< HEAD
use App\Http\Controllers\ProductoController;
=======
use App\Http\Controllers\InventarioControllers\HomeInventarioController;
>>>>>>> 5a9e3a6881ee007ff5fe82f5bc416c530ef56367
>>>>>>> dd63c52d12f9005b1643b1af38799bd0d8db9dae

#Aquí se importa el controlador TercerosController que está ubicado en el namespace App\Http\Controllers..
#Esta línea define una ruta GET en la raíz de la aplicación (/). 

/* Cuando un usuario accede a la URL base de la aplicación, se enviará una solicitud a esta ruta. 
El segundo argumento especifica el controlador que manejará la solicitud, en este caso, 
TercerosController::class. Esto significa que cuando se accede a la ruta /, 
la solicitud será manejada por el método index() del controlador TercerosController. */

Route::get('/', [HomeController::class, 'index'])->name('home');

#Rutas modulo Registro / TipoIdentificacion Santiago.
Route::get('registro/', [HomeRegistroController::class, 'index']);

Route::resource('/registro/TipoID', TipoIdController::class)->names([
    'index' => 'tipoId.index',
    'store' => 'tipoId.store',
    'show' => 'tipoId.show',
    'edit' => 'tipoId.edit',
    'update' => 'tipoId.update',
    'destroy' => 'tipoId.destroy',   
]);


#Rutas modulo Inventario / Categoria Erika.
Route::get('inventario/', [HomeInventarioController::class, 'index']);

Route::resource('/inventario/categoria', CategoriaController::class)->names([
    'index' => 'categoria.index',
    'store' => 'categoria.store',
    'show' => 'categoria.show',
    'edit' => 'categoria.edit',
    'update' => 'categoria.update',
    'destroy' => 'categoria.destroy',   
]);

/* Route::controller(CategoriaController::class)->group(function(){
    Route::get('inventario/categoria','index'); // Muestra todo
    Route::get('inventario/categoria/crear','create'); // Crear
    Route::get('inventario/categoria/guardar','store'); // Almacenar
    Route::get('inventario/categoria/mostrar/{categoria}','show'); // Mostrar uno
    Route::get('inventario/categoria/editar/{categoria}','edit'); // Editar uno
    Route::get('inventario/categoria/actualizar/{categoria}','update'); // Actualizar uno
    Route::get('inventario/categoria/eliminar/{categoria}','destroy'); // Eliminar uno
}); */

Route::controller(ProductoController::class)->group(function(){
    Route::get('inventario/producto','index'); // Muestra todo
    Route::get('inventario/producto/crear','create'); // Crea
    Route::get('inventario/producto/guardar','store'); // Almacena
    Route::get('inventario/producto/mostrar/{producto}','show'); // Muestra 1
    Route::get('inventario/producto/editar/{producto}','edit'); // Editar uno
    Route::get('inventario/producto/eliminar/{producto}','destroy'); // Eliminar uno
});

/* el método Route::controller() en Laravel. 
Se utiliza para registrar un controlador completo y 
definir las rutas correspondientes para cada método del controlador. */  