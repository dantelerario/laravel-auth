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

Route::get('/', function () {
    return view('guest.welcome');
})->name('home');

Auth::routes();

//admin 
Route::prefix('admin')->namespace('Admin')->middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('admin.home');
});

//guest
Route::get('posts', 'PostController@index')->name('post.index');

Route::get('/home', 'HomeController@index')->name('admin.home');
