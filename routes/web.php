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

Route::get('/','HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/tasks','TaskController');



Route::group(['prefix'=>'produtos','where'=>['id'=>'[0-9]+']], function(){
    Route::get('',['as'=>'produtos','uses'=>'ProdutoController@index']);
    Route::get('create',['as'=>'produtos.create','uses'=>'ProdutoController@create']);
    Route::post('store',['as'=>'produtos.store','uses'=>'ProdutoController@store']);
    Route::get('{id}/destroy',['as'=>'produtos.destroy', 'uses'=>'ProdutoController@destroy']);
    Route::get('{id}/edit',['as'=>'produtos.edit','uses'=>'ProdutoController@edit']);
    Route::put('{id}/update',['as'=>'produtos.update','uses'=>'ProdutoController@update']);
});