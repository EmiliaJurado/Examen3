<?php

use App\Http\Controllers\PersonasControl;
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

Route::get('/', [PersonasControl::class, 'index'])->name('personas.index');
Route::get('agregar', [PersonasControl::class, 'agregar'])->name('personas.agregar');
Route::post('registro', [PersonasControl::class, 'store'])->name('personas.store');
Route::get('actualizar/{personas}/actualizar', [PersonasControl::class, 'actualizar'])->name('personas.actualizar');
Route::put('index/{personas}', [PersonasControl::class, 'update'])->name('personas.update');
Route::delete('index/{personas}', [PersonasControl::class, 'eliminar'])->name('personas.eliminar');

