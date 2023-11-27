<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\HorarioController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('pes', App\Http\Controllers\PeController::class);
Route::resource('docentes', App\Http\Controllers\DocenteController::class);
Route::resource('generaciones', App\Http\Controllers\GeneracioneController::class);
Route::resource('materias', App\Http\Controllers\MateriaController::class);
Route::resource('salones', App\Http\Controllers\SaloneController::class);
Route::resource('semestres', App\Http\Controllers\SemestreController::class);
Route::resource('horarios', App\Http\Controllers\HorarioController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
