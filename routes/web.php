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
    return view('welcome');
});


Route::resource('device','DeviceController');
Route::resource('customer','CustomerController');
Route::resource('employee','EmployeeController');
Route::resource('type','TypeController');
Route::resource('owner_distinct','OwnerDistinctController');
Route::resource('statuse','StatusController');

// Route::resource('device.comments', 'DeviseCommentController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
