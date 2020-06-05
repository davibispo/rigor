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

Route::resource('contato', 'ContatoController');
Route::resource('noticias', 'NoticiasController');
Route::resource('servicos', 'ServicosController');
Route::resource('empresa', 'EmpresaController');
Route::resource('home', 'HomeController');

Route::get('/', function () {
    return view('welcome');
});
