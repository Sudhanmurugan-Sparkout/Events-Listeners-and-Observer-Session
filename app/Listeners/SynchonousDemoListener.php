<?php

namespace App\Listeners;

use App\Events\DemoEvent;
use Illuminate\Support\Facades\Log;

class SynchonousDemoListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(DemoEvent $event)
    {
        sleep(5);//sleep for 5 seconds
        Log::info('Synchronous Event Triggered: ' . $event->message);
    }
}
