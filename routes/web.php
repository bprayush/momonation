<?php

Route::get('/', function () {
    return view('index');
})->name('homepage');

Route::get('/app', 'HomeController@index')->name('app.index');

Route::get('/appreciation', 'AppreciationsController@create')->name('appreciation');
Route::post('/appreciate', 'AppreciationsController@store')->name('appreciate');
Route::get('/store', 'StoreController@index')->name('store');
Route::get('/momo-feed', 'FeedsController@index')->name('momo-feed');
Route::get('/checkout', 'StoreController@checkout')->name('checkout');
Route::get('/check/khalti', 'TestController@test');
Route::post('/verify/', 'TestController@verify')->name('verify.khalti');

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


Route::get('/test', function(){
	return view('app.dashboard');
});

	
