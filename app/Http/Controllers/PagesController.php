<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
