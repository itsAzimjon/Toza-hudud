<?php

namespace App\Http\Controllers\Api;

use App\Events\OrderCreated;
use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\Base;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrderApiController extends Controller
{
    public function index()
    {
        $userId = auth()->id();

        $orders = Order::where('user_id', $userId)->latest()->get();
        $baseRecords = Base::where('client_id', $userId)->latest()->get();
        $combinedResults = $orders->merge($baseRecords)->sortByDesc('created_at');
        $combinedResultsResource = OrderResource::collection($combinedResults);

        return $combinedResultsResource;
    }

    public function store(Request $request)
    {
        $order = Order::create([
            'user_id' => auth()->id(),
            'area' => auth()->user()->area->name,
            'address' => auth()->user()->address,
            'category_id' => $request->category_id,
            'status' => $request->status ?? 3,
            'weight' => $request->weight,
            'price' => $request->price ?? 1
        ]);
          
    
        OrderCreated::dispatch($order);
    
        return response()->json(['message' => 'Order created successfully'], 201);
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $base = Base::find($id);

        $base->update([
            'status' => $request->input('status'),
        ]);

        return response()->json(['message' => 'Resource updated successfully'], 200);
    }


}
