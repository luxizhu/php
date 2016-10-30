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

Route::get('/', function () {
    return view('welcome');
});

Route::get('users','UsersController@userIndex');

Route::group(['prefix'=>'xizhu','namespace'=>'Admin'],function(){
    Route::get('/','AdminHomeController@toIndex');
});

Route::get('admin','AdminHomeController@toIndex');





//Route::get('/','WelcomeController@index');
//
//Route::get('home', 'HomeController@index');
//
//Route::controllers([
//    'auth'=>'Auth\AuthController',
//    'password'=>'Auth\PasswordController',
//]);
//Route::get('users',function(){
//   return View::make('users');
//});