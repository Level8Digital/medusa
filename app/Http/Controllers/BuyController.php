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

    /*
    >> Shows the buy now view while adding the random math question and answr to the session
    */
    public function viewPurchase($access)
    {
        // Set up 'antibot' style 'captcha' for contact form
  	    $numberConversion = array(
  	       0 => 'zero', 1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four', 5 => 'five',
  	       6 => 'six', 7 => 'seven', 8 =>'eight', 9 => 'nine', 10 => 'ten'
  	    );
  	    // Produce random numbers
  	    $numberOne = rand( 0, 6 );
  	    $numberTwo = rand( 0, 6 );
  	    // Add random math question and answer to the session for usage later
  	    session(['a12Ty9UkJ1!$%125Hgye' => 'What is ' . $numberConversion[$numberOne] .
  	    					' added to ' . $numberConversion[$numberTwo] . '?', 'QbX4176lUU/*&%rT#@' => $numberOne + $numberTwo]);

        $description = '';
        $price = 0;

        if($access == 3)
            $description = 'Three month access';
            $price = 75;

        if($access == 12)
            $description = 'One year access';
            $price = 125;

        if($access == 'full')
          $description = 'Lifetime access';
          $price = 200;

        $tax = $price * 0.05;

        // Add access to session
        session(['access' => $description, 'price' => $price, 'tax' => $tax, 'total' => $price + $tax]);

        // Show view
        return view('purchase');
    }

    /*
    >> Shows the standard view terms view
    */
    public function viewTerms()
    {

        return view('terms');
    }

    /*
    >> Called by the buy now form
    >>
    >> Calculates the total due at checkout,adds the unpaid purchase to the db, and shows the checkout view
    */
    public function proceedToPayment(BuyForm $request)
    {
        // Check for humanity
        if(session('QbX4176lUU/*&%rT#@') != $request->math_question){
    		// Return error is save didnt work
            return back()->with('error', 'You have answered the math question incorrectly. Try again.')->withInput();
        }

        // Helper for tool prices -- array prices could come from a db if needed
        $toolPrices = array('bro' => 15, 'pao' => 35, 'mnas' => 50, 'mspy' => 50);
        // Helper for user selected tools -- user selected tools get flagged true
        $tools = array('bro' => false, 'pao' => false, 'mnas' => false, 'mspy' => false);

        // How many tools the user is purchasing
        $numberOfPurchases = sizeof($request->tool);
        // Price the the purchase
        $purchaseTotal = 0;

        // Caclulate the purchase total and flag the correct tools
        foreach($request->tool as $tool){
            // Price
            $purchaseTotal += $toolPrices[$tool];
            // Selected tools
            $tools[$tool] = true;
        }

        /* >> Calculate any potential discount
        */
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
        // Round final discounted total
        $finalTotal = round($purchaseTotal);

        // Add all options the the purchase model for saving
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

        // Save the preliminary purchase -- NOT YET PAID FOR!
  		if(! $purchase->save()){
  			// Return error is save didnt work
            return back()->with('error', 'Connection problem.');
  		}

        // Return view for payment info
        return redirect()->route('checkout', [$purchase->id]);

    }

    /*
    >> Shows the checkout / payment view for a specific purchase
    >>
    >> Once the purchase is paid for, this view is no longer available to the user
    */
    public function viewCheckout($order)
    {
        // Retrieve the preliminary purchase
        $purchase = Purchase::findOrFail($order);

        // Only show the checkout view if the purchase is unpaid
        if(! $purchase->is_paid){
            // Show checkout view
            return view('checkout', $purchase->toArray());

        } else {
            // Show error view if purchase is already paid
            return view('error', ['msg' => 'Rest easy. It looks like this order was already paid for.']);
        }
    }

    /*
    >> Called by the PayPal JS callback in the checkout view when payment is successful
    >>
    >> Add the PayPal id to the purchase, adjusts flags, and sends confirmation email to user
    */
    public function finalizePayPal(FinalizePayPal $request)
    {
        // Retrieve the purchase
        $purchase = Purchase::findOrFail($request->purchase_id);

        // Ensure that the payment amount matches the expected total - but continue on regardless
        // Do not want the stop the proccess so the user does not try to pay again even on a descrepancy
        if($purchase->total != $request->payment_amount){
            // Flag an error is there is a descrepancy
            $purchase->payment_issue = true;
        }

        // Update purchase values
        $purchase->paypal_id = $request->paypal_id;
        $purchase->payment_type = 'PayPal';
        $purchase->is_paid = true;
        $purchase->paid_total = $request->payment_amount;

        // Save the purchase
        if(! $purchase->save()){
  			// Return error is save didnt work
            return back()->with('error', 'Problem updating order status.');
  		}

        // Determine what tools the user purchased
        $tools = array('bro' => $purchase->bro, 'pao' => $purchase->pao, 'mnas' => $purchase->mnas, 'mspy' => $purchase->mspy);

        // Set up confirmation email properties
        $properties = [
  			'username' => $purchase->username,
  			'total' => $purchase->total,
  			'tools' => $tools,
            'order_number' => $purchase->id
        ];
        // Users email address
        $toAddress = $purchase->email;
        // Send the confirmation email
    	Mail::to($toAddress)->send(new OrderConfirmed($properties));

        // Return response to PayPal JS callback
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
