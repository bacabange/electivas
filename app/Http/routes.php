<?php

Route::get('/', 'HomeController@index');
Route::get('/escritorio', ['as' => 'escritorio', 'uses' => 'PanelController@index']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
