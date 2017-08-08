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
    return redirect('/admin');
});

Route::get('/login',  'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LogoutController');

Route::group([
    'namespace' =>  'Admin',
    'prefix'    =>  'admin',
], function(){
    // admin dashboard
    Route::get('/', 'DashboardController');

    // admin users
    Route::get('/users', 'AdminUserController@users');
    Route::any('/users/create', 'AdminUserController@create_user');
    Route::any('/users/{id}/edit', 'AdminUserController@edit_user');
    Route::post('/users/{id}/delete', 'AdminUserController@delete_user');
});
