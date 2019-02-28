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


Route::middleware(['auth'])->group(function(){

Route::view('/home', 'index');
Route::resource('/Orcamentos', 'OrcamentosController')->middleware('can:teste'); // Aqui se passa o model e o controller
Route::get('/listarOrcamento', 'OrcamentosController@create');
Route::get('/editarOrcamento/{id}', 'OrcamentosController@edit');
Route::get('/cadastrarItens', 'ItensController@index');
Route::get('/cadastraArranjo', 'ArranjosController@index');
Route::get('/cadastrarFuncionario', 'FuncionariosController@index');
Route::view('/cadastrarFornecedor', 'cadastrarFornecedor');
Route::view('/cadastrarItensArranjos', 'cadastrarItensArranjos');
Route::get('/', 'HomeController@index')->name('home');
Route::resource('/Atividades', 'AtividadesController');
Route::resource('/Funcionarios', 'FuncionariosController');
Route::resource('/Itens', 'ItensController');
Route::resource('/Arranjos', 'ArranjosController');
Route::resource('/Fornecedores', 'FornecedoresController');
Route::resource('/ItensArranjos', 'ItensArranjosController');
Route::resource('/Orcamentos', 'OrcamentosController');
Route::resource('/ArranjosOrcamentos', 'ArranjosOrcamentosController');
Route::resource('/ItensOrcamentos', 'ItensOrcamentosController');
Route::resource('/Igrejas', 'IgrejaController');

});

// obs: linha de comando pra criar um controller novo: php artisan make:controller PhotoController --resource --model=Photo
