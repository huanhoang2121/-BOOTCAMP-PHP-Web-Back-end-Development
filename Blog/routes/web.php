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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'PageController@index')->name('home');
Route::get('user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::get('/', 'PageController@getIndex')->name('index');
Route::get('post/{id}', 'PageController@getPostDetail')->name('postDetail');
Route::get('category/{id}', 'PageController@getPostCategory')->name('postCategory');
Route::get('user/{id}', 'PageController@getPostUser')->name('postUser');
Route::get('/search', 'PageController@search')->name('postSearch');

Route::get('about', 'PageController@about')->name('other.about');
Route::get('contact', 'PageController@contact')->name('other.contact');


Route::post('comment/{id}', 'CommentController@postComment')->name('postComment');
Route::get('comment/delete/{idPost}', 'CommentController@deletePostComment')->name('deletePostComment');

Route::post('/like','CommentController@postLikePost')->name('like');

Route::prefix('admin')->group(function () {
    Route::get('/home', 'AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    //reset password
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

    //posts manager
    Route::get('/posts', 'PostController@getAdminIndex')->name('admin.posts');
    Route::get('posts/create', 'PostController@getAdminCreate')->name('admin.posts.create');
    Route::post('posts/create', 'PostController@postAdminCreate')->name('admin.posts.create');
    Route::get('posts/edit/{id}', 'PostController@getAdminEdit')->name('admin.posts.edit');
    Route::post('posts/edit', 'PostController@postAdminUpdate')->name('admin.posts.update');
    Route::get('posts/delete/{id}', 'PostController@getAdminDelete')->name('admin.posts.delete');
    Route::get('posts/search', 'PostController@search')->name('admin.posts.search');
    //category manager
    Route::get('categories', 'CategoryController@getCategoryIndex')->name('admin.categories');
    Route::get('categories/create', 'CategoryController@getCategoryCreate')->name('admin.categories.create');
    Route::post('categories/create', 'CategoryController@postCategoryCreate')->name('admin.categories.store');
    Route::get('categories/edit/{id}', 'CategoryController@getCategoryEdit')->name('admin.categories.edit');
    Route::post('categories/edit', 'CategoryController@postCategoryEdit')->name('admin.categories.update');
    Route::get('categories/delete/{id}', 'CategoryController@getCategoryDelete')->name('admin.categories.delete');
});

