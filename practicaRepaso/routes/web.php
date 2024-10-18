<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConvertidorController;

Route::get('/convertir', [ConvertidorController::class, 'convertir']);

Route::get('/', [ConvertidorController::class, 'inicio'])->name('rutainicio');
Route::get('/repaso1', [ConvertidorController::class, 'repaso1'])->name('rutarepaso');