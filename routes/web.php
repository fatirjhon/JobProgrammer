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

Route::get('jobprogrammer', function () {
    return view('static.home');
});

Route::get('jobprogrammer', 'StaticsController@home')->name('home');

Route::get('register', 'UsersController@signup')->name('signup');

Route::post('register', 'UsersController@signup_store')->name('signup.store');

Route::get('login', 'SessionsController@login')->name('login');

Route::post('login', 'SessionsController@login_store')->name('login.store');

Route::get('logout', 'SessionsController@logout')->name('logout');

Route::resource('DataUsers','DataUsersController');

// Route::resource('cv', 'SipiController');
