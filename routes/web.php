<?php

use App\Http\Controllers\NivelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::resource('kitSensores', 'App\Http\Controllers\KitSensoresController');
Route::resource('alarmas', 'App\Http\Controllers\AlarmaController');
Route::resource('registros', 'App\Http\Controllers\RegistroController');
Route::resource('Zonas', 'App\Http\Controllers\ZonaController');
Route::resource('cultivos', 'App\Http\Controllers\CultivoController');

Route::get('/dashboard', [App\Http\Controllers\NivelController::class, 'index'])->name('home');
Route::get('/viewer', [NivelController::class, 'getViewer']);
