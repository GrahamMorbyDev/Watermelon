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
}
