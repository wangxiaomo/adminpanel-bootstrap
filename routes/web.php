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

Route::get('/', function() {
    return view('tinymce');
});

Route::group([
    'namespace' =>  'Admin',
    'prefix'    =>  'admin',
], function(){
    Route::get('/login',  'LoginController@index')->name('admin.login');
    Route::post('/login', 'LoginController@login');
    Route::get('/logout', 'LogoutController');
    // admin dashboard
    Route::get('/', 'DashboardController');

    // admin users
    Route::get('/users', 'AdminUserController@users');
    Route::any('/users/create', 'AdminUserController@create_user');
    Route::any('/users/{id}/edit', 'AdminUserController@edit_user');
    Route::post('/users/{id}/delete', 'AdminUserController@delete_user');

    // admin profile
    Route::any('/profile/edit', 'ProfileController@edit');
    Route::any('/profile/password', 'ProfileController@password');
});
