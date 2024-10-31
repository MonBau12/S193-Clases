<?php
use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [LibroController::class, 'index'])->name('principal');
Route::get('/registro', [LibroController::class, 'create'])->name('libros.create');
Route::get('/biblioteca', [LibroController::class, 'store'])->name('libros.store');

