<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Video;

class MembersController extends Controller
{
    //Show Videos
    public function videos() {
        $videos = DB::table('videos')->get();

        return view('members/videoList' , ['videos' => $videos]);
    }

    public function show($id) {
        $video = DB::table('videos')->where('id' , $id)->first();
        return view('members/video', compact('video'));
    }

    //Show Images
    public function imagessets() {
        $images = DB::table('images')->where('setname')->get();
        return view('members/imagessets' , ['images' => $images]);
    }
}
