<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Video;

class MembersController extends Controller
{
    public function lobby() {
        return view('members/lobby');
    }
    //Show Videos
    public function videos() {
        $videos = DB::table('videos')->paginate();

        return view('members/videoList' , ['videos' => $videos]);
    }
    //Show Video
    public function show($id) {
        $video = DB::table('videos')->where('id' , $id)->first();
        return view('members/video', compact('video'));
    }
    // Download Video
    public function downloadVideos() {
        $file_name = $_POST['title'];
        $file_path = public_path('storage/'.$file_name);
        return response()->download($file_path);

    }


    //Show Images
    public function imagessets() {
        //$sql = ('select distinct(setname) , `name` FROM images GROUP BY setname;');
        $images = DB::table('images')
        ->select(DB::raw('distinct(setname) , name'))
        ->groupBy('setname')
        ->get();
        return view('members/imagesets' , ['images' => $images]);
    }

    public function showimages($setname) {
        $imageset = DB::table('images')->where('setname' , $setname)->get();
        return view('members.imageset' , compact('imageset'));
    }
}
