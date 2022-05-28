<?php

namespace App\Http\Controllers;
use App\Models\Marketplace;
use App\Models\Payment;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Omnipay\Omnipay;

class MarketplaceController extends Controller
{
    public $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('AuthorizeNetApi_Api');
        $this->gateway->setAuthName('5G33YjYGc8pQ');
        $this->gateway->setTransactionKey('72jBWh9fDpB622w6');
        $this->gateway->setTestMode(true); //comment this line when move to 'live'
    }

    public function index()
    {
        return view('Backend.pages.marketplace',['payments'=>Marketplace::GetPayment(Auth::user()->id)]);
    }


    public function store(Request $request)
    {
        try {
            $creditCard = new \Omnipay\Common\CreditCard([
                'number' => $request->input('card_number'),
//                'expiryMonth' => $request->input('12'),
                'expiryMonth' => '12',
//                'expiryYear' => $request->input('2023'),
                'expiryYear' => '2023',
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
//                    'amount' => $request->input('amount'),
                    'amount' => 100,
                    'currency' => 'USD',
                    'transactionReference' => $transactionReference,
                ])->send();

                $transaction_id = $response->getTransactionReference();
//                $amount = $request->input('amount');
                $amount = 100;

                // Insert transaction data into the database
                $isPaymentExist = Payment::where('transaction_id', $transaction_id)->first();

                if(!$isPaymentExist)
                {
                    $payment = new Payment;
                    $payment->transaction_id = $transaction_id;
                    $payment->user_id = Auth::user()->id;
//                    $payment->amount = $request->input('amount');
                    $payment->amount = 100;
                    $payment->currency = 'USD';
                    $payment->payment_status = 'Captured';
                    $payment->save();
                }

                return redirect()->back();
            } else {
                // not successful
                return  redirect()->back()->with('message',$response->getMessage());

            }
        } catch(Exception $e) {
//            return $e->getMessage();
            return  redirect()->back()->with('message',$response->getMessage());
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
