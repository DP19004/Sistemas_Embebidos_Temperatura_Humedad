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

Route::get('/', function () {
    return view('welcome');
});
Route::get('gestionarCultivo', function () {
    return view('Cultivo\gestionarCultivo');
});

Route::resource('kitSensores','App\Http\Controllers\KitSensoresController');
Route::resource('alarmas', 'App\Http\Controllers\AlarmaController');
Route::resource('registros', 'App\Http\Controllers\RegistroController');
Route::resource('Zonas','App\Http\Controllers\ZonaController');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
