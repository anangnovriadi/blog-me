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
});
