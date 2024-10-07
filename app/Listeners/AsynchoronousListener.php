<?php

namespace App\Listeners;

use App\Events\asynchoronousEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class AsynchoronousListener implements ShouldQueue
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
        public function handle(asynchoronousEvent $event)
    {
        sleep(5);//sleep for 5 seconds
        Log::info('Asynchronous Event Triggered: ' . $event->message);
    }
}
