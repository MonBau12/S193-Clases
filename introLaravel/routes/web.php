<?php

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




/*rutas para controlador*/


Route::get('/',[ControladorVistas::class, 'home'])->name('rutainicio');
Route::get('/form',[ControladorVistas::class, 'formulario'])->name('rutaform');
Route::get('/consultar',[ControladorVistas::class, 'consulta'])->name('rutaclientes');

Route::post('/enviarClientes',[ControladorVistas::class, 'procesarClientes'])->name('rutaEnviar');