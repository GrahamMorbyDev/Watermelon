<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('subscribe', compact('user'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    static function createSubscription(Request $request)
    {
        $user = Auth::user();
        $input = $request->all();
        $token = $input['stripeToken'];

//        var_dump($input);die();
        try
        {
            $user->newSubscription
            ($input['plan'], $input['plan'])->create($token, [
                'email' => $user->email
            ]);

            return back()->with('alert-success', 'Subscription is completed.');
        } catch (\Exception $e)
        {
            var_dump($e);die();
//            return back()->with('success', $e->getMessage());
        }
    }

    public function cancelSubscription()
    {

    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listSubscriptions(Request $request)
    {

        $user = Auth::user();
        $subscription = $user->subscriptions()->getResults();
        foreach ($subscription as $s)
        {
            if ($s->active())
            {
                $return[] = $s->name;
            }
        }
        return view('subList', ['subs' => $return]);
    }
}