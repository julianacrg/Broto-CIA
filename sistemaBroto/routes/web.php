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
Route::get('/cadastraArranjo', function () {
    return view('funcionarios');
});
Route::view('/home', 'index');
// Route::view('/index', 'index');
Route::resource('/Orcamentos', 'OrcamentosController'); // Aqui se passa o model e o controller
Route::get('/editarOrcamento', 'OrcamentosController@create');
Route::get('/cadastrarItens', 'ItensController@index');
Route::get('/cadastraArranjo', 'ArranjosController@index');
Route::get('/cadastrarFuncionario', 'FuncionariosController@index');







Route::get('/', 'HomeController@index')->name('home');
Route::resource('/Funcionarios', 'FuncionariosController');
Route::resource('/Itens', 'ItensController');
Route::resource('/Arranjo_Orcamentos', 'Arranjos_OrcamentosController');

// obs: linha de comando pra criar um controller novo: php artisan make:controller PhotoController --resource --model=Photo
