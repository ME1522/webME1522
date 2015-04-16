<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@hello');

Route::group(array('before' => 'guest'), function()
{
	Route::get('/user/create', 'UserController@getCreate');
	Route::get('/user/login', 'UserController@getLogin');

	Route::group(array(), function()
	{
		Route::post('user/create', 'UserController@postCreate');
		Route::post('user/login', 'UserController@postLogin');
	});
});
Route::get('/galeri',function(){
	return View::make('Bildgalleri');
});