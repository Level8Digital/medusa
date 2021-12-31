<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BuyForm;
use App\Http\Requests\ConfirmBuyForm;
use App\Http\Requests\FinalizePayPal;
use Mail;

use App\Mail\OrderConfirmed;
use App\Models\Purchase;

class BuyController extends Controller
{
    public function viewBuyNow()
    {
        // Set up 'antibot' style 'captcha' for contact form
  	    $numberConversion = array(
  	       0 => 'zero', 1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four', 5 => 'five',
  	       6 => 'six', 7 => 'seven', 8 =>'eight', 9 => 'nine', 10 => 'ten'
  	    );
  	    // Produce random numbers
  	    $numberOne = rand( 0, 6 );
  	    $numberTwo = rand( 0, 6 );
  	    // Add to the session for usage later
  	    session(['a12Ty9UkJ1!$%125Hgye' => 'What is ' . $numberConversion[$numberOne] .
  	    					' added to ' . $numberConversion[$numberTwo] . '?', 'QbX4176lUU/*&%rT#@' => $numberOne + $numberTwo]);

        return view('buy-now');
    }

    public function viewTerms()
    {

        return view('terms');
    }

    /*
    >> 1. Select desired Tools
    >> 2. Forward to terms page
    */
    public function proceedToPayment(BuyForm $request)
    {
        // Check for humanity
        if(session('QbX4176lUU/*&%rT#@') != $request->math_question){
    		// Return error is save didnt work
            return back()->with('error', 'You have answered the math question incorrectly. Try again.')->withInput();
        }

        $toolPrices = array('bro' => 15, 'pao' => 35, 'mnas' => 50, 'mspy' => 50);
        $tools = array('bro' => false, 'pao' => false, 'mnas' => false, 'mspy' => false);
        $numberOfPurchases = sizeof($request->tool);
        $purchaseTotal = 0;

        foreach($request->tool as $tool){
            $purchaseTotal += $toolPrices[$tool];
            $tools[$tool] = true;
        }

        // 10% discount
        if($numberOfPurchases == 2){
            $purchaseTotal /= 1.1;
        }
        // 20% discount
        if($numberOfPurchases == 3){
            $purchaseTotal /= 1.2;
        }
        // 30% discount
        if($numberOfPurchases == 4){
            $purchaseTotal /= 1.3;
        }

        $finalTotal = round($purchaseTotal);

        $purchase = new Purchase;
        $purchase->email = $request->email;
        $purchase->username = $request->username;
        $purchase->bro = ($tools['bro'] == true) ? true :false;
        $purchase->pao = ($tools['pao'] == true) ? true :false;
        $purchase->mnas = ($tools['mnas'] == true) ? true :false;
        $purchase->mspy = ($tools['mspy'] == true) ? true :false;
        $purchase->confirm_tv = ($request->confirm_tv == 'on') ? true : false;
        $purchase->agree_terms = ($request->agree_terms == 'on') ? true : false;
        $purchase->payment_type = 'Not Paid';
        $purchase->is_paid = false;
        $purchase->total = $finalTotal;

        // Save the preliminary purchase
  		if(! $purchase->save()){
  			// Return error is save didnt work
            return back()->with('error', 'Connection problem.');
  		}

        return redirect()->route('checkout', [$purchase->id]);

        //echo $finalTotal;
        //print_r($purchase->toArray());
    }

    /*
    >> 1. Recieve confirmation from PayPal
    >> 2. Add purchase to database
    >> 3. Give user confirmation
    */
    public function viewCheckout($order)
    {
        $purchase = Purchase::findOrFail($order);

        if(! $purchase->is_paid){

            return view('checkout', $purchase->toArray());

        } else {

            return view('error', ['msg' => 'It looks like this order was already paid for.']);

        }

    }

    public function finalizePayPal(FinalizePayPal $request)
    {
        $purchase = Purchase::findOrFail($request->purchase_id);

        if($purchase->total != $request->payment_amount){
            // Failed response
	        return response()->json([
	            'result' => 'error',
	            'message' => 'Payment amount did not match expected amount.'
	        ], 422);
        }

        // Set proper values
        $purchase->paypal_id = $request->paypal_id;
        $purchase->payment_type = 'PayPal';
        $purchase->is_paid = true;

        if(! $purchase->save()){
  			// Return error is save didnt work
            return back()->with('error', 'Problem updating order status.');
  		}

        $tools = array('bro' => $purchase->bro, 'pao' => $purchase->pao, 'mnas' => $purchase->mnas, 'mspy' => $purchase->mspy);

        $properties = [
  			'username' => $purchase->username,
  			'total' => $purchase->total,
  			'tools' => $tools,
            'order_number' => $purchase->id
        ];

        $toAddress = $purchase->email;

    	Mail::to($toAddress)->send(new OrderConfirmed($properties));

        // Successful response
        return response()->json([
            'result' => 'success',
            'message' => 'Order was completed successfully.'
        ], 200);

    }

    // public function testEmail($id)
    // {
    //     $purchase = Purchase::findOrFail($id);
    //
    //     $tools = array('bro' => $purchase->bro, 'pao' => $purchase->pao, 'mnas' => $purchase->mnas, 'mspy' => $purchase->mspy);
    //
    //     $properties = [
  	// 		'username' => $purchase->username,
  	// 		'total' => $purchase->total,
  	// 		'tools' => $tools,
    //         'order_number' => $purchase->id
    //     ];
    //
    //     $toAddress = $purchase->email;
    //
    // 	Mail::to($toAddress)->send(new OrderConfirmed($properties));
    //
    //     // Successful response
    //     return "Success";
    //
    // }


}
