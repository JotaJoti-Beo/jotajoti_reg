<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\GroupsController;
use App\Http\Controllers\Backend\OverwatchController;
use App\Http\Controllers\Backend\ParticipationsController;
use App\Http\Controllers\Backend\PlacesController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\UsersController;
use App\Http\Controllers\Frontend\RegisterController;
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

Route::get('/', [RegisterController::class, 'index'])->name('home');

Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function(){
    Route::redirect('/', '/admin/overwatch', 301);
    Route::get('/overwatch', [OverwatchController::class, 'index'])->name('home');

    Route::any('/users', [UsersController::class, 'index'])->name('users');
    Route::get('/users/add', [UsersController::class, 'create'])->name('add-users');
    Route::post('/users/store', [UsersController::class, 'store'])->name('store-users');
    Route::get('/users/edit/{uid}', [UsersController::class, 'edit'])->name('edit-users');
    Route::post('/users/update/{uid}', [UsersController::class, 'update'])->name('update-users');
    Route::get('/users/destroy/{uid}', [UsersController::class, 'destroy'])->name('destroy-users');

    Route::any('/participations', [ParticipationsController::class, 'index'])->name('participations');
    Route::get('/participations/add', [ParticipationsController::class, 'create'])->name('add-participations');
    Route::post('/participations/store', [ParticipationsController::class, 'store'])->name('store-participations');
    Route::get('/participations/edit/{pid}', [ParticipationsController::class, 'edit'])->name('edit-participations');
    Route::post('/participations/update/{pid}', [ParticipationsController::class, 'update'])->name('update-participations');
    Route::get('/participations/destroy/{pid}', [ParticipationsController::class, 'destroy'])->name('destroy-participations');

    Route::any('/groups', [GroupsController::class, 'index'])->name('groups');
    Route::get('/groups/add', [GroupsController::class, 'create'])->name('add-groups');
    Route::post('/groups/store', [GroupsController::class, 'store'])->name('store-groups');
    Route::get('/groups/edit/{gid}', [GroupsController::class, 'edit'])->name('edit-groups');
    Route::post('/groups/update/{gid}', [GroupsController::class, 'update'])->name('update-groups');
    Route::get('/groups/destroy/{gid}', [GroupsController::class, 'destroy'])->name('destroy-groups');

    Route::any('/places', [PlacesController::class, 'index'])->name('places');
    Route::get('/places/add', [PlacesController::class, 'create'])->name('add-places');
    Route::post('/places/store', [PlacesController::class, 'store'])->name('store-places');
    Route::get('/places/edit/{eid}', [PlacesController::class, 'edit'])->name('edit-places');
    Route::post('/places/update/{eid}', [PlacesController::class, 'update'])->name('update-places');
    Route::get('/places/destroy/{eid}', [PlacesController::class, 'destroy'])->name('destroy-places');

    Route::resource('admin', AdminController::class)->only('index', 'update');

    Route::resource('profile', ProfileController::class)->only('index', 'update');
});
