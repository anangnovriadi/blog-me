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

// Front
Route::get('/', 'PostController@view');  
Route::post('/load', 'PostController@loadMore');

Route::get('/detail', function () {
    return view('detail');
});


// Admin
Route::prefix('admin')->group(function() {
    Auth::routes();
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/logout', 'Auth\LogoutController@logout')->name('logout');
    Route::get('/dashboard', 'Admin\DashboardController@view')->name('dashboard');

    Route::get('/post/create', 'Admin\PostController@create')->name('post.create');
    Route::post('/post/create', 'Admin\PostController@store')->name('post.store');
    Route::get('/post', 'Admin\PostController@view')->name('post.index');
    Route::get('/post/edit/{id}', 'Admin\PostController@edit')->name('post.edit');
    Route::patch('/post/edit/{id}', 'Admin\PostController@update')->name('post.update');
    Route::delete('/post/delete/{id}', 'Admin\PostController@destroy')->name('post.destroy');

    Route::get('/category', 'Admin\CategoryController@view')->name('category.index');
    Route::post('/category/create', 'Admin\CategoryController@store')->name('category.store');
});
