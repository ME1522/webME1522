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

Route::get('/', array('uses' => 'HomeController@hello', 'as' => 'home'));
Route::group(array('before' => 'guest'), function()
{
	Route::get('user/create', array('uses' => 'UserController@getCreate', 'as' => 'getCreate'));
	Route::get('user/login', 'UserController@getLogin');
	Route::group(array('before' => 'csrf'), function()
	{
		Route::post('user/create', array('uses' => 'UserController@postCreate', 'as' => 'postCreate'));
		Route::post('user/login', 'UserController@postLogin');
	});
});
Route::get('/galeri',function(){
	return View::make('Bildgalleri');
});