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


Auth::routes();

//Route::post('login', 'Auth\LoginController@doLogin')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function () {
  
   Route::get('/', 'DashBoardController@index' );

   Route::post('profile', 'UserProfileController@update_avatar' );

   Route::get('/home', 'HomeController@index')->name('home');

   Route::get('/profile', 'UserProfileController@profile')->name('user');

});
