<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('pages.home');
})->name("homepage")->middleware('signedIn');

Route::get('about', function(){
   return view('pages.about');
})->name('about');

Route::get('register', function(){
   return view('pages.register');
})->name("register");

Route::post('register', 'user_controller@registerUser')->name('register');

Route::post('/', "user_controller@login")->name("login");

Route::get('dashboard', function(){
    $results = DB::table('users')->find(Auth::id());
    return view("pages.userHome", ["results" => $results]);
})->name('dashboard')->middleware('userSession');
