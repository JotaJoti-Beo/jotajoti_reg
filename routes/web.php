<?php

use App\Http\Controllers\Backend\ConfigController;
use App\Http\Controllers\Backend\GroupsController;
use App\Http\Controllers\Backend\GuardiansController;
use App\Http\Controllers\Backend\OverwatchController;
use App\Http\Controllers\Backend\ParticipationsController;
use App\Http\Controllers\Backend\PlacesController;
use App\Http\Controllers\Backend\PrintController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\UsersController;
use App\Http\Controllers\Frontend\GuardianController;
use App\Http\Controllers\Frontend\ParticipantController;
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
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register/guardian', [RegisterController::class, 'registerGuardian'])->name('front-register-guardian');
Route::get('/register/guardian/completed', [RegisterController::class, 'completedGuardian'])->name('completed-parent');

Route::get('/guardian/show/{uuid}', [GuardianController::class, 'show'])->name('front-show-guardian');
Route::get('/guardian/edit/{uuid}', [GuardianController::class, 'edit'])->name('front-edit-guardian');
Route::post('/guardian/update/{uuid}', [GuardianController::class, 'update'])->name('front-update-guardian');

Route::get('/participant/add', [ParticipantController::class, 'create'])->name('front-add-participant');
Route::post('/participant/store', [ParticipantController::class, 'store'])->name('front-store-participant');
Route::get('/participant/edit/{pid}', [ParticipantController::class, 'edit'])->name('front-edit-participant');
Route::post('/participant/update/{pid}', [ParticipantController::class, 'update'])->name('front-update-participant');
Route::get('/participant/destroy/{pid}', [ParticipantController::class, 'destroy'])->name('front-destroy-participant');

Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function(){
    Route::redirect('/', '/admin/overwatch', 301);

    Route::get('/overwatch', [OverwatchController::class, 'index'])->name('overwatch');

    Route::any('/users', [UsersController::class, 'index'])->name('users');
    Route::get('/users/add', [UsersController::class, 'create'])->name('add-users');
    Route::post('/users/store', [UsersController::class, 'store'])->name('store-users');
    Route::get('/users/edit/{uid}', [UsersController::class, 'edit'])->name('edit-users');
    Route::post('/users/update/{uid}', [UsersController::class, 'update'])->name('update-users');
    Route::get('/users/destroy/{uid}', [UsersController::class, 'destroy'])->name('destroy-users');

    Route::any('/guardians', [GuardiansController::class, 'index'])->name('guardians');
    Route::get('/guardians/add', [GuardiansController::class, 'create'])->name('add-guardians');
    Route::post('/guardians/store', [GuardiansController::class, 'store'])->name('store-guardians');
    Route::get('/guardians/edit/{pid}', [GuardiansController::class, 'edit'])->name('edit-guardians');
    Route::post('/guardians/update/{pid}', [GuardiansController::class, 'update'])->name('update-guardians');
    Route::get('/guardians/destroy/{pid}', [GuardiansController::class, 'destroy'])->name('destroy-guardians');

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

    Route::resource('config', ConfigController::class)->only('index','edit', 'update');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/update', [ProfileController::class, 'update'])->name('update-profile');

    Route::get('/print/pdf', [PrintController::class, 'pdf'])->name('print-pdf');
    Route::get('/print/excel', [PrintController::class, 'excel'])->name('print-excel');
});

