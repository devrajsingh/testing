<?php

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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/addboys', 'AddBoys@create');
Route::get('/add', function () {
    return view('add_delivery');
});
Route::get('/list', 'AddBoys@index');
Route::get('/orderlist', 'AddBoys@orderlist');
