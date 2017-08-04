<?php

namespace App\Http\Controllers;

use App\User;
use App\Video;
use App\Images;
use App\Blogs;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Admin home page
    public function AdminHome()
    {
        $users = User::get()->count();
        $videos = Video::get()->count();
        $images = Images::get()->count();
        $blogs = Blogs::get()->count();

        return view('admin/index' , compact('users' , 'videos', 'images', 'blogs'));


    }

    // Upload Video Page
    public function UploadVideo()
    {
        return view('admin/uploadvideo');
    }

    public function ShowVideos() {
        $videos = Video::paginate(10);
        return view('admin/showVideos', compact('videos'));
    }

    // Upload single Video
    public function UploadSingleVideo(Request $request)
    {
        //image
        $imagepath = $request->file('featuredimage')->store('videoimages');

        //video
        $videopath = $request->file('filename')->store('videos');


        Video::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'featuredimage' => $imagepath,
            'filename' => $videopath
        ]);

        return redirect()->back()->with('alert-success', 'Uploaded successfully');

    }
    //Delete Video
    public function deleteVideo(Request $request)
    {
        $video = new Video;
        $video = $video->find($request->get('id'));
        $video->delete();
        return redirect()->back()->with('alert-success', 'Deleted successfully');
    }

    // show users page
    public function ShowUsers()
    {
        $users = User::paginate(15);
        return view('admin/users', compact('users'));
    }



    // Upload Image set
    public function Uploadimage()
    {
        return view('admin/uploadimages');
    }
    //Upload image sets to DB
    public function UploadImageSet(Request $request)
    {
     $files = $request->file('name');
     foreach($files as $file){
         $imagepath = $file->store('imagesets');
         Images::create([
             'setname' => $request->get('setname'),
             'name' => $imagepath
         ]);
     }
        return redirect()->back()->with('alert-success', 'Uploaded successfully');

    }
}
