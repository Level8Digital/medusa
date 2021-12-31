<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderConfirmed extends Mailable
{
    use Queueable, SerializesModels;

    public $messageDetails;

    /**
     * Create a new message instance.
     *
     */
     public function __construct(Array $messageDetails)
     {
         $this->messageDetails = $messageDetails;
     }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Order Confirmation | medusamoney.com')
          ->replyTo(env('MAIL_FROM_ADDRESS'))
          ->view('confirmation-email');

         return $this;
    }
}
