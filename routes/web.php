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
    Route::get('/', 'AdminController@dashboard');

    // admin users
    Route::get('/users', 'AdminController@users');
    Route::any('/users/create', 'AdminController@create_user');
});
