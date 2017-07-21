<?php

namespace App\Http\Controllers;

use App\User;
use App\Video;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Admin home page
    public function AdminHome() {
        return view('admin/index');
    }

    // Upload Video Page
    public function UploadVideo() {
        return view('admin/uploadvideo');
    }

    // Upload Video Page
    public function ShowUsers() {
        $users = User::all(); return view('admin/users', compact('users'));
    }

    // Upload single Video
    public function UploadSingleVideo(Request $request) {

        //image
        $fileimage = $_POST['featuredimage'];
        $dirimage = base_path('public/uploads/featuredvideoimages');
        file_put_contents("$dirimage/$fileimage", $fileimage);

        //video
        $filevideo = $_POST['filename'];
        $dirvideo = base_path('public/uploads/videos');
        file_put_contents("$dirvideo/$filevideo", $filevideo);

        Video::create($request->all());

    }
}
