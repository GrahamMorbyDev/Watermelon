<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dob;
use Video;
use App\contactUS;
use Messerli90\IGDB\Facades\IGDB;
use App\Blogs;

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
    //Contact Post
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
        $videos = DB::table('videos')->latest()->paginate(6);
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
    //Coming Soon
    public function comingsoon() {
        $game = IGDB::searchGames('fallout');
        //$game  = json_decode($game, true);
        //dd($game);

        //Get first three Blog posts
        $blognew = new Blogs();
        $blognew = $blognew->take(3)->latest()->get();

        //Get Other blogs
        $blogold = new Blogs();
        $blogold = $blogold->skip(3)->latest()->take(4)->get();

        return view('comingsoon', compact('game', 'blognew', 'blogold'));
    }

    //Game Page
    public function singleGame(Request $request) {
        $id = $request->get('id');
        $game = IGDB::getGame($id);
        //$game  = json_decode($game, true);
        //dd($game);
        return view('singlegame', compact('game'));
    }

    //Search Game
    public function searchGame(Request $request) {
        $name = $request->get('game');
        $game = IGDB::searchGames($name);
        //$game  = json_decode($game, true);
        return view('searchGameResults', compact('game'));
    }
}
