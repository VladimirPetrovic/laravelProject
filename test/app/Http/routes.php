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

Route::get('/', 'HomeController@index');

Route::get('home', 'ArticleController@index');


Route::resource('article', 'ArticleController@index');

Route::get('article/create', ['as' =>'article.create', 'uses'=>'ArticleController@create']);

Route::post('article/store', ['as' =>'article.store', 'uses'=>'ArticleController@store']);

Route::delete('article/{article}/destroy', ['as' =>'article.destroy', 'uses'=>'ArticleController@destroy']);

Route::get('article/{article}/edit', ['as' =>'article.edit', 'uses'=>'ArticleController@edit']);

Route::put('article/{article}', ['as' =>'article.update', 'uses'=>'ArticleController@update']);



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);