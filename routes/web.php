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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::middleware(['admin'])->group( function() {
    // admin views
    Route::get('/admin', 'AdminController@AdminHome');

    //Video Routes
    Route::get('/admin/uploadvideo' , 'AdminController@UploadVideo');
    Route::post('uploadsinglevideo' , 'AdminController@UploadSingleVideo');

    //Image Routes
    Route::get('/admin/uploadimages' , 'AdminController@Uploadimage');
    Route::post('/admin/uploadimageset' , 'AdminController@UploadImageSet');

    // User Routes
    Route::get('/admin/users', 'AdminController@ShowUsers');
    Route::post('/update/user', 'UserController@updateUser');
    Route::post('/delete/user', 'UserController@deleteUser');
});


Route::get('/home', 'HomeController@index')->name('home');


//Members Section
Route::get('/members/videos', 'MembersController@videos');
Route::get('members/video/{id}', 'MembersController@show');
