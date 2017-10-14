<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AlumniRegistration extends Mailable
{
    use Queueable, SerializesModels;

    public $alumni;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($alumni)
    {
        $this->alumni = $alumni;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.alumni-registration')
                    ->subject('Spena Alumni Registration Notification');
    }
}
