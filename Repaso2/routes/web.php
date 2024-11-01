<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;


/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', [LibroController::class, 'principal'])->name('principal');
Route::get('/registro', [LibroController::class, 'registro'])->name('libroscreate');
Route::post('/confirmacionregistro', [LibroController::class, 'confirmacionregistro'])->name('confirmacionregistro');
