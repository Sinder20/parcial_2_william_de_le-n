<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


//de esta forma nos genera todas las rutas
Route::resource('customer',App\Http\Controllers\CustomerController::class);

//Route::resource('customer', CustomerController::class);