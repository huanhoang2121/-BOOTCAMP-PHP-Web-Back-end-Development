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
Route::get('/login', 'LoginController@showLogin')->name('show.login');
Route::post('/login', 'LoginController@login')->name('user.login');
Route::get('/blog', 'BlogController@showBlog')->name('show.blog');
Route::get('/logout', 'LoginController@logout')->name('user.logout');

Route::get('products', 'ProductController@index')->name('index');
Route::get('products/{id}', 'ProductController@show')->name('show');

Route::get('cart', 'ProductController@cart')->name('cart');
Route::get('add-to-cart/{id}', 'ProductController@addToCart');
Route::get('update-cart/{id}', 'ProductController@update')->name('update-cart');
Route::get('remove-from-cart/{id}', 'ProductController@remove')->name('remove-from-cart');
