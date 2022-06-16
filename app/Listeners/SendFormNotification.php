<?php

namespace App\Listeners;

use App\Events\FormSended;
use App\Mail\FormFilled;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendFormNotification 
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\FormSended  $event
     * @return void
     */ 
    public function handle(FormSended $event)
    {
        Mail::to("pasha@brevis.ru")->send(new FormFilled($event->webform));
        //$event->webform;
    }
}
