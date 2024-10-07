<?php

namespace App\Providers;

use App\Events\DemoEvent;
use App\Events\asynchoronousEvent;
use App\Listeners\SynchonousDemoListener;
use App\Listeners\AsynchoronousListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        DemoEvent::class => [
            SynchonousDemoListener::class,
        ],
        asynchoronousEvent::class => [
            AsynchoronousListener::class,
        ],
    ];

    public function boot()
    {
        //
    }
}
