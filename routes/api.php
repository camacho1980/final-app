<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// IMPORTAMOS PageController
use App\Http\Controllers\PageController;


//CREAMOS LA RUTA API
Route::post('/contacto',[PageController::class,'storeApiMensaje'])->name('api.mensaje.store');
