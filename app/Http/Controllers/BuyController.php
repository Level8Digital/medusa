<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PurchaseForm;
use App\Http\Requests\TermsForm;
use App\Http\Requests\FinalizePayPal;
use Mail;

use App\Mail\OrderConfirmed;
use App\Models\Purchase;

class BuyController extends Controller
{

    /**
    * Shows the Purchase view while adding the random math question and answr to the session
    * @var string $access - the requested access period to purchase
    */
    public function viewPurchase($access)
    {
        // ------------------------------------------------------------------------------------------------------------------------
        // Set up a few things before proceeding...

        // Converts numbers to strings
  	    $numberConversion = array(
  	       0 => 'zero', 1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four', 5 => 'five',
  	       6 => 'six', 7 => 'seven', 8 =>'eight', 9 => 'nine', 10 => 'ten'
  	    );
        // For decoding the math answer on the other size
        $numberHash = array(
  	       0 => 'bT0ZzjNyLj', 1 => '0yRh8DPpvZ', 2 => 'Ppr7rcoJ96', 3 => '84JEizZhJO', 4 => 'NgdJEq31SL', 5 => '0Yomhm4gGW',
  	       6 => 'cLfsK0MdCv', 7 => 'yTAI0eOTl0', 8 =>'xHf0BGj2Eb', 9 => 'h90k6BEj2z', 10 => 'Y0vhkHmE8F', 11 => 'NLhTuZWPRG',
           12 => 'QDy8tZhdll', 13 => 'Fw5Oa8GMrg', 14 => '1b1msj9IVv', 15 => 'zu5S2vQn92', 16 => '2R8Q9MzDYw', 17 => '07aT3Ls2Gr',
           18 => 'OnDfGcMNln', 19 => 'bIQ03pAxPX', 20 => 'VBp8WtggWj'
  	    );
  	    // Produce random numbers
  	    $numberOne = rand(0, 6);
  	    $numberTwo = rand(0, 6);

  	    // Construct random math question
  	    $mathQuestion = 'What is ' . $numberConversion[$numberOne] . ' added to ' . $numberConversion[$numberTwo] . '?';

        // Determine random math answer in form of secret number hash
        $mathAnswer = $numberHash[$numberOne + $numberTwo];

        // Ensure the access period is an acceptable string
        if($access != 'lifetime' && $access != 'year' && $access != 'three-month'){
            // Show error view if the trading view account already has lifetime access
            return view('problem', ['msg' => "We don't recognize this access period"]);
        }

        // ------------------------------------------------------------------------------------------------------------------------

        // For returning - gets changed later
        $description = '';
        $price = 0;

        // Determine the access period based on user selection
        if($access == 'lifetime'){
            $description = 'Lifetime access';
            $price = 250;
        }
        elseif($access == 'year'){
            $description = 'One year access';
            $price = 150;
        }
        elseif($access == 'three-month'){
            $description = 'Three month access';
            $price = 55;
        }

        // Calculate the tax amount
        $tax = $price * 0.05;

        // Show view with the required variables
        return view('purchase', ['math_question' => $mathQuestion, 'math_answer' => $mathAnswer, 'access_desc' => $description, 'access' => $access, 'price' => $price,
                    'tax' => $tax, 'total' => $price + $tax]);
    }

