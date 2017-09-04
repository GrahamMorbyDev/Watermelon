<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function lobby()
    {
        return view('members/lobby');
    }

    //Show Videos
    public function videos()
    {
        $videos = DB::table('videos')->paginate();

        return view('members/videoList', ['videos' => $videos]);
    }

    //Show Video
    public function show($id)
    {
        $video = DB::table('videos')->where('id', $id)->first();
        return view('members/video', compact('video'));
    }

    // Download Video
    public function downloadVideos(Request $request)
    {
        $filename = $request->get('filename');
        $filePath = public_path('storage/' . $filename);
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        return response()->download($filePath, $request->get('title') . '.' . $ext);
    }

    // Download Video
    public function downloadImages(Request $request)
    {
        $filename = $request->get('name');
        $filePath = public_path('storage/' . $filename);
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        return response()->download($filePath, $request->get('setname') . '.' . $ext);
    }


    //Show Images
    public function imagessets()
    {
        //$sql = ('select distinct(setname) , `name` FROM images GROUP BY setname;');
        $images = DB::table('images')
            ->select(DB::raw('distinct(setname) , name'))
            ->groupBy('setname')
            ->get();
        return view('members/imagesets', ['images' => $images]);
    }

    public function showimages($setname)
    {
        $imageset = DB::table('images')->where('setname', $setname)->get();
        return view('members.imageset', compact('imageset'));
    }
}
