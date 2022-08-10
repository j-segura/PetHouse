<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'adoptar')->name('adoptar');
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/contactanos', 'contactanos')->name('contactanos');
Route::view('/perros', 'perros')->name('perros');

Route::view('/entrar', 'auth.entrar')->name('entrar');
Route::view('/registro', 'auth.registro')->name('registro');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