    /**
    * Shows the Purchase view while adding the random math question and answr to the session
    * @var string $access - the requested access period to purchase
    */
    public function addReferralCode($access)
    {
        // ------------------------------------------------------------------------------------------------------------------------
        // Set up a few things before proceeding...

        // Converts numbers to strings
  	    $numberConversion = array(
  	       0 => 'zero', 1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four', 5 => 'five',
  	       6 => 'six', 7 => 'seven', 8 =>'eight', 9 => 'nine', 10 => 'ten'
  	    );
        // For decoding the math answer on the other size
        $numberHash = array(
  	       0 => 'bT0ZzjNyLj', 1 => '0yRh8DPpvZ', 2 => 'Ppr7rcoJ96', 3 => '84JEizZhJO', 4 => 'NgdJEq31SL', 5 => '0Yomhm4gGW',
  	       6 => 'cLfsK0MdCv', 7 => 'yTAI0eOTl0', 8 =>'xHf0BGj2Eb', 9 => 'h90k6BEj2z', 10 => 'Y0vhkHmE8F', 11 => 'NLhTuZWPRG',
           12 => 'QDy8tZhdll', 13 => 'Fw5Oa8GMrg', 14 => '1b1msj9IVv', 15 => 'zu5S2vQn92', 16 => '2R8Q9MzDYw', 17 => '07aT3Ls2Gr',
           18 => 'OnDfGcMNln', 19 => 'bIQ03pAxPX', 20 => 'VBp8WtggWj'
  	    );
  	    // Produce random numbers
  	    $numberOne = rand(0, 6);
  	    $numberTwo = rand(0, 6);

  	    // Construct random math question
  	    $mathQuestion = 'What is ' . $numberConversion[$numberOne] . ' added to ' . $numberConversion[$numberTwo] . '?';

        // Determine random math answer in form of secret number hash
        $mathAnswer = $numberHash[$numberOne + $numberTwo];

        // Ensure the access period is an acceptable string
        if($access != 'lifetime' && $access != 'year' && $access != 'three-month'){
            // Show error view if the trading view account already has lifetime access
            return view('problem', ['msg' => "We don't recognize this access period"]);
        }

        // ------------------------------------------------------------------------------------------------------------------------

        // For returning - gets changed later
        $description = '';
        $price = 0;

        // Determine the access period based on user selection
        if($access == 'lifetime'){
            $description = 'Lifetime access';
            $price = 250;
        }
        elseif($access == 'year'){
            $description = 'One year access';
            $price = 150;
        }
        elseif($access == 'three-month'){
            $description = 'Three month access';
            $price = 55;
        }

        // Calculate the tax amount
        $tax = $price * 0.05;

        // Show view with the required variables
        return view('purchase', ['math_question' => $mathQuestion, 'math_answer' => $mathAnswer, 'access_desc' => $description, 'access' => $access, 'price' => $price,
                    'tax' => $tax, 'total' => $price + $tax]);
    }

    /**
    * Called by the Purchase form/request
    *
    * Calculates the total due at checkout, adds the unpaid purchase to the db, and shows the agree to terms view
    */
    public function startPurchase(PurchaseForm $request)
    {
        // ------------------------------------------------------------------------------------------------------------------------
        // A few checks required before proceeding...

        // For determining math answer
        $numberHash = array(
  	       0 => 'bT0ZzjNyLj', 1 => '0yRh8DPpvZ', 2 => 'Ppr7rcoJ96', 3 => '84JEizZhJO', 4 => 'NgdJEq31SL', 5 => '0Yomhm4gGW',
  	       6 => 'cLfsK0MdCv', 7 => 'yTAI0eOTl0', 8 =>'xHf0BGj2Eb', 9 => 'h90k6BEj2z', 10 => 'Y0vhkHmE8F', 11 => 'NLhTuZWPRG',
           12 => 'QDy8tZhdll', 13 => 'Fw5Oa8GMrg', 14 => '1b1msj9IVv', 15 => 'zu5S2vQn92', 16 => '2R8Q9MzDYw', 17 => '07aT3Ls2Gr',
           18 => 'OnDfGcMNln', 19 => 'bIQ03pAxPX', 20 => 'VBp8WtggWj'
  	    );

        // Check for humanity
        if($numberHash[$request->math_answer] != $request->random_token){
    		// Return error is save didnt work
            return back()->withErrors(['You have answered the math question incorrectly. Try again.'])->withInput();
        }

        // Cache the access
        $access = $request->access;

        // Ensure the access period is an acceptable string
        if($access != 'lifetime' && $access != 'year' && $access != 'three-month'){
            // Show error view if the trading view account already has lifetime access
            return view('problem', ['msg' => "We don't recognize this access period"]);
        }

        // ------------------------------------------------------------------------------------------------------------------------
        // Ensure user does not have active access...

        // To determine if the TradingView account already have access, retrieve all possible paid for purchases with this username
        $existingPurchases = Purchase::orderByDesc('expires_at')
                            ->where(['username' => $request->username, 'is_paid' => true])
                            ->get();

        // If there are existing purchases...
        if($existingPurchases->isNotEmpty()){
            // Create the now moment date
            $now = date("Y-m-d", strtotime("now"));

            // Iterate over each possible purchase to check if the access is still valid
            foreach($existingPurchases as $purch){
                // Create date objects for date comparison
                $d1 = date_create($now);
                $d2 = date_create($purch->expires_at);

                // Compare dates to determine how much time left for access
                $interval = date_diff($d1, $d2);
                $timeLeft = $interval->days;

                // If an existing purchase is still within the access period, do not proceed further and return a message to the user
                if($now < $purch->expires_at){
                    // Show error view if the trading view account already has acccess, and indicate remaining amount of days
                    return view('problem', ['msg' => 'It looks like this TradingView account still has access to the Olympus Suite for ' . $timeLeft . ' days. No need to pay again yet!']);
                }
            }

            return print_r($existingPurchases->toArray());


        }

        // ------------------------------------------------------------------------------------------------------------------------
        // If everything checks out...

        // The cost
        $price = 0.0;

        // Determine the price
        if($access == 'lifetime'){
            $price = 250;
        }
        elseif($access == 'year'){
            $price = 150;
        }
        elseif($access == 'three-month'){
            $price = 55;
        }

        // Calculate and round final total with GST (tax)
        $total = round($price * 1.05, 2);

        // Create new purchase
        $purchase = new Purchase;

        // // Add all options the the purchase model for saving
        $purchase->email = $request->email;
        $purchase->username = $request->username;
        $purchase->access = $access;
        $purchase->confirm_tv = ($request->confirm_tv == 'on') ? true : false;
        $purchase->total = $total;

        // Save the preliminary purchase -- NOT YET PAID FOR!
  		if(! $purchase->save()){
      		// Return error is save didnt work
            return back()->withErrors(['Connection problem.'])->withInput();
  		}

        // Show the terms view
        return redirect('/view-terms/' . $purchase->id);

    }

