<?php

/*use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});*/


use App\Http\Controllers\ConvertidorController;

Route::get('/convertir', [ConvertidorController::class, 'convertir']);
