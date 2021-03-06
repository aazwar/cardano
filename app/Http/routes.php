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

/*Route::get('/', function() { return view('welcome'); });
Route::get('/login', function() { return view('login'); });
Route::get('/master/dashboard', function() { return view('core/master/top', ['page_title' => 'マスターTOP']); });*/

Route::get('/', 'CoreController@root');

Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');

Route::get('/dashboard', ['middleware' => 'auth', 'uses' => 'CoreController@getDashboard' ]);
Route::controller('customer', 'CustomerController');
Route::controller('master', 'MasterController');
Route::controller('', 'CoreController');
?>
