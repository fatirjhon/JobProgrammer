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
})->name('root');

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

Route::group(['prefix'=>'admin'], function(){

	Route::resource('olah', 'AdminController');
	Route::get('terima/{user_id}','AdminController@terima')->name('olah.terima');
	Route::get('tolak/{user_id}','AdminController@tolak')->name('olah.tolak');
	Route::post('olah/hapus','AdminController@destroy')->name('olah.destroy');

});
