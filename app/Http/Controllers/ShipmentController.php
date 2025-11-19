<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipment;

class ShipmentController extends Controller
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
    'order_id' => 'required|integer|exists:orders,id',
    'tracking_number' => 'required|string|max:255|unique:shipments,tracking_number',
    'carrier' => 'required|string|max:255',
    'status' => 'required|in:pending,shipped,delivered',
    'shipped_at' => 'nullable|date',
    'delivered_at' => 'nullable|date|after_or_equal:shipped_at',
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
        $request->validate([
    'order_id' => 'nullable|integer|exists:orders,id',
    'tracking_number' => 'nullable|string|max:255|unique:shipments,tracking_number',
    'carrier' => 'nullable|string|max:255',
    'status' => 'nullable|in:pending,shipped,delivered',
    'shipped_at' => 'nullable|date',
    'delivered_at' => 'nullable|date|after_or_equal:shipped_at',
]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = Shipment::where('id', $id)->firstorfail();
        if ($result) {
            $result->delete();
            return response()->json(['message' => 'Shipment deleted successfully.'], 200);
        }
        else {
            return response()->json(['message' => 'Shipment not found.'], 404);
    }
    }
}
