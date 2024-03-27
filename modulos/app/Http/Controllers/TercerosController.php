<?php
/* <!-- los controladores en Laravel proporcionan un punto central para manejar la lógica de la aplicación 
en respuesta a las solicitudes HTTP entrantes, ayudando así a mantener tu código organizado y modular. --> */

#Nombre del espacio, indica que la clase TercerosController esta dentro del directorio App\Http\Controllers.
namespace App\Http\Controllers;
#SE importa la clase Request de laravel para el manejo de las solicitudes HTTP entrantes
use Illuminate\Http\Request;
#Se define la clase TercerosController , extiende de Controller -> contiene las funcionalidades comunes para los controladores
class TercerosController extends Controller
{
    /**
     * Este método maneja las solicitudes para mostrar una lista de recursos.
     */
    public function index()
    {
        return view('terceros.index');//llama la vista index de la carpeta terceros.(carpeta.archivo)
    }

    /**
     * Este método muestra el formulario para crear un nuevo recurso..
     */
    public function create()
    {
        return view('terceros.create');//
    }

    /**
     * Este método maneja las solicitudes para almacenar un 
     * nuevo recurso en el sistema. Recibe una instancia de 
     * Request como parámetro, que contiene los datos de la solicitud entrante.
     */
    public function store(Request $request)
    {
        return view('terceros.store');//
    }

    /**
     * Este método muestra un recurso específico. Recibe el ID del recurso como parámetro.
     */
    public function show(string $id)
    {
        return view('terceros.show');//
    }

    /**
     * Este método muestra el formulario para editar un recurso específico. Recibe el ID del recurso como parámetro..
     */
    public function edit(string $id)
    {
        return view('terceros.edit');//
    }

    /**
     * Este método maneja las solicitudes para actualizar un recurso existente en el sistema. Recibe una instancia de Request y el ID del recurso como parámetros.
     */
    public function update(Request $request, string $id)
    {
        return view('terceros.update');//
    }

    /**
     * Este método maneja las solicitudes para eliminar un recurso específico del sistema. Recibe el ID del recurso como parámetro..
     */
    public function destroy(string $id)
    {
        return view('terceros.destroy');//
    }
}
