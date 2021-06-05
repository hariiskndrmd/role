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

//user
Route::get('/home', 'HomeController@index')->name('home');


//
Route::middleware(['auth', 'role:admin'])->group(function () {
    //dashboard
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    //product
    Route::get('/product', 'ProductController@index')->name('product');
});

