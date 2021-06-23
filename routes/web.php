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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/paises/brasil', [App\Http\Controllers\BrasilController::class, 'index']);
Route::get('/paises/argentina', [App\Http\Controllers\ArgentinaController::class, 'index']);
Route::get('/paises/ecuador', [App\Http\Controllers\EcuadorController::class, 'index']);
Route::get('/paises/uruguay', [App\Http\Controllers\UruguayController::class, 'index']);
Route::get('/paises/colombia', [App\Http\Controllers\ColombiaController::class, 'index']);
Route::get('/paises/paraguay', [App\Http\Controllers\ParaguayController::class, 'index']);
Route::get('/paises/chile', [App\Http\Controllers\ChileController::class, 'index']);
Route::get('/paises/bolivia', [App\Http\Controllers\BoliviaController::class, 'index']);
Route::get('/paises/venezuela', [App\Http\Controllers\VenezuelaController::class, 'index']);
Route::get('/paises/peru', [App\Http\Controllers\PeruController::class, 'index']);
Route::resource('posiciones', 'App\Http\Controllers\PosicionController');
Route::resource('partidos','App\Http\Controllers\PartidoController');