<?php

namespace App\Http\Controllers;

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
}
