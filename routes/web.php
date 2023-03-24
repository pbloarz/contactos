<?php

use App\Http\Controllers\Controller;
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

Route::controller(controller::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('crear','create')->name('usuarios.crear');
    Route::post('/store', 'store')->name('usuario.store');
});