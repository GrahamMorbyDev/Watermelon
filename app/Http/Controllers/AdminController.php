<?php

namespace App\Http\Controllers;

use App\User;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Admin home page
    public function AdminHome()
    {
        return view('admin/index');
    }

    // Upload Video Page
    public function UploadVideo()
    {
        return view('admin/uploadvideo');
    }

    // Upload Video Page
    public function ShowUsers()
    {
        $users = User::paginate(15);
        return view('admin/users', compact('users'));
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

    }
}
