<?php

namespace App\Http\Controllers;

use App\Address;
use App\User;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function updateUser(Request $request)
    {
        $user = new User;
        $user = $user->find($request->get('id'));

        $userAttributes = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
        ];

        $user->fill($userAttributes);
        $user->save();

        $this->updateAddress($request);


    }

    public function updateAddress(Request $request)
    {
        $user = new User;
        $user = $user->find($request->get('id'));

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
}