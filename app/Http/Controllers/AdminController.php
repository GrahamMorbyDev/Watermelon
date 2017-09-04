<?php

namespace App\Http\Controllers;

use App\User;
use App\Video;
use App\Images;
use App\Blogs;
use Illuminate\Http\Request;
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

    // show users page
    public function ShowUsers()
    {
        $users = User::paginate(15);
        return view('admin/users', compact('users'));
    }

    //Headers Change
    public function headers()
    {
        return view('admin.headers');
    }

}
