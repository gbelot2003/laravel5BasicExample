<?php

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('about', 'PagesController@about');

Route::resource('articles', 'ArticlesController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
