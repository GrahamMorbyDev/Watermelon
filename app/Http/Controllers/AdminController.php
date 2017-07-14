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

    // Upload single Video
    public function UploadSingleVideo() {
        $title = $_POST['title'];
        $release = $_POST['realeasedate'];
        $description = $_POST['videodescription'];

        //image
        $fileimage = $_POST['featuredimage'];
        $dirimage = base_path('public/uploads/featuredvideoimages');
        file_put_contents("$dirimage/$fileimage", $fileimage);

        //video
        $filevideo = $_POST['videofile'];
        $dirvideo = base_path('public/uploads/videos');
        file_put_contents("$dirvideo/$filevideo", $filevideo);

        echo $title . $release . $description;
    }
}
