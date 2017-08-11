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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/teacher',	'TeacherController');

Route::resource('/software','SoftwareController');

Route::resource('/mark','MarkController');

Route::resource('/lab','LabsController');

Route::resource('/computer','ComputersController');

Route::resource('/inventory','InventoryController');

Route::resource('/fails','ComputersController');

