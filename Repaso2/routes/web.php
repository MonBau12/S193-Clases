<?php
use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [LibroController::class, 'index'])->name('principal');
Route::get('/registro', [LibroController::class, 'create'])->name('libros.create');
Route::post('/registro', [LibroController::class, 'store'])->name('libros.store');