    /**
    * Shows the terms of use page and requires user confirmation before proceeding to payment page
    * @var int $purchase_id - the id of the purchase
    *
    * Once the purchase is paid for, this view is no longer available to the user
    */
    public function viewTerms($purchase_id)
    {
        // Retrieve the preliminary purchase
        $purchase = Purchase::findOrFail($purchase_id);

        // Only show the checkout view if the purchase is unpaid
        if(! $purchase->is_paid){

            // Show checkout view
            return view('view-terms', ['purchase_id' => $purchase->id]);

        } else {
            // Show error view if purchase is already paid
            return view('problem', ['msg' => 'It looks like this order was already paid for']);
        }
    }

    /**
    * Called by the View terms page / confirm terms form
    *
    * Toggles the agree terms boolean in the customers purchase and shows the Pay now view
    */
    public function confirmTerms(TermsForm $request)
    {
        // Retrieve the preliminary purchase
        $purchase = Purchase::findOrFail($request->purchase_id);

        // Only show the checkout view if the purchase is unpaid
        if(! $purchase->is_paid){

            // Toggle and confirm user has agreed to the terms/Disclaimer
            $purchase->agree_terms = ($request->agree_terms == 'on') ? true : false;

            // Save the preliminary purchase -- NOT YET PAID FOR!
      		if(! $purchase->save()){
          		// Return error is save didnt work
                return back()->withErrors(['Connection problem.'])->withInput();
      		}

            // For the view
            $description = '';

            // Create user friendly string based on requested access period
            if($purchase->access == 'lifetime'){
                $description = 'Lifetime Access';
            }
            elseif($purchase->access == 'year'){
                $description = 'One Year Access';
            }
            elseif($purchase->access == 'three-month'){
                $description = 'Three Month Access';
            }



            // Show Pay now view
            return view('pay-now', ['purchase' => $purchase->toArray(), 'access_desc' => $description ]);

        } else {
            // Show error view if purchase is already paid
            return view('problem', ['msg' => 'It looks like this order was already paid for']);
        }

    }

    /**
    * Called by the PayPal JS callback in the checkout view when payment is successful
    *
    * Add the PayPal id to the purchase, adjusts flags, and sends confirmation email to user
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
        $purchase->paid_at = date("Y-m-d", strtotime("now"));

        // For confirmation email
        $description = '';

        // Define the expirary date for the access
        if($purchase->access == 'lifetime'){
            $purchase->expires_at = "4000-12-31";
            $description = 'Lifetime Access';
        }
        elseif($purchase->access == 'year'){
            $purchase->expires_at = date("Y-m-d", strtotime($purchase->paid_at . ' + 365 days'));
            $description = 'One Year Access';
        }
        elseif($purchase->access == 'three-month'){
            $purchase->expires_at = date("Y-m-d", strtotime($purchase->paid_at . ' + 93 days'));
            $description = 'Three Month Access';
        }

        // Save the purchase
        if(! $purchase->save()){
            // Return response to PayPal JS callback
            return response()->json([
                'result' => 'error',
                'message' => 'Problem paying for order.'
            ], 500);
  		}

        // Set up confirmation email properties
        $properties = [
  			'username' => $purchase->username,
            'access' => $description,
  			'total' => $purchase->total,
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
