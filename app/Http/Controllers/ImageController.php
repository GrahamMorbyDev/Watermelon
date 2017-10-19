<?php

namespace App\Http\Controllers;

use App\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ImageController extends Controller
{
    // Upload Image set
    public function showUploadImage($id = null)
    {
        $image = new Images();
        if ($id)
        {
            $image = $image->where('id', $id)->first();
        }
        return view('admin/uploadimages', compact('image'));
    }

    // Upload Image set
    public function showImages()
    {
        $images = DB::table('images')
            ->select(DB::raw('distinct(setname) , name'))
            ->groupBy('setname')
            ->get();
        return view('admin/showImages', compact('images'));
    }

    //Upload image sets to DB
    public function uploadImageSet(Request $request)
    {
        $files = $request->file('name');
        
        // if the id is present then we are working with an existing image
        if ($request->get('id'))
        {
            if ($this->updateImageSet($request))
            {
                return redirect()->back()->with('alert-success', 'Updated successfully');
            } else
            {
                return redirect()->back()->with('alert-warning', 'Updated not Successful');
            }
        } else
        {
            $this->validateImage($request);

            foreach ($files as $file)
            {
                $image = new Images();
                $imagepath = $file->store('imagesets');
                $image->setname = $request->get('setname');
                $image->name = $imagepath;
                $image->save();
            }
            return redirect()->route('editImage', ['id' => $image->id])->with('alert-success', 'Uploaded Successfully');
        }
    }

    /**
     * @param Request $request
     * @return bool
     */
    public function updateImageSet(Request $request)
    {
        $this->validateImage($request, false);

        $image = new Images();
        $image = $image->find($request->get('id'));
        if ($request->file('name'))
        {
            $imagePath = $request->file('name')->store('imagesets');
        } else
        {
            $imagePath = $image->name;
        }

        $image->setname = $request->get('setname');
        $image->name = $imagePath;
        return $image->save();
    }


    /**
     * @param Request $request
     * @param bool $new
     */
    public function validateImage(Request $request, $new = true)
    {

        if ($new)
        {
            $this->validate($request, [
                'name' => 'required|max:1000000',
            ]);
        }

        $this->validate($request, [

            'setname' => 'required||max:191',
        ]);

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteImage(Request $request)
    {
        $image = new Images;
        $image = $image->find($request->get('id'));
        $image->delete();
        return redirect()->back()->with('alert-success', 'Deleted successfully');
    }
}
