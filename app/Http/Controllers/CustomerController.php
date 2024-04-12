<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers=Customers::all();
        return view("customers.index",compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("customers.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer=new Customers();
        $customer->name=$request->name;
        $customer->email=$$request->email;
        $customer->phone=$$request->phone;

        $customer->save();
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customers $customer)
    {
        return view("customers.show",compact("customer"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customers $customer)
    {
        return view("customers.edit",compact("customer"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customers $customer)
    {
        $customer=new Customers();
        $customer->name=$request->name;
        $customer->email=$$request->email;
        $customer->phone=$$request->phone;

        $customer->update();
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customers $customer)
    {
        $customer->delete();
        return redirect()->route("customers.index");
    }
}
