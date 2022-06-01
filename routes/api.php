<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;



//CREAMOS LA RUTA API
Route::post('/contacto',[PageController::class,'apiMensaje'])->name('api.mensaje');
