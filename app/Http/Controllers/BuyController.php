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

        if($access == 'three-month'){
            $description = 'Three month access';
            $price = 75;
        } elseif($access == 'year'){
            $description = 'One year access';
            $price = 125;
        } elseif($access == 'lifetime'){
            $description = 'Lifetime access';
            $price = 200;
        }

        $tax = $price * 0.05;

        // Show view
        return view('purchase', ['access_desc' => $description, 'access' => $access, 'price' => $price, 'tax' => $tax, 'total' => $price + $tax]);
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
    public function proceedToCheckout(BuyForm $request)
    {
        // Check for humanity
        if(session('QbX4176lUU/*&%rT#@') != $request->math_question){
    		// Return error is save didnt work
            return back()->withErrors(['You have answered the math question incorrectly. Try again.'])->withInput();
        }

        // Cache the access
        $access = $request->access;

        // The cost
        $price = 0.0;

        // Determine the price
        if($access == 'three-month'){
            $price = 75;
        } elseif($access == 'year'){
            $price = 125;
        } elseif($access == 'lifetime'){
            $price = 200;
        }
        // Calculate and round final total with GST (tax)
        $total = round($price * 1.05, 2);

        // Add all options the the purchase model for saving
        $purchase = new Purchase;
        $purchase->email = $request->email;
        $purchase->username = $request->username;
        $purchase->access = $access;
        $purchase->confirm_tv = ($request->confirm_tv == 'on') ? true : false;
        $purchase->agree_terms = ($request->agree_terms == 'on') ? true : false;
        $purchase->total = $total;

        // Save the preliminary purchase -- NOT YET PAID FOR!
  		if(! $purchase->save()){
  			   // Return error is save didnt work
           return back()->withErrors(['Connection problem.'])->withInput();

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

          $description = '';

          if($purchase->access == 'three-month'){
              $description = 'Three Month Access';
          } elseif($purchase->access == 'year'){
              $description = 'One Year Access';
          } elseif($purchase->access == 'lifetime'){
              $description = 'Lifetime Access';
          }

          // Show checkout view
          return view('checkout', ['purchase' => $purchase->toArray(), 'access_desc' => $description ]);

        } else {
            // Show error view if purchase is already paid
            return view('problem', ['msg' => 'It looks like this order was already paid for']);
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
