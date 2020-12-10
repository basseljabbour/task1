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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard1', function(){
    return view('layouts.dashboard');
});

Route::name('dashboard.')->prefix('dashboard')->namespace('dashboard')->middleware(['auth', 'role:admin'])->group(function()
{
    Route::get('/mass-users-insert', 'UserController@mass_create' )->name('mass_users_create');

    Route::post('/mass-users-insert', 'UserController@mass_store')->name('mass_users_store');

});
