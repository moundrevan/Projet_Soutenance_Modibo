<?php

use Illuminate\Support\Facades\Auth;
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

//Login
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

//Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Les Resources
Route::resource('users', 'App\Http\Controllers\Auth\UserController');
Route::resource('profile', 'App\Http\Controllers\Auth\ProfileController');
Route::resource('departements', 'App\Http\Controllers\Ecole\DepartementController');
Route::resource('classes', 'App\Http\Controllers\Ecole\ClasseController');
Route::resource('matieres', 'App\Http\Controllers\Ecole\MatiereController');
Route::resource('modules', 'App\Http\Controllers\Ecole\ModuleController');
Route::resource('cycles', 'App\Http\Controllers\Ecole\CycleController');
Route::resource('specialites', 'App\Http\Controllers\Ecole\SpecialiteController');
Route::resource('promotions', 'App\Http\Controllers\Ecole\PromotionController');
Route::resource('cours', 'App\Http\Controllers\Ecole\CoursController');
Route::resource('notes', 'App\Http\Controllers\Ecole\NoteController');
Route::resource('permissions', 'App\Http\Controllers\Auth\PermissionController');
Route::resource('roles', 'App\Http\Controllers\Auth\RoleController');
Route::resource('rattrapages', 'App\Http\Controllers\Ecole\RattrapageController');
Route::resource('releves', 'App\Http\Controllers\Ecole\ReleveController');

//Changement du mot de Passe
Route::get('change-password', [App\Http\Controllers\ChangePasswordController::class, 'index']);
Route::post('change-password', [App\Http\Controllers\ChangePasswordController::class, 'changePassword']);
