<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TicketMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = "Ticket de Recarga | Mediaground";
    public $msg_1;
    public $msg_2;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message_1, $message_2)
    {
        //
        $this->msg_1 = $message_1;
        $this->msg_2 = $message_2;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('dashboard.emails.ticket');
    }
}
