<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['uses'=>'loginController@signupView','as'=>'signup']);
Route::post('/', ['uses'=>'loginController@adduser','as'=>'signup']);

Route::get('/login', ['uses'=>'loginController@loginView','as'=>'login']);
Route::post('/login', ['uses'=>'loginController@loginuser','as'=>'login']);

