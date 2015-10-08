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
Route::controller('', 'CoreController');
Route::controller('customer', 'CustomerController');
?>