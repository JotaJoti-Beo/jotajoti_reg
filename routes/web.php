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

Route::get('/', 'Frontend\RegisterController@index')->name('public');

Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    Route::redirect('/', '/admin/overwatch', 301);
    Route::get('/overwatch', 'Backend\OverwatchController@index')->name('overwatch');

    Route::any('/users', 'Backend\UsersController@index')->name('users');
    Route::get('/users/add', 'Backend\UsersController@create')->name('add-users');
    Route::post('/users/store', 'Backend\UsersController@store')->name('store-users');
    Route::get('/users/edit/{uid}', 'Backend\UsersController@edit')->name('edit-users');
    Route::post('/users/update/{uid}', 'Backend\UsersController@update')->name('update-users');
    Route::get('/users/destroy/{uid}', 'Backend\UsersController@destroy')->name('destroy-users');

    Route::any('/participations', 'Backend\ParticipationsController@index')->name('participations');
    Route::get('/participations/add', 'Backend\ParticipationsController@create')->name('add-participations');
    Route::post('/participations/store', 'Backend\ParticipationsController@store')->name('store-participations');
    Route::post('participations/import', 'Backend\ParticipationsController@import')->name('import-participations');
    Route::get('/participations/edit/{pid}', 'Backend\ParticipationsController@edit')->name('edit-participations');
    Route::post('/participations/update/{pid}', 'Backend\ParticipationsController@update')->name('update-participations');
    Route::get('/participations/destroy/{pid}', 'Backend\ParticipationsController@destroy')->name('destroy-participations');

    Route::any('/groups', 'Backend\GroupsController@index')->name('groups');
    Route::get('/groups/add', 'Backend\GroupsController@create')->name('add-groups');
    Route::post('/groups/store', 'Backend\GroupsController@store')->name('store-groups');
    Route::get('/groups/edit/{gid}', 'Backend\GroupsController@edit')->name('edit-groups');
    Route::post('/groups/update/{gid}', 'Backend\GroupsController@update')->name('update-groups');
    Route::get('/groups/destroy/{gid}', 'Backend\GroupsController@destroy')->name('destroy-groups');

    Route::any('/places', 'Backend\PlacesController@index')->name('places');
    Route::get('/places/add', 'Backend\PlacesController@create')->name('add-places');
    Route::post('/places/store', 'Backend\PlacesController@store')->name('store-places');
    Route::get('/places/edit/{eid}', 'Backend\PlacesController@edit')->name('edit-places');
    Route::post('/places/update/{eid}', 'Backend\PlacesController@update')->name('update-places');
    Route::get('/places/destroy/{eid}', 'Backend\PlacesController@destroy')->name('destroy-places');

    Route::any('/activities', 'Backend\ActivityController@index')->name('activities');
    Route::get('/activities/add', 'Backend\ActivityController@create')->name('add-activities');
    Route::post('/activities/store', 'Backend\ActivityController@store')->name('store-activities');
    Route::get('/activities/edit/{eid}', 'Backend\ActivityController@edit')->name('edit-activities');
    Route::post('/activities/update/{eid}', 'Backend\ActivityController@update')->name('update-activities');
    Route::get('/activities/destroy/{eid}', 'Backend\ActivityController@destroy')->name('destroy-activities');

    Route::any('/news', 'Backend\NewsController@index')->name('news');
    Route::get('/news/add', 'Backend\NewsController@create')->name('add-news');
    Route::post('/news/store', 'Backend\NewsController@store')->name('store-news');
    Route::get('/news/edit/{eid}', 'Backend\NewsController@edit')->name('edit-news');
    Route::post('/news/update/{eid}', 'Backend\NewsController@update')->name('update-news');
    Route::get('/news/destroy/{eid}', 'Backend\NewsController@destroy')->name('destroy-news');

    Route::any('/admin', 'Backend\NewsController@index')->name('admin');
    Route::post('/admin/update/{eid}', 'Backend\NewsController@update')->name('update-admin');

    Route::resource('profile', 'Backend\ProfileController')->only('index', 'update');
});
