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

Route::get('/','HomeController@index');

Route::get('home', ['middleware'=>'auth','uses' => 'HomeController@logedIn']);

Route::get('userinfo/{id}',['middlewere'=>'auth','uses'=>'usersController@userInfo']);

Route::get('userinfo/{id}/edituser', ['middlewere'=>'auth', 'uses'=>'usersController@userEdit']);
Route::post('userinfo/{id}/edituser',['middlewere'=>'auth', 'uses' => 'usersController@update']);


Route::get('userinfo/userinfo/{id}',function(){
   return redirect('../home');
});

Route::resorce('home/queue','QueueController');





// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');