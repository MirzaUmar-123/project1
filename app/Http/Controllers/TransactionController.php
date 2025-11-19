<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
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
    'order_id' => 'required|integer|exists:orders,id',
    'amount' => 'required|numeric|min:0',
    'type' => 'required|in:charge,refund,payout',
    'gateway' => 'required|string|max:255',
    'reference' => 'required|string|max:255|unique:transactions,reference',
    'status' => 'required|in:pending,completed,failed',
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
    'user_id' => 'nullable|integer|exists:users,id',
    'order_id' => 'nullable|integer|exists:orders,id',
    'amount' => 'nullable|numeric|min:0',
    'type' => 'nullable|in:charge,refund,payout',
    'gateway' => 'nullable|string|max:255',
    'reference' => 'nullable|string|max:255|unique:transactions,reference',
    'status' => 'nullable|in:pending,completed,failed',
]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = Transaction::where('id', $id)->firstorfail();
        if ($result) {
            $result->delete();
            return response()->json(['message' => 'Transaction deleted successfully.'], 200);
        }
        else {
            return response()->json(['message' => 'Transaction not found.'], 404);
    }
    }
}
