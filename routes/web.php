<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonaController;

Route::get('/', HomeController::class);
Route::get('personas', [PersonaController::class, 'index']);
Route::get('personas/crear', [PersonaController::class, 'crear']);
Route::get('personas/{id}', [PersonaController::class, 'mostrar']);
