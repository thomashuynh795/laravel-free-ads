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

Route::get('/', 'App\Http\Controllers\IndexController@showIndex');
Route::get('/index', 'App\Http\Controllers\IndexController@showIndex');
Route::get('/http://localhost:3000', 'App\Http\Controllers\IndexController@showIndex');
Route::get('/create-ad', 'App\Http\Controllers\AdController@createAd');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

