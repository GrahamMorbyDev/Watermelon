<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dob;

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
        return redirect('home');
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
    //Terms
    public function terms() {
        return view('terms');
    }
}
