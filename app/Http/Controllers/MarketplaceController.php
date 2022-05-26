<?php

namespace App\Http\Controllers;

use App\Models\Marketplace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Omnipay\Omnipay;

class MarketplaceController extends Controller
{
    public $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('AuthorizeNetApi_Api');
        $this->gateway->setAuthName('7Jek6qJ97');
        $this->gateway->setTransactionKey('3d62s9Q48D9F7kKw');
        $this->gateway->setTestMode(true); //comment this line when move to 'live'
    }

    public function index()
    {
        return view('Backend.pages.marketplace');
    }


    public function store(Request $request)
    {
        try {
            $creditCard = new \Omnipay\Common\CreditCard([
                'number' => $request->input('card_number'),
                'expiryMonth' => $request->input('12'),
                'expiryYear' => $request->input('2023'),
                'cvv' => $request->input('cvv'),
            ]);

            // Generate a unique merchant site transaction ID.
            $transactionId = rand(100000000, 999999999);

            $response = $this->gateway->authorize([
                'amount' => 100,
                'currency' => 'USD',
                'transactionId' => $transactionId,
                'card' => $creditCard,
            ])->send();

            if($response->isSuccessful()) {

                // Captured from the authorization response.
                $transactionReference = $response->getTransactionReference();

                $response = $this->gateway->capture([
                    'amount' => $request->input('amount'),
                    'currency' => 'USD',
                    'transactionReference' => $transactionReference,
                ])->send();

                $transaction_id = $response->getTransactionReference();
                $amount = $request->input('amount');

                // Insert transaction data into the database
                $isPaymentExist = Payment::where('transaction_id', $transaction_id)->first();

                if(!$isPaymentExist)
                {
                    $payment = new Payment;
                    $payment->transaction_id = $transaction_id;
                    $payment->user_id = Auth::user()->id;
                    $payment->amount = $request->input('amount');
                    $payment->currency = 'USD';
                    $payment->payment_status = 'Captured';
                    $payment->save();
                }

                return "Payment is successful. Your transaction id is: ". $transaction_id;
            } else {
                // not successful
                return $response->getMessage();
            }
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }


    public function show(Marketplace $marketplace)
    {
        //
    }

    public function edit(Marketplace $marketplace)
    {
        //
    }


    public function update(Request $request, Marketplace $marketplace)
    {
        //
    }

    public function destroy(Marketplace $marketplace)
    {
        //
    }
}
