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

Route::get('/english', function () {
    return view('english');
});

Route::get('/selesai', function () {
    return view('selesai');
});

Route::group(['namespace' => 'Admin'], function(){
	Route::get('admin/home', 'HomeController@index')->name('admin.home');
	// Admin Auth Routes
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-login', 'Auth\LoginController@login');
	// Users Role
	Route::resource('admin/users', 'UsersController');
	// Quest Role
	Route::resource('admin/quest', 'QuestController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
