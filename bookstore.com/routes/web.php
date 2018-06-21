<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/admin')->namespace('Backend')->name('admin.')->group(/*['prefix' => '/admin', 'as' => 'admin.'],*/ function(){
  //User
  Route::get('/user', 'UserController@index')->name('user');
  Route::get('/user/create', 'UserController@create')->name('user.create');
  Route::post('/user', 'UserController@store')->name('user.store');
  Route::get('/user/{id}', 'UserController@show')->name('user.show');
  Route::put('/user/{id}', 'UserController@update')->name('user.update');
  Route::delete('/user/{id}', 'UserController@delete')->name('user.delete');

  //Category
  Route::get('/category', 'CategoryController@index')->name('category');
  Route::get('/category/create', 'CategoryController@create')->name('category.create');
  Route::post('/category', 'CategoryController@store')->name('category.store');
  Route::get('/category/{id}', 'CategoryController@show')->name('category.show');
  Route::put('/category/{id}', 'CategoryController@update')->name('category.update');
  Route::delete('/category/{id}', 'CategoryController@delete')->name('category.delete');

  //Product
  Route::get('/product', 'ProductController@index')->name('product');
  Route::get('/product/create', 'ProductController@create')->name('product.create');
  Route::post('/product', 'ProductController@store')->name('product.store');
  Route::get('/product/{id}', 'ProductController@show')->name('product.show');
  Route::put('/product/{id}', 'ProductController@update')->name('product.update');
  Route::delete('/product/{id}', 'ProductController@delete')->name('product.delete');
  Route::patch('/product/{id}', 'ProductController@setFeaturedProduct')->name('product.setFeaturedProduct');

  //Order
  Route::get('/order', 'OrderController@index')->name('order');
  Route::get('/order/{id}', 'OrderController@show')->name('order.show');
  Route::delete('/order/{id}', 'OrderController@delete')->name('order.delete');

});

Route::name('frontend.')->namespace('Frontend')->group(/*['prefix' => '/admin', 'as' => 'admin.'],*/ function(){
  Route::get('/','HomeController@index')->name('home.index');
  Route::get("/product/{slug}-{id}.html", 'HomeController@show')
          ->name('home.show')
          ->where([
            'slug' => '[a-z-]+',
            'id' => '[0-9]+'
          ]);
  Route::post("/product/{slug}-{id}.html", 'HomeController@comment')
         ->name('home.comment')
         ->where([
            'slug' => '[a-z-]+',
            'id' => '[0-9]+'
          ]);

  Route::get('/cart','CartController@index')->name('cart.index');
  Route::post('/cart','CartController@updateCart')->name('cart.updateCart');
  Route::get('/cart/{id}/delete','CartController@deleteCart')->name('cart.deleteCart');
  Route::get('/cart/delete','CartController@deleteAll')->name('cart.deleteAll');

  Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
  Route::post('/checkout', 'CheckoutController@placeOrder')->name('checkout.placeOrder');
  Route::get('/thankyou', 'CheckoutController@thankYou')->name('checkout.thankYou');

});

Route::prefix('/api')->name('api.')->namespace('Frontend')->group(function(){
  Route::get('/cart','CartController@getCart')->name('cart.getCart');
  Route::post('/cart','CartController@addToCart')->name('cart.addToCart');
  
});