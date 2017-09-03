<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    // Upload Video Page
    public function uploadVideo()
    {
        return view('admin/uploadvideo');
    }

    public function showVideos() {
        $videos = new Video();
        $videos = $videos->paginate(10);
        return view('admin/showVideos', compact('videos'));
    }

    // Upload single Video
    public function uploadSingleVideo(Request $request)
    {
        //image
        $imagepath = $request->file('featuredimage')->store('videoimages');

        //video
        $videopath = $request->file('filename')->store('videos');


        Video::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'featuredimage' => $imagepath,
            'filename' => $videopath
        ]);

        return redirect()->back()->with('alert-success', 'Uploaded successfully');

    }
    //Delete Video
    public function deleteVideo(Request $request)
    {
        $video = new Video;
        $video = $video->find($request->get('id'));
        $video->delete();
        return redirect()->back()->with('alert-success', 'Deleted successfully');
    }

    //edit Video
    public function editVideo()
    {
        $id = $_POST['id'];
        $video = DB::table('videos')->where('id', $id)->get()->first();
        return view('admin/editvideo', compact('video'));
    }

    //Update Video
    public function updateVideo(Request $request)
    {
       $video = new Video();
       $video = $video->find($request->get('id'));
       $videopath = $request->file('filename')->store('videos');

        if($request->file('featuredimage')) {
           $imagePath = $request->file('featuredimage')->store('videoimages');
       }else
       {
           $imagePath = $video->featuredimage;
       }
       $video->title = $request->get('title');
       $video->description = $request->get('description');
       $video->featuredimage = $imagePath;
       $video->file = $videopath;

       return $video->save();
    }

}
