<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

Route::get('about', 'PagesController@about');

//Route::get('pedidos', 'PedidosController@index');
//Route::get('pedidos/create', 'PedidosController@create');
//Route::get('pedidos/{id}', 'PedidosController@show');
//
//Route::post('pedidos', 'PedidosController@store');

Route::resource('pedidos', 'PedidosController');

Route::resource('productos', 'ProductosController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);