<!-- estas líneas de código están definiendo una ruta en una aplicación Laravel 
que apunta a un controlador específico para manejar las solicitudes GET en la raíz de la aplicación. -->
<?php
#Esta línea importa la clase Route del framework Laravel. Route se utiliza para definir las rutas en una aplicación Laravel.

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistroControllers\TipoIdControllers\TipoIdController;

use Illuminate\Support\Facades\Route;
#Aquí se importa el controlador TercerosController que está ubicado en el namespace App\Http\Controllers..
#use App\Http\Controllers\TercerosController;
use App\Http\Controllers\inventarioController\CategoriaControllers\CategoriaController;
use App\Http\Controllers\ProductoController;

#Aquí se importa el controlador TercerosController que está ubicado en el namespace App\Http\Controllers..
#Esta línea define una ruta GET en la raíz de la aplicación (/). 
/* Cuando un usuario accede a la URL base de la aplicación, se enviará una solicitud a esta ruta. 
El segundo argumento especifica el controlador que manejará la solicitud, en este caso, 
TercerosController::class. Esto significa que cuando se accede a la ruta /, 
la solicitud será manejada por el método index() del controlador TercerosController. */
Route::get('/',HomeController::class);

/* el método Route::controller() en Laravel. 
Se utiliza para registrar un controlador completo y 
definir las rutas correspondientes para cada método del controlador. */ 

#Rutas modulo Registro / TipoIdentificacion Santiago.
Route::controller(TipoIdController::class)->group(function(){
    route::get('registro/TipoID','index');//index = recurso del controlador.-> Muestra todo
    route::get('registro/TipoID/create','create');//create = recurso del controlador. -> Crear
    route::get('registro/TipoID/store','store');//adicionar POST
    route::get('registro/TipoID/show/{registro}','show');//Show = buscar uno
    route::get('registro/TipoID/edit/{registro}','edit');//editar uno
    route::get('registro/TipoID/update/{registro}','update');//actualizar uno PUT
    route::get('registro/TipoID/destroy/{registro}','destroy');//eliminar uno DELETE
});
#Rutas modulo Inventario / Categoria Erika.
Route::controller(CategoriaController::class)->group(function(){
    Route::get('inventario/categoria','index'); // Muestra todo
    Route::get('inventario/categoria/crear','create'); // Crear
    Route::get('inventario/categoria/guardar','store'); // Almacenar
    Route::get('inventario/categoria/mostrar/{categoria}','show'); // Mostrar uno
    Route::get('inventario/categoria/editar/{categoria}','edit'); // Editar uno
    Route::get('inventario/categoria/actualizar/{categoria}','update'); // Actualizar uno
    Route::get('inventario/categoria/eliminar/{categoria}','destroy'); // Eliminar uno
});

Route::controller(ProductoController::class)->group(function(){
    Route::get('inventario/producto','index'); // Muestra todo
    Route::get('inventario/producto/crear','create'); // Crea
    Route::get('inventario/producto/guardar','store'); // Almacena
    Route::get('inventario/producto/mostrar/{producto}','show'); // Muestra 1
    Route::get('inventario/producto/editar/{producto}','edit'); // Editar uno
    Route::get('inventario/producto/eliminar/{producto}','destroy'); // Eliminar uno
});

