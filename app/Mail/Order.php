<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Order extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($saved)
    {
        $this->saved = $saved;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = 'TRANPIX';
        $address = env('MAIL_FROM_ADDRESS');
        $subject = 'Tran Order Confirmation, Thank you for placing an order';

        return $this->view('mail.verify')

        ->from($address, $name)
        ->replyTo($address, $name)
        ->subject($subject)
        ->with([
            'saved' => $this->saved,
        ]);
    }
}
