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

Route::get('/produtos/novo', 'App\Http\Controllers\ProdutosController@create');
Route::post('produtos/novo', 'App\Http\Controllers\ProdutosController@store')->name('registrar_produto');

Route::get('/produtos/ver/{id}', 'App\Http\Controllers\ProdutosController@show');

Route::get('/produtos/editar/{id}', 'App\Http\Controllers\ProdutosController@edit');
Route::post('/produtos/editar/{id}', 'App\Http\Controllers\ProdutosController@update')->name('alterar_produto');

Route::get('/produtos/excluir/{id}', 'App\Http\Controllers\ProdutosController@delete');
Route::post('/produtos/excluir/{id}', 'App\Http\Controllers\ProdutosController@destroy')->name('excluir_produto');