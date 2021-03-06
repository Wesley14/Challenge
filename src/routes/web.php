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
    return view('auth.login');
});

Route::resource('users', 'App\Http\Controllers\UserController');
Route::resource('usuarios', 'App\Http\Controllers\UsuarioController');
Route::resource('folios', 'App\Http\Controllers\FolioController');
Route::resource('comentarios', 'App\Http\Controllers\ComentarioController');
Route::resource('comentarios/{id}', 'App\Http\Controllers\ComentarioController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
