<?php

use App\Http\Controllers\Admin\GeneroController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

/* Todas las rutas de los generos */
Route::resource('generos', GeneroController::class)->names('admin.generos');