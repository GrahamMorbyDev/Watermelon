<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MembersController extends Controller
{
    public function videos() {
        $videos = DB::table('videos')->paginate();

        return view('members/videoList' , ['videos' => $videos]);
    }

    public function video($id) {
        $video = DB::table('videos')->where('id' , $id)->find();
        return view('members/video', ['video' => $video]);
    }
}
