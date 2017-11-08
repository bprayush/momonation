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
    return view('index');
})->name('homepage');

Route::get('/app', 'HomeController@index')->name('app.index');

Route::get('/appreciation', 'AppreciationsController@create')->name('appreciation');
Route::post('/appreciate', 'AppreciationsController@store')->name('appreciate');

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'middleware' => 'admin'], function(){

 	Route::get('dashboard', 'HomeController@index')->name('dashboard');

 	Route::get('/users', 'UsersController@index')->name('users');
 	Route::get('/users/toapprove', 'UsersController@toApprove')->name('users.toApprove');
 	Route::get('/user/approve/{id}', 'UsersController@approve')->name('user.approve');
 	Route::get('/user/disapprove/{id}', 'UsersController@disapprove')->name('user.disapprove');
 	Route::get('/user/delete/{id}', 'UsersController@destroy')->name('user.delete');

 	Route::get('/user/superviser/make/{id}', 'UsersController@makeSupervisor')->name('make.supervisor');
 	Route::get('/user/supervisor/revoke/{id}', 'UsersController@revokeSupervisor')->name('revoke.supervisor');

});


	
