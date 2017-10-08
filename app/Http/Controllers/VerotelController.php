<?php

namespace App\Http\Controllers;

use App\PaymentHistory;
use App\Subscriptions;
use App\User;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;
use Verotel\FlexPay\Brand;
use Verotel\FlexPay\Client;

class VerotelController extends Controller
{
    /**
     * @param Request $request
     */
    public function postback(Request $request)
    {
        // get your brand instance (Verotel, CardBilling, FreenomPay)
        $brand = Brand::create_from_merchant_id(config('settings.merchentID'));
        $flexpayClient = new Client(config('settings.shopID'), config('settings.secret'), $brand);

        if (!$flexpayClient->validate_signature($_GET))
        {
            http_response_code(500);
            echo "ERROR - Invalid signature!";
            exit;
        } elseif (
            $request->get('event') === 'rebill'
            && $request->get('subscriptionType') === 'recurring'
            && $request->get('type') === 'subscription'
        )
        {
            $this->createVerotelPayment($request);
            echo "OK";
            exit;
        } elseif (
            $request->get('event') === 'cancel'
            && $request->get('subscriptionType') === 'recurring'
            && $request->get('type') === 'subscription'
        )
        {
            $now = new DateTime();
            $now = $now->format('Y-m-d H:i:s');

            $subscription = new Subscriptions();
            $subscription = $subscription->where('stripe_id', $request->get('saleID'))->first();
            $subscription->ends_at = $request->get('expiresOn');
            $subscription->save();
            echo "OK";
            exit;
        } elseif (
            $request->get('event') === 'expire'
            && $request->get('subscriptionType') === 'recurring'
            && $request->get('type') === 'subscription'
        )
        {
            $now = new DateTime();
            $now = $now->format('Y-m-d H:i:s');

            $subscription = new Subscriptions();
            $subscription = $subscription->where('stripe_id', $request->get('saleID'))->first();
            $subscription->ends_at = $now;
            $subscription->save();
            echo "OK";
            exit;
        } else
        {
            echo "ERROR - Invalid! Event type not supported";
        }
    }

    public function success(Request $request)
    {
        // get your brand instance (Verotel, CardBilling, FreenomPay)
        $brand = Brand::create_from_merchant_id(config('settings.merchentID'));

        $flexpayClient = new Client(config('settings.shopID'), config('settings.secret'), $brand);
        $validated = $flexpayClient->validate_signature($_GET);
        if (!$validated)
        {
            http_response_code(500);
            return redirect()->route('home')->with('alert-danger', 'Subscription Failed.');
        }


        $subscription = new Subscriptions();
        $subscription->user_id = $request->get('custom1');
        $subscription->integration = 'verotel';
        $subscription->name = config('settings.verotelSubscriptionDescription');
        $subscription->stripe_id = $request->get('saleID');
        $subscription->stripe_plan = config('settings.verotelSubscriptionDescription');
        $subscription->quantity = 1;
        $subscription->save();

        $this->createVerotelPayment($request);

        return redirect()->route('home')->with('alert-success', 'Subscription is completed.');
    }

    public function cancel(Request $request)
    {

    }

    private function createVerotelPayment(Request $request)
    {
        /*
         * rebill
            'amount' => string '12.31' (length=5)
            'currency' => string 'GBP' (length=3)
            'event' => string 'rebill' (length=6)
            'nextChargeOn' => string '2017-11-07' (length=10)
            'paymentMethod' => string 'CC' (length=2)
            'referenceID' => string 'test' (length=4)
            'saleID' => string '456789' (length=6)
            'shopID' => string '110760' (length=6)
            'subscriptionPhase' => string 'normal' (length=6)
            'subscriptionType' => string 'recurring' (length=9)
            'type' => string 'subscription' (length=12)
            'signature' => string '8e5405096b89b06d6a306ff6cca608e7f83b4a0e'
        */

        /*
         * initial
          'event' => string 'initial' (length=7)
          'nextChargeOn' => string '2017-11-07' (length=10)
          'paymentMethod' => string 'CC' (length=2)
          'period' => string 'P1M' (length=3)
          'priceAmount' => string '2.64' (length=4)
          'priceCurrency' => string 'GBP' (length=3)
          'saleID' => string '11968594' (length=8)
          'shopID' => string '110760' (length=6)
          'subscriptionType' => string 'recurring' (length=9)
          'type' => string 'subscription' (length=12)
          'signature' => string '13c0bfb829d941aaf6a6f2527a29283b57ebbc2d' (length=40)
        */

        $payment = new PaymentHistory;
        $payment->type = $request->get('event');
        $payment->integration = 'verotel';
        $payment->reference = $request->get('referenceID', '');
        $payment->saleid = $request->get('saleID');

        if ($request->get('event') === 'initial')
        {
            $payment->amount = $request->get('priceAmount');
            $payment->currency = $request->get('priceCurrency');
        } else
        {
            $payment->amount = $request->get('amount');
            $payment->currency = $request->get('currency');
        }

        $payment->paymentMethod = $request->get('paymentMethod');
        $payment->save();
    }
}