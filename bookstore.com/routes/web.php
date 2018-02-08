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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => '/admin', 'as' => 'admin.'], function(){
  Route::get('/user', 'UserController@index')->name('user');
  Route::get('/user/create', 'UserController@create')->name('user.create');
  Route::post('/user', 'UserController@store')->name('user.store');
  Route::get('/user/{id}', 'UserController@show')->name('user.show');
  Route::put('/user/{id}', 'UserController@update')->name('user.update');
  Route::delete('/user/{id}', 'UserController@delete')->name('user.delete');
});
