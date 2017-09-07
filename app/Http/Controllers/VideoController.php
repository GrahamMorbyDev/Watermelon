<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    // Upload Video Page
    public function showUploadVideo($id = null)
    {
        $video = new Video();
        if ($id)
        {
            $video = $video->where('id', $id)->first();
        }
        return view('admin/uploadvideo', compact('video'));
    }

    public function showVideos()
    {
        $videos = new Video();
        $videos = $videos->paginate(10);
        return view('admin/showVideos', compact('videos'));
    }

    // Upload single Video
    public function uploadSingleVideo(Request $request)
    {


        if ($request->get('id'))
        {
            if ($this->updateVideo($request))
            {
                return redirect()->back()->with('alert-success', 'Updated Successfully');
            } else
            {
                return redirect()->back()->with('alert-warning', 'Updated not Successful');
            }
        } else
        {
            $this->validateVideo($request);
            //image
            $imagepath = $request->file('featuredimage')->store('videoimages');
            //video
            $videopath = $request->file('filename')->store('videos');

            $video = new Video();
            $video->title = $request->get('title');
            $video->description = $request->get('description');
            $video->featuredimage = $imagepath;
            $video->filename = $videopath;

            $video->save();
            return redirect()->route('editVideo', ['id' => $video->id])->with('alert-success', 'Uploaded Successfully');
        }

    }

    //Delete Video
    public function deleteVideo(Request $request)
    {
        $video = new Video;
        $video = $video->find($request->get('id'));
        $video->delete();
        return redirect()->back()->with('alert-success', 'Deleted successfully');
    }

    //Update Video
    public function updateVideo(Request $request)
    {
        $video = new Video();
        $video = $video->find($request->get('id'));


        if ($request->file('featuredimage'))
        {
            $imagePath = $request->file('featuredimage')->store('videoimages');
        } else
        {
            $imagePath = $video->featuredimage;
        }

        if ($request->file('filename'))
        {
            $videoPath = $request->file('filename')->store('videos');
        } else
        {
            $videoPath = $video->filename;
        }
        $video->title = $request->get('title');
        $video->description = $request->get('description');
        $video->featuredimage = $imagePath;
        $video->filename = $videoPath;

        return $video->save();
    }

    /**
     * @param Request $request
     * @param bool $new
     */
    public function validateVideo(Request $request, $new = true)
    {

        if ($new)
        {
            $this->validate($request, [
                'featuredimage' => 'required||max:191',
                'filename' => 'required||max:191'
            ]);
        }

        $this->validate($request, [
            'title' => 'required||max:191',
            'description' => 'required'
        ]);

    }

}
