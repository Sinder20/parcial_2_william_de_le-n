<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;


//de esta forma nos genera todas las rutas
Route::resource('estudiante',App\Http\Controllers\EstudianteController::class);

//Route::resource('estudiante', EstudianteController::class);