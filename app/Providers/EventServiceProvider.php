<?php

namespace App\Providers;

use App\Listeners\OrderListener;
use App\Listeners\TelegramListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        OrderEvent::class => [
            TelegramListener::class,
        ]
        // Registered::class => [
        //     SendEmailVerificationNotification::class,
        // ],
    ];
    protected $subscribe = [
        OrderListener::class,
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    // public function boot()
    // {
    //     //
    // }
}
