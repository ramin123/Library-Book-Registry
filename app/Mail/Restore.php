<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Restore extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('example@example.com')
            ->subject('Restore Your Account')
            ->markdown('emails.emailTemplates.restore');
    }
}
