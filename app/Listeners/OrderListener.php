<?php

namespace App\Listeners;

use App\Events\OrderEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class OrderListener
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
     * @param  OrderEvent  $event
     * @return void
     */
    public function subscribe($events)
    {
        $events->listen(
            TelegramListener::class,
            [OrderEvent::class, 'handleTelegram']
        );

        $events->listen(
            EmailListener::class,
            [OrderEvent::class, 'handleEmail']
        );
    }
}
//     public function handle(OrderEvent $event)
//     {
//         //
//     }
// }
