<?php

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

Auth::routes();
Route::get('/funcionarios', function () {
    return view('funcionarios');
});
Route::view('/index', 'index');
Route::view('/headerorcamento', 'headerorcamento');
Route::view('/fazerorcamento', 'fazerorcamento');




Route::get('/', 'HomeController@index')->name('home');
Route::resource('/Funcionarios', 'FuncionariosController');
Route::resource('/Itens', 'ItensController');
