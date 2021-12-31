<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;

use Mail;
use App\Mail\GrantAccess;

class DashboardController extends Controller
{
    public function viewDashboard()
    {
        $purchases = Purchase::orderBy('created_at')
                        ->orderBy('is_paid')
                        ->get();

        return view('dashboard', ['purchases' => $purchases->toArray()]);
    }

    public function notifyAccess($purchase_id)
    {
        $purchase = Purchase::findOrFail($purchase_id);
        $purchase->access_granted = true;

        if(! $purchase->save()){
  			// Return error is save didnt work
            return back()->with('error', 'Problem updating access flag.');
  		}


        $tools = array('bro' => $purchase->bro, 'pao' => $purchase->pao, 'mnas' => $purchase->mnas, 'mspy' => $purchase->mspy);

        $properties = [
  			'username' => $purchase->username,
  			'total' => $purchase->total,
  			'tools' => $tools,
            'order_number' => $purchase->id
        ];

        $toAddress = $purchase->email;

    	Mail::to($toAddress)->send(new GrantAccess($properties));

        $purchases = Purchase::orderBy('created_at')
                        ->orderBy('is_paid')
                        ->get();

        return view('dashboard', ['success' => 'Access granted flag was toggled.', 'purchases' => $purchases->toArray()]);
    }

}
