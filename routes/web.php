<?php

use App\Http\Controllers\SalonController;
use App\Http\Controllers\UniversidadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/universidad', function () {
    return view('universidad.index');
});

Route::get('universidad/create', [UniversidadController::class,'create']);
*/

Route::resource('universidad', UniversidadController::class);
Route::resource('salon', SalonController::class);

