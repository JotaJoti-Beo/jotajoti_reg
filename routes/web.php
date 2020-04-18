<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PublicController@index')->name('public');


Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function (){
    Route::get('/overwatch', 'OverwatchController@index')->name('overwatch');

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

    Route::any('/places', 'PlacesController@index')->name('places');
    Route::get('/places/add', 'PlacesController@create')->name('add-places');
    Route::post('/places/store', 'PlacesController@store')->name('store-places');
    Route::get('/places/edit/{eid}', 'PlacesController@edit')->name('edit-places');
    Route::post('/places/update/{eid}', 'PlacesController@update')->name('update-places');
    Route::get('/places/destroy/{eid}', 'PlacesController@destroy')->name('destroy-places');

    Route::any('/activities', 'ActivityController@index')->name('activities');
    Route::get('/activities/add', 'ActivityController@create')->name('add-activities');
    Route::post('/activities/store', 'ActivityController@store')->name('store-activities');
    Route::get('/activities/edit/{eid}', 'ActivityController@edit')->name('edit-activities');
    Route::post('/activities/update/{eid}', 'ActivityController@update')->name('update-activities');
    Route::get('/activities/destroy/{eid}', 'ActivityController@destroy')->name('destroy-activities');

    Route::any('/news', 'NewsController@index')->name('news');
    Route::get('/news/add', 'NewsController@create')->name('add-news');
    Route::post('/news/store', 'NewsController@store')->name('store-news');
    Route::get('/news/edit/{eid}', 'NewsController@edit')->name('edit-news');
    Route::post('/news/update/{eid}', 'NewsController@update')->name('update-news');
    Route::get('/news/destroy/{eid}', 'NewsController@destroy')->name('destroy-news');
});
