<?php

namespace App\Http\Controllers;

use App\Images;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

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
        $name = $request->get('setname');

        $images = new Images;
        $images = $images->where('setname', $name)->get();
        $files = array();
        foreach($images as $image)
        {
            array_push($files, $image->name);
        }


//        var_dump($files); die();
        $zipName = public_path('storage/imagesets/'. $name .'.zip');
        $f = is_writable(public_path('storage/imagesets/'));

//        $zipThing = Storage::put('imagesets/'.$name .'.zip', 'public');
//        var_dump($zipThing);
        $zip = new ZipArchive;
        $errors = $zip->open($zipName, ZipArchive::CREATE);
//        var_dump($errors); die();
        foreach ($files as $i => $file) {
            var_dump($file);
            $ext = pathinfo($file, PATHINFO_EXTENSION);
            $d = $zip->addFile(public_path('storage/'.$file), $name.'/'.($i+1).'.'.$ext);
//            var_dump($d); die();
        }
        $zip->close();


//        $filename = $request->get('name');
//        $filePath = public_path('storage/' . $filename);
//        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        return response()->download($zipName);
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
