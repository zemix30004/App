<?php

namespace App\Listeners;

use App\Models\Order;
use App\Events\OrderEvent;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class TelegramListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     //
    // }

    /**
     * Handle the event.
     *
     * @param  OrderEvent  $event
     * @return void
     */
    public function handle(OrderEvent $event)
    {
        $ch = curl_init();
        $url = config('telegram.url');
        $message = '<b>Новый заказ от:</b>' . PHP_EOL > $event->order->name . PHP_EOL . $event->order->email . PHP_EOL . $event->order->telephone;
        $data = [
            'chat_id' => config('telegram.telegram_id'),
            'parse_mode' => 'html',
            'disable_web_page_preview' => 'true',
            'text' => $message,
        ];
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $url);
        curl_exec($ch);
        curl_close($ch);
    }
}
