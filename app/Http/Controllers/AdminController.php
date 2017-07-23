<?php

namespace App\Http\Controllers;

use App\Address;
use App\User;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Admin home page
    public function AdminHome()
    {
        return view('admin/index');
    }

    // Upload Video Page
    public function UploadVideo()
    {
        return view('admin/uploadvideo');
    }

    // Upload Video Page
    public function ShowUsers()
    {
        $users = User::paginate(15);
        return view('admin/users', compact('users'));
    }

    public function updateUser(Request $request)
    {
        $user = new User;
        $user = $user->find($request->get('id'));

        $userAttributes = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'isadmin' => $request->get('admin'),
        ];

        $addressAttributes = [
            'user_id' => $request->get('id'),
            'address_line_one' => $request->get('adr1'),
            'address_line_two' => $request->get('adr2'),
            'address_line_three' => $request->get('adr3'),
            'town' => $request->get('town'),
            'country' => $request->get('country'),
            'country_code' => $request->get('ccode'),
            'postcode' => $request->get('pcode'),
        ];

        $user->fill($userAttributes);
        $user->save();

        if ($address = $user->getAddress())
        {
            $address->fill($addressAttributes);
            $address->save();
        } else
        {
            $address = new Address();
            $address->create($addressAttributes);
        }

        return redirect()->back()->with('alert-success', 'Saved successfully');
    }

    public function deleteUser(Request $request)
    {
        $user = new User;
        $user = $user->find($request->get('id'));

        if ($address = $user->getAddress())
        {
            $address->delete();
        }
        $user->delete();


        return redirect()->back()->with('alert-success', 'Deleted successfully');
    }

    // Upload single Video
    public function UploadSingleVideo(Request $request)
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

    }
}
