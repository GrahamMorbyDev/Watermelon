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

Route::get('', 'PagesController@disclaimer');
Route::get('home', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('whatwedo', 'PagesController@whatwedo');
Route::get('contact', 'PagesController@contact');
Route::get('terms', 'PagesController@terms');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog', 'BlogController@showArticleList');
Route::get('/blog/{id}', 'BlogController@showBlog');


Auth::routes();


Route::get('/subscribe', 'SubscriptionController@index');
Route::post('sub', ['as' => 'subscribe', 'uses' => 'SubscriptionController@createSubscription']);

Route::post('/update/user/address', 'UserController@updateAddress');
Route::middleware(['admin'])->group(function ()
{
    //Lobby
    Route::get('/members/lobby' , 'MembersController@lobby');

    //Videos
    Route::get('/members/videos', 'MembersController@videos');
    Route::get('members/video/{id}', 'MembersController@show');

    //Image
    Route::get('/members/imagessets', 'MembersController@imagessets');
    Route::get('members/imagessets/{setname}', 'MembersController@showimages');


});

Route::middleware(['admin'])->group(function ()
{
    // admin views
    Route::get('/admin', 'AdminController@AdminHome');

    //Video Routes
    Route::get('/admin/uploadvideo', 'AdminController@UploadVideo');
    Route::post('uploadsinglevideo', 'AdminController@UploadSingleVideo');
    Route::get('/admin/showVideos', 'AdminController@ShowVideos');
    Route::post('/admin/deletevideo' , 'AdminController@deleteVideo');

    //Image Routes
    Route::get('/admin/uploadimages', 'AdminController@Uploadimage');
    Route::post('/admin/uploadimageset', 'AdminController@UploadImageSet');

    // User Routes
    Route::get('/admin/users', 'AdminController@ShowUsers');
    Route::post('/update/user', 'UserController@updateUser');
    Route::post('/delete/user', 'UserController@deleteUser');

    // Blog Routes
    Route::get('/admin/addblog/', 'BlogController@showAddBlog')->name('addBlog');
    Route::get('/admin/addblog/{id}', 'BlogController@showAddBlog')->name('editBlog');
    Route::post('saveblog', 'BlogController@createBlog');
    Route::post('updateblog', 'BlogController@updateBlog');

    //Headers
    Route::get('/admin/headers', 'AdminController@headers');
});

