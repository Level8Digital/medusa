<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;

use Mail;
use App\Mail\GrantAccess;
use App\Mail\NotifyUpdate;

class DashboardController extends Controller
{
    /**
    * Shows the dashboard view with all purchases
    */
    public function viewDashboard()
    {
        // Retrieve all purchases to return to view
        $purchases = Purchase::orderByDesc('is_paid')
                    ->orderBy('paid_at')
                    ->orderBy('access_granted')
                    ->get();

        // Show view with data
        return view('dashboard', ['purchases' => $purchases->toArray()]);
    }

    /**
    * Called by the dashboard view's Notify icon
    * @var int $purchase_id - The purchase identifier
    *
    * Emails the user to notify that their access was granted and toggles flags
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
            return redirect('/dashboard')->with('error', 'Problem granting access to the user!');
  		}

        // For the email
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

        // Get the supplement PDF
        $pdf = public_path('misc/Olympus-Cloud-Supplement.pdf');

        // Set up the email properties
        $properties = [
  			'username' => $purchase->username,
            'access' => $description,
  			'total' => $purchase->total,
            'order_number' => $purchase->id,
            'file' => $pdf
        ];

        // User email address
        $toAddress = $purchase->email;

        // Send the email
    	Mail::to($toAddress)->send(new GrantAccess($properties));

        // Show the terms view
        return redirect('/dashboard')->with('success', 'Access was granted to the user!');

    }

    /**
    * Called by the dashboard view's Notify Update icon
    *
    * Emails all confirmed users to notify that the Olympus Cloud was updated and they can access new features.
    */
    public function notifyUpdate()
    {
        // Retrieve all purchases to notify of update
        $purchases = Purchase::orderByDesc('is_paid')
                    ->orderBy('paid_at')
                    ->orderBy('access_granted')
                    ->get();

        forEach($purchases->toArray() as $purchase){
            // Set up the email properties
            $properties = [
                'username' => $purchase['username']
            ];

            // User's email address
            $toAddress = $purchase['email'];

            // Send the email
            Mail::to($toAddress)->send(new NotifyUpdate($properties));
        }

        // Show the terms view
        return redirect('/dashboard')->with('success', 'Users were notified about the update!');

    }

}
