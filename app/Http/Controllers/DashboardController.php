<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;

use Mail;
use App\Mail\GrantAccess;

class DashboardController extends Controller
{
    /*
    >> Shows the dashboard view with all purchases
    */
    public function viewDashboard()
    {
        // Retrieve the purchases
        $purchases = Purchase::orderBy('created_at')
                        ->orderBy('is_paid')
                        ->get();

        // Show view with data
        return view('dashboard', ['purchases' => $purchases->toArray()]);
    }

    /*
    >> Called by the dashboard view -- notify icon
    >>
    >> Emails the user corresponding to the purchase to notify that their access was granted and toggles flags
    */
    public function notifyAccess($purchase_id)
    {
        // Retrieve the purchase
        $purchase = Purchase::findOrFail($purchase_id);
        // Toggle flag
        $purchase->access_granted = true;

        // Save the purchase
        if(! $purchase->save()){
  			// Return error is save didnt work
            return back()->with('error', 'Problem updating access flag.');
  		}

        // Determine the purchased tools
        $tools = array('bro' => $purchase->bro, 'pao' => $purchase->pao, 'mnas' => $purchase->mnas, 'mspy' => $purchase->mspy);

        // Set up the email properties
        $properties = [
  			'username' => $purchase->username,
  			'total' => $purchase->total,
  			'tools' => $tools,
            'order_number' => $purchase->id
        ];
        // User email address
        $toAddress = $purchase->email;

        // Send the email
    	Mail::to($toAddress)->send(new GrantAccess($properties));

        // Retrieve all purchases to return to view
        $purchases = Purchase::orderBy('created_at')
                        ->orderBy('is_paid')
                        ->get();

        // Show view with success message and data
        return view('dashboard', ['success' => 'Access granted flag was toggled.', 'purchases' => $purchases->toArray()]);
    }

}
