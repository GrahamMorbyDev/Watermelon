<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dob;
use Video;
use App\contactUS;

class PagesController extends Controller
{
    // Index
    public function index() {
        return view('welcome');
    }
    //Disclaimer Page
    public function disclaimer() {
        return view('disclaimer');
    }
    // Store form from the disclaimer
    public function storeDob(Request $request) {
        Dob::create([
            'month' => $request->get('month'),
            'day' => $request->get('day'),
            'year' => $request->get('year'),
            'ip' => $request->get('ip')
        ]);
        return redirect('welcome');
    }
    //About page
    public function about() {
        return view('about');
    }
    //What we do
    public function whatwedo() {
        return view('whatwedo');
    }
    //Contact
    public function contact() {
        return view('contact');
    }
    public function contactUSPost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        ContactUS::create($request->all());

        return back()->with('success', 'Thanks for contacting us!');
    }
    //Terms
    public function terms() {
        return view('terms');
    }
    //Latest Updates Page
    public function updates() {
        $videos = DB::table('videos')->paginate(6);
        $images = DB::table('images')
            ->select(DB::raw('distinct(setname) , name'))
            ->groupBy('setname')
            ->get();
        return view('updates', compact('videos', 'images'));
    }
    //FAQ
    public function faq() {
        return view('faq');
    }
}
