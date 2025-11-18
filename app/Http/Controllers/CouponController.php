<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponController extends Controller
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
    'code' => 'required|string|max:255|unique:coupons,code',
    'discount_amount' => 'required|numeric|min:0',
    'description' => 'nullable|string',
    'expiry_date' => 'nullable|date|after_or_equal:today',
    'usage_limit' => 'nullable|integer|min:1',
    'min_order_amount' => 'required|integer|min:0',
    'is_active' => 'required|boolean',
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
        $result = Coupon::where('id', $id)->firstorfail();
        if ($result) {
            $result->delete();
            return response()->json(['message' => 'Coupon deleted successfully.'], 200);
        }
        else {
            return response()->json(['message' => 'Coupon not found.'], 404);
    }
    }
}
