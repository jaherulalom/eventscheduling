<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


// Route::group(['prefix' => 'api/v1'], function()
// {
//     Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
//     Route::post('authenticate', 'AuthenticateController@authenticate');
//     Route::get('authenticate/user', 'AuthenticateController@getAuthenticatedUser');
// });

Route::get('/', 'MainController@index');



Route::get('/admin', 'AdminController@index');
Route::get('/admin/customers', 'BookingController@showCustomers');
Route::get('/admin/staff', 'BookingController@showStaff');

Route::get('bookings/create', 'BookingController@create');
// 
Route::resource('bookings', 'BookingController');

Route::group(['prefix' => 'admin'], function(){
		Route::resource('users', 'UserController');
		Route::resource('bookings', 'BookingController');
		Route::resource('services', 'ServicesController');
});


Route::get('myform/ajax/{id}',array('as'=>'myform.ajax','uses'=>'BookingController@myformAjax'));
Route::get('serviceTime/ajax/{id}',array('as'=>'myform.ajax','uses'=>'BookingController@serviceTime'));