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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['middleware' => ['auth']], function (){
	Route::get('/home', 'HomeController@index')->name('home');

	Route::any('/participations', 'ParticipationsController@index')->name('participations');
	Route::get('/participations/add', 'ParticipationsController@create')->name('add-participations');
	Route::post('/participations/store', 'ParticipationsController@store')->name('store-participations');
	Route::post('participations/import', 'ParticipationsController@import')->name('import-participations');
	Route::get('/participations/edit/{pid}', 'ParticipationsController@edit')->name('edit-participations');
	Route::post('/participations/update/{pid}', 'ParticipationsController@update')->name('update-participations');
	Route::get('/participations/destroy/{pid}', 'ParticipationsController@destroy')->name('destroy-participations');

	Route::any('/users', 'UsersController@index')->name('users');
	Route::get('/users/add', 'UsersController@create')->name('add-users');
	Route::post('/users/store', 'UsersController@store')->name('store-users');
	Route::get('/users/edit/{uid}', 'UsersController@edit')->name('edit-users');
	Route::post('/users/update/{uid}', 'UsersController@update')->name('update-users');
	Route::get('/users/destroy/{uid}', 'UsersController@destroy')->name('destroy-users');

	Route::any('/groups', 'GroupsController@index')->name('groups');
	Route::get('/groups/add', 'GroupsController@create')->name('add-groups');
	Route::post('/groups/store', 'GroupsController@store')->name('store-groups');
	Route::get('/groups/edit/{gid}', 'GroupsController@edit')->name('edit-groups');
	Route::post('/groups/update/{gid}', 'GroupsController@update')->name('update-groups');
	Route::get('/groups/destroy/{gid}', 'GroupsController@destroy')->name('destroy-groups');


});
