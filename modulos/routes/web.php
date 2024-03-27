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

Route::controller(TipoIdController::class)->group(function(){
    route::get('registro/TipoID','index');//index = recurso del controlador.-> Muestra todo
    route::get('terceros/create','create');//create = recurso del controlador. -> Crear
    route::get('terceros/store','store');//adicionar
    route::get('terceros/show/{terceros}','show');//Show = buscar uno
    route::get('terceros/edit/{terceros}','edit');//editar uno
    route::get('terceros/update/{terceros}','update');//actualizar uno
    route::get('terceros/destroy/{terceros}','destroy');//eliminar uno
});

Route::controller(CategoriaController::class)->group(function(){
    Route::get('categoria','index'); // Muestra todo
    Route::get('categoria/create','create'); // Crear
    Route::post('categoria/store','store'); // Almacenar
    Route::get('categoria/{categoria}','show'); // Mostrar uno
    Route::get('categoria/{categoria}/edit','edit'); // Editar uno
    Route::put('categoria/{categoria}','update'); // Actualizar uno
    Route::delete('categoria/{categoria}','destroy'); // Eliminar uno
});

