<?php

namespace App\Http\Controllers;

use App\User;
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
}
