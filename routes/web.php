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



// admin views
Route::get('/admin', 'AdminController@AdminHome');

Route::get('/admin/uploadvideo' , 'AdminController@UploadVideo');
Route::post('uploadsinglevideo' , 'AdminController@UploadSingleVideo');