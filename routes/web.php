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
// Login
Route::get('auth/login', function () {
    return view('auth/login');
});
// Dashboard
Route::get('/', function () {
    return view('dashboard');
});

// Blog
Route::resource('blogs', App\Http\Controllers\BlogController::class);

