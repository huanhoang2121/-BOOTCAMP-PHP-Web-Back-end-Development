<?php


Route::get('/', ['uses' => 'PostController@getIndex','as' => 'blog.index']);

Route::get('post/{id}', ['uses' => 'PostController@getPost','as' => 'blog.post']);

Route::get('about', function () {
    return view('other.about');
})->name('other.about');
Route::get('contact', function () {
    return view('other.contact');
})->name('other.contact');

Route::group(['prefix' => 'admin'], function () {
    //posts manager
    Route::get('/', ['uses' => 'PostController@getAdminIndex', 'as' => 'admin.posts.index']);
    Route::get('posts/create', ['uses' => 'PostController@getAdminCreate', 'as' => 'admin.posts.create']);
    Route::post('posts/create', ['uses' => 'PostController@postAdminCreate', 'as' => 'admin.posts.create']);
    Route::get('posts/edit/{id}', ['uses' => 'PostController@getAdminEdit', 'as' => 'admin.posts.edit']);
    Route::post('posts/edit', ['uses' => 'PostController@postAdminUpdate', 'as' => 'admin.posts.update']);
    Route::get('posts/delete/{id}', ['uses' => 'PostController@getAdminDelete', 'as' => 'admin.posts.delete']);
    Route::get('posts/search','PostController@search')->name('admin.posts.search');
    //category manager
    Route::get('categories', ['uses' => 'CategoryController@index', 'as' => 'admin.categories.index']);
    Route::get('categories/create', ['uses' => 'CategoryController@create', 'as' => 'admin.categories.create']);
    Route::post('categories/create', ['uses' => 'CategoryController@store', 'as' => 'admin.categories.store']);
    Route::get('categories/edit/{id}', ['uses' => 'CategoryController@edit', 'as' => 'admin.categories.edit']);
    Route::post('categories/edit', ['uses' => 'CategoryController@update', 'as' => 'admin.categories.update']);
    Route::get('categories/delete/{id}', ['uses' => 'CategoryController@delete', 'as' => 'admin.categories.delete']);


});
