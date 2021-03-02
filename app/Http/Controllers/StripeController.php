<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;

class StripeController extends Controller
{
    public function stripe($price)
    {
        return view('stripe',['price'=>$price]);
    }

    public function stripePost(Request $request, $price)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100*$price,
                "currency" => "INR",
                "source" => $request->stripeToken,
                "description" => "This payment is for testing purpose",
        ]);
   
        Session::flash('success', 'Payment Successful !');
           
        //return back();
        return redirect('/myorders');
    }
}
