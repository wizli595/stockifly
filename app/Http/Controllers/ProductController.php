<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();
        return view("products.index",compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("products.crete");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $product=new Product();
        $product->product_name=$request->product_name;
        $product->product_code=$$request->product_code;
        $product->buying_price=$$request->buying_price;
        $product->selling_price=$$request->selling_price;
        $product->stock=$$request->stock;

        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product_name=$request->input("product_name");
        $product_code=$request->input("product_code");
        $buying_price=$request->input("buying_price");
        $selling_price=$request->input("selling_price");
        $stock=$request->input("stock");

        $product->product_name=$product_name;
        $product->product_code=$product_code;
        $product->buying_price=$buying_price;
        $product->selling_price=$selling_price;
        $product->stock=$stock;

        $product->update();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Book deleted successfully!');
    }
}
