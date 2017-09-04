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
Route::post('storedb', 'PagesController@storeDob');
Route::get('welcome', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('whatwedo', 'PagesController@whatwedo');
Route::get('updates', 'PagesController@updates');
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
    Route::post('members/video/download' , 'MembersController@downloadVideos');

    //Image
    Route::get('/members/imagessets', 'MembersController@imagessets');
    Route::get('members/imagessets/{setname}', 'MembersController@showimages');
    Route::post('members/imageset/download' , 'MembersController@downloadImages');


});

Route::middleware(['admin'])->group(function ()
{
    // admin views
    Route::get('/admin', 'AdminController@AdminHome');

    //Video Routes
<<<<<<< HEAD
    Route::get('/admin/uploadvideo', 'AdminController@UploadVideo');
    Route::post('uploadsinglevideo', 'AdminController@UploadSingleVideo');
    Route::get('/admin/showVideos', 'AdminController@ShowVideos');
    Route::post('/admin/deletevideo' , 'AdminController@deleteVideo');
    Route::post('/admin/editvideo', 'AdminController@editvideo');
    Route::post('/admin/updatevideo', 'AdminController@updateVideo');
=======
    Route::get('/admin/uploadvideo', 'VideoController@uploadVideo');
    Route::post('uploadsinglevideo', 'VideoController@uploadSingleVideo');
    Route::get('/admin/showVideos', 'VideoController@showVideos');
    Route::post('/admin/deletevideo' , 'VideoController@deleteVideo');
    Route::post('/admin/editvideo', 'VideoController@editVideo');
>>>>>>> d99f7b3628129726f0e79ba07455ce5055a1935f

    //Image Routes
    Route::get('/admin/images/all', 'ImageController@showImages');
    Route::get('/admin/images', 'ImageController@showUploadimage')->name('addImage');
    Route::get('/admin/images/{id}', 'ImageController@showUploadimage')->name('editImage');
    Route::post('/admin/images/delete' , 'ImageController@deleteImage');
    Route::post('/admin/uploadimageset', 'ImageController@uploadImageSet');



    // User Routes
    Route::get('/admin/users', 'AdminController@ShowUsers');
    Route::post('/update/user', 'UserController@updateUser');
    Route::post('/delete/user', 'UserController@deleteUser');

    // Blog Routes
    Route::get('/admin/blog/', 'BlogController@showAddBlog')->name('addBlog');
    Route::get('/admin/blog/{id}', 'BlogController@showAddBlog')->name('editBlog');
    Route::post('saveblog', 'BlogController@createBlog');
    Route::post('updateblog', 'BlogController@updateBlog');

    //Headers
    Route::get('/admin/headers', 'AdminController@headers');
});

