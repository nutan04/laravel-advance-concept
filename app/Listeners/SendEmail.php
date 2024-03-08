<?php

namespace App\Listeners;

use App\Event\UserCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserCreated $event): void
    {
        print_r($event->email);
        //We can send a mail from here
        echo ".. From Listeners";
        exit;
    }
}
