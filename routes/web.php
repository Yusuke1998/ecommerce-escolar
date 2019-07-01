<?php

Route::get('/', 'HomeController@index');
Route::get('/home','HomeController@index')->name('home');

Auth::routes();

route::group(['prefix'	=>	'administracion', 'middleware'	=>	'auth'],function(){

	// Pagina administrativa
	Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

	// Productos
	Route::resource('/productos','ProductController');
	Route::post('/productos/actualizar','ProductController@update')->name('productos.actualizar');

	// Categorias
	Route::resource('/categorias','CategoryController');
	Route::post('/categorias/actualizar','CategoryController@update')->name('categorias.actualizar');
});

