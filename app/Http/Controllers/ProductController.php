<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|min:5',
            'slug' => 'required|string|max:255|unique:products,slug',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0|max:100000',
            'discount_price' => 'nullable|numeric|min:0|max:100000',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|max:2048',
            'status' => 'required|boolean',
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $product = Product::where('slug', $slug)->firstorfail();
        if ($product) {

        }
        return response()->json('Product not found', 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255|min:5',
            'slug' => 'nullable|string|max:255|unique:products,slug',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric|min:0|max:100000',
            'discount_price' => 'nullable|numeric|min:0|max:100000',
            'stock' => 'nullable|integer|min:0',
            'image' => 'nullable|image|max:2048',
            'status' => 'nullable|boolean',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $result = Product::where('slug', $slug)->firstorfail();
        if ($result) {
            $result->delete();
            return response()->json(['message' => 'Product deleted successfully.'], 200);
        }
        else {
            return response()->json(['message' => 'Product not found.'], 404);
    }
}
}
