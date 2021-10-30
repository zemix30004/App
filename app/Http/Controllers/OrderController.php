<?php

namespace App\Http\Controllers;

use App\Models\Order;

use Illuminate\Http\Request;

use app\Events\OrderEvent;

class OrderController extends Controller
{
    public function create()
    {
        return view('order');
    }
    public function store(Request $request)
    {
        $order = Order::create($request->all());
        event(new OrderEvent($order));
        return response()->redirectTo('/order/create');
    }
}
