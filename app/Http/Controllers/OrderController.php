<?php

namespace App\Http\Controllers;

use App\Events\OrderCreated;
use App\Models\Area;
use App\Models\Category;
use App\Models\Order;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->get();
        return view('order')->with(['orders' => $orders, 'areas' => Area::all(), 'users' => User::all(),  'categories' => Category::all() ]);
    }

    public function store(Request $request)
    {
        $order = Order::create([
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'area' => $request->area,
            'address' => $request->address,
            'weight' => $request->weight,
            'price' => $request->price ?? 0
        ]);

        OrderCreated::dispatch($order);

        return redirect()->back();
    }

    public function accept(Order $order, Request $request)
    {
        $order->update(['status' => '1', 'edited_by' => $request->edited,]);
        return redirect()->back()->with('success', 'Order accepted successfully.');
    }

    public function reject(Order $order, Request $request)
    {
        $order->update(['status' => '2', 'edited_by' => $request->edited,]);
        return redirect()->back()->with('success', 'Order rejected successfully.');
    }
}
