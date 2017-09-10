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


        $zipName = public_path('storage/imagesets/'. $name .'.zip');
        $writable = is_writable(public_path('storage/imagesets/'));
        $headers = array(
            'Content-Type: application/zip',
            "Content-Disposition: attachment; filename=$zipName",
            "Pragma: no-cache",
            "Expires: 0"
        );
        $zip = new ZipArchive;
        if($zip->open($zipName, ZipArchive::CREATE))
        {
            foreach ($files as $i => $file) {
                $ext = pathinfo($file, PATHINFO_EXTENSION);
                $zip->addFile(public_path('storage/'.$file), $name.'/'.($i+1).'.'.$ext);
            }
            $zip->close();
            return response()->download($zipName, null,  $headers);
        }
        return redirect()->back()->with('alert-warning', 'Failed to download');
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
