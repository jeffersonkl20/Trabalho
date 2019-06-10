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

Route::get('/', function () {
    return view('home');
});

Route::get('/tare','TarefaController@index');
Route::post('/tare','TarefaController@adicionar');

Route::get('/clie','ClienteController@index');
Route::post('/clie','ClienteController@adicionar');

Route::get('/tipu','TipoTarefaController@index');
Route::post('/tipu','TipoTarefaController@adicionar');

Route::get('/home', function () {
    return view('home');

});





       