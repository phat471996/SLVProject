<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// middleware('auth:api')->
Route::get('/user', 'UserController@getAllUser')->name('getAllUser');

Route::post('/user', 'UserController@createUser')->name('createUser');
