<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormFilled extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $webform ;
    public function __construct(\App\Models\WebForm $webFormResult)
    {
        $this->webform = $webFormResult;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('pdmitrievich@gmail.com', 'New message from callback form was created')
                    ->view('emails.forms.feedback');
    }
}
