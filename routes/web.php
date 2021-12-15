<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

class Event {
    public $title = 'blabla';
    function __construct($title)
    {
        $this->title=$title; 
    }
}

Route::get('/', function(){
    $events = [new Event ('Curso PHP'), new Event ('Curso Laravel'), new Event ('El Sergi mola')];
    return view('landing', ['events'=>$events]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
