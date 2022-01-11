<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegisterController;
use Faker\Guesser\Name;

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

/* Route::get('/', function () {
    return view('landing');
}); */


Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::get('/events/create', [EventController::class, 'create'])->name('create');

Auth::routes();

// Route::resource('/events', App\Http\Controllers\EventController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('destroy');

Route::post('/events', [EventController::class, 'store'])->name('store');

Route::put('/events/{id}', [EventController::class, 'update'])->name('update');

Route::get('/events/{id}', [EventController::class, 'edit'])->name('edit');

Route::get('/dashboard' , [LandingController::class, 'admin'])->name('dashboard')->middleware('Admin');

Route::post('/events/join/{id}', [RegisterController::class,'join'])->name('join');

Route::get('/user' , [LandingController::class, 'user'])->name('user_view');

Route::put('/dashboard/{id}', [EventController::class, 'updateFeatured'])->name('updateFeatured');

