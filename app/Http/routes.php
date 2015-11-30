<?php

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/', 'HomeController@index');

Route::get('/home', function () {
    return view('home');
});



Route::get('Requerimento/ListarAprovados', 'RequerimentoController@listarAprovados');
Route::get('Requerimento/ListarCancelados', 'RequerimentoController@listarCancelados');

Route::get('Requerimento/Aprovar/{id}', [
    'as' => 'Requerimento.Aprovar',
    'uses' => 'RequerimentoController@aprovar'
]);

Route::get('Requerimento/Cancelar/{id}', [
    'as' => 'Requerimento.Cancelar',
    'uses' => 'RequerimentoController@cancelar'
]);

Route::resource('Requerimento','RequerimentoController');
