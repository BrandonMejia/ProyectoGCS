<?php

use App\Http\Controllers\CentroController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
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

Route::get('/', HomeController::class);

Route::get('users', [UserController::class, 'index'])->name('user.index');

Route::get('users/profile', [UserController::class,'perfil'])->name('user.perfil');

Route::get('users/categoria', [UserController::class, 'categoria'])->name('user.categoria');

Route::get('centro', [CentroController::class, 'main'])->name('centro.main');

Route::post('login', [LoginController::class,'login'])->name('login');

Route::post('logout', [LoginController::class,'logout'])->name('logout');

Route::get('centro/seleccionar', [CentroController::class, 'seleccionar'])->name('centro.seleccionar');

Route::get('centro/mostrar', [CentroController::class, 'mostrar'])->name('centro.mostrar');

Route::put('centro/confirmar', [CentroController::class, 'actualizar'])->name('centro.actualizar');

Route::get('centro/confirmar', [CentroController::class, 'confirmar'])->name('centro.confirmar');