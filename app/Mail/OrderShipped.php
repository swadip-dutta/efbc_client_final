<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Register;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        return $this->data = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
  
        return $this->from('2183091033@uttarauniversity.edu.bd')
        ->view('mail/conform_mail');
    }
}
