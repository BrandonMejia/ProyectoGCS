<?php

use App\Http\Controllers\CentroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/perfil', [PerfilController::class, 'perfil'])->name('perfil');

Route::middleware(['auth:sanctum', 'verified'])->get('/categoria', function () {
    return view('categoria');
})->name('categoria');

Route::middleware(['auth:sanctum', 'verified'])->get('/centros', function () {
    return view('centros.index');

})->name('centros.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/centros/elegir', [CentroController::class, 'elegir'])->name('centros.elegir');

Route::middleware(['auth:sanctum', 'verified'])->get('/centros/mostrar', [CentroController::class, 'mostrar'])->name('centros.mostrar');

