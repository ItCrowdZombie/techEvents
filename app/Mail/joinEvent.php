<?php

namespace App\Mail;

use App\Models\Event;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class joinEvent extends Mailable
{
    use Queueable, SerializesModels;

    // public $user = new User::class();
    public $data;
    // public $link = User::class()->link;
    // public $newMail;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     

    public function __construct($data)
    {
        $this->data= $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.joinEvents');
    }
}
