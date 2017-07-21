<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MembersController extends Controller
{
    public function videos() {
        $videos = DB::table('videos')->get();

        return view('members/videoList' , ['videos' => $videos]);
    }
}
