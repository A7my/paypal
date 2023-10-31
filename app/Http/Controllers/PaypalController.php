<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaypalController extends Controller
{
    public function payment(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal_success'),
                "cancel_url" => route('paypal_cancel')
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $request->price
                    ]
                ]
            ]
        ]);

        //dd($response);

        if(isset($response['id']) && $response['id']!=null) {
            foreach($response['links'] as $link) {
                if($link['rel'] === 'approve') {
                    $transaction = new Transaction();
                    $transaction->user_id = 1; // This will be the authenticator id , but i used 1
                    $transaction->amount = $request->price;
                    $transaction->currency = "$";
                    $transaction->description = "This is success transaction description";
                    $transaction->status = "success";
                    $transaction->save();
                    return redirect()->away($link['href']);
                }
            }
        } else {
            $transaction = new Transaction();
            $transaction->user_id = 1; // This will be the authenticator id , but i used 1
            $transaction->amount = 0;
            $transaction->currency = "$";
            $transaction->description = "This is fail transaction description";
            $transaction->status = "fail";
            $transaction->save();
            return redirect()->route('paypal_cancel');
        }
    }

    public function success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);



        //dd($response);

        if(isset($response['status']) && $response['status'] == 'COMPLETED') {
            return view('success');
        } else {
            return redirect()->route('paypal_cancel');
        }
    }

    public function cancel()
    {

        return view('success');
    }
}
