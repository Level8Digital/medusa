<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GrantAccess extends Mailable
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
        $this->subject('Access Granted | Medusa Money')
          ->replyTo(env('MAIL_FROM_ADDRESS'))
          ->view('access-granted');

         return $this;
    }
}
