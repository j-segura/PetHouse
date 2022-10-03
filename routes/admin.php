<?php

use App\Http\Controllers\Admin\GeneroController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RazaController;
use App\Http\Controllers\Admin\TamañoController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

/* Todas las rutas de los generos */
Route::resource('generos', GeneroController::class)->names('admin.generos');

/* Todas las rutas de las razas */
Route::resource('razas', RazaController::class)->names('admin.razas');

/* Todos las rutas de los tamaños */
Route::resource('tamaños', TamañoController::class)->names('admin.tamaños');

/* Todas lar rutas de las categorias */
Route::resource('categorias', CategoriaController::class)->names('admin.categorias');