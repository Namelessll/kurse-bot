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


Route::get('/home', function () {
    return redirect('/');
});


Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/mails', 'HomeController@getMails')->name('getMails');
Route::get('/settings', 'HomeController@getSettings')->name('getSettings');
