<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AnimalController::class, 'index'])->name('animales.index');
Route::get('animal/{animal}', [AnimalController::class, 'show'])->name('animales.show');
Route::get('categoria/{categoria}', [AnimalController::class, 'categoria'])->name('animales.categoria');
Route::get('raza/{raza}', [AnimalController::class, 'raza'])->name('animales.raza');
Route::get('genero/{genero}', [AnimalController::class, 'genero'])->name('animales.genero');
Route::get('tamaño/{tamaño}', [AnimalController::class, 'tamaño'])->name('animales.tamaño');


Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/contactanos', 'contactanos')->name('contactanos');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
