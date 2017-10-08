<?php

namespace App\Http\Controllers;

use App\Config;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Verotel\FlexPay\Brand;
use Verotel\FlexPay\Client;

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
        return view('home', compact('user'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    static function createSubscription(Request $request)
    {
        $user = Auth::user();

        $input = $request->all();

        if ($input['paymentType'] === 'stripe')
        {
            $token = $input['stripeToken'];
            try
            {
                $subscription = $user->newSubscription
                ($input['plan'], $input['plan'])->create($token, [
                    'email' => $user->email
                ]);


                return back()->with('alert-success', 'Subscription is completed.');
            } catch (\Exception $e)
            {
                return back()->with('alert-warning', $e->getMessage());
            }
        } elseif ($input['paymentType'] === 'verotel')
        {

            $brand = Brand::create_from_merchant_id(config('settings.merchentID'));

            $flexpayClient = new Client(config('settings.shopID'), config('settings.secret'), $brand);
            $purchaseUrl = $flexpayClient->get_subscription_URL([
//                "referenceID" => 'test',
                "email" => $user->email,
                "priceAmount" => config('settings.verotelSubscriptionPrice'),
                "priceCurrency" => "GBP",
                "description" => config('settings.verotelSubscriptionDescription'),
                "period" => "P1M",
                "subscriptionType" => "recurring",
                "custom1" => Auth::id()
            ]);
            return redirect()->away($purchaseUrl);
        }
        return back()->with('alert-warning', 'No payment type given');
    }

    public function cancelSubscription(Request $request)
    {
        $user = Auth::user();
        $sub = new User();
        $sub->id = $user->getAuthIdentifier();
        $sub = $sub->getLatestSubscription();
        $input = $request->all();

        if (isset($sub))
        {
            if ($sub->integration === 'verotel')
            {
                $saleID = $sub->stripe_id;
                $brand = Brand::create_from_merchant_id(config('settings.merchentID'));
                $flexpayClient = new Client(config('settings.shopID'), config('settings.secret'), $brand);
                $cancelUrl = $flexpayClient->get_cancel_subscription_URL(["saleID" => $saleID]);
                return redirect()->away($cancelUrl);
            } else
            {
                try
                {
                    $user->subscription($sub->name)->cancel();
                    return back()->with('alert-success', 'Subscription canceled');
                } catch (\Exception $e)
                {
                    return back()->with('alert-warning', $e->getMessage());
                }
            }
        }
        return back()->with('alert-warning', 'No integration given');
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