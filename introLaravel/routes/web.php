<?php

use App\Http\Controllers\clienteController;
use App\Http\Controllers\ControladorVistas;
use Illuminate\Support\Facades\Route;

//RUTA TIPO GET
/* Route::get('/', function () {
    return view('welcome');
}); 

// RUTA TIPO VIEW
Route::view('/','inicio')->name ('rutainicio');


//CREACION DE RURTA DE NUESTRO FORMULARIO DE VISTA 
//RUTA TIPO VIEW
Route::view('/form','formulario')->name ('rutaform');


// Ruta de clientes
Route::view('/cliente','clientes')->name('rutaclientes');
*/

Route::view('/componentes','componentes')->name('rutacomponentes');




/*rutas para controlador    Vistas*/


Route::get('/',[ControladorVistas::class, 'home'])->name('rutainicio');
Route::get('/form',[ControladorVistas::class, 'formulario'])->name('rutaform');
Route::get('/consultar',[ControladorVistas::class, 'consulta'])->name('rutaclientes');

Route::post('/enviarClientes',[ControladorVistas::class, 'procesarClientes'])->name('rutaEnviar');




/*rutas para cliente controlador */

Route::get('/cliente/create',[clienteController::class, 'create'])->name('rutaform');




/*rutas para la act 9 */

Route::match(['get', 'post'], '/clientesf/{id?}', [ClienteController::class, 'clientesf'])->name('clientesf');





// Ruta para cargar el formulario principal
Route::get('/clientesf', [ClienteController::class, 'index'])->name('clientesf');

// Ruta para cargar datos del cliente y editarlos
Route::get('/clientesf/{id}/edit', [ClienteController::class, 'edit'])->name('clientesf.edit');

// Ruta para actualizar un cliente
Route::put('/clientesf/{id}', [ClienteController::class, 'update'])->name('clientesf.update');

// Ruta para eliminar un cliente
Route::delete('/clientesf/{id}', [ClienteController::class, 'destroy'])->name('clientesf.destroy');