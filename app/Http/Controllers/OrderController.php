<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
    'user_id' => 'required|integer|exists:users,id',
    'order_number' => 'required|string|max:255|unique:orders,order_number',
    'status' => 'required|in:pending,paid,shipped,delivered,cancelled',
    'total_amount' => 'required|numeric|min:0',
    'payment_method' => 'required|string|max:255',
    'shipping_address' => 'required|string',
    'billing_address' => 'required|string',
]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = Order::where('id', $id)->firstorfail();
        if ($result) {
            $result->delete();
            return response()->json(['message' => 'Order deleted successfully.'], 200);
        }
        else {
            return response()->json(['message' => 'Order not found.'], 404);
    }
    }
}
