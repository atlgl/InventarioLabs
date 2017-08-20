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

Route::resource('teacher',	'TeacherController');

Route::resource('software','SoftwareController');

Route::resource('mark','MarkController');

Route::resource('lab','LabsController');

Route::resource('computer','ComputerController');

Route::resource('inventory','InventoryController');

Route::resource('fail','FailsController');

Route::resource('installer','InstalledController');

Route::resource('lost','LostController');

Route::resource('android/software','Android\SoftwareController');

Route::resource('android/lab','Android\LabController');

Route::resource('android/fail','Android\FailController');

Route::resource('android/computer','Android\ComputerController');

Route::resource('android/installed','Android\InstalledController');

Route::resource('android/inventory','Android\InventoryController');

Route::resource('android/mark','Android\MarkController');

Route::resource('android/teacher','Android\TeacherController');

Route::resource('android/user','Android\UserController');

Route::resource('android/lost','Android\LostController');

Route::resource('android/persona','PersonaController');

/*
Route::get('clave/token',function(){
    $token =csrf_token();
   return  $token; 
});*/



