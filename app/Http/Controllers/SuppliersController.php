<?php

namespace App\Http\Controllers;

use App\Models\Suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers=Suppliers::all();
        return view("suppliers.index",compact("suppliers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("suppliers.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $supplier=new Suppliers();
        $supplier->name=$request->name;
        $supplier->email=$$request->email;
        $supplier->phone=$$request->phone;
        $supplier->adresse=$$request->adresse;

        $supplier->save();
        return redirect()->route('suppliers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Suppliers $supplier)
    {
        return view("suppliers.show",compact("supplier"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Suppliers $supplier)
    {
        return view("suppliers.edit",compact("supplier"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Suppliers $supplier)
    {
        $supplier=new Suppliers();
        $supplier->name=$request->name;
        $supplier->email=$$request->email;
        $supplier->phone=$$request->phone;
        $supplier->adresse=$$request->adresse;

        $supplier->update();
        return redirect()->route('suppliers.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Suppliers $supplier)
    {
        $supplier->delete();
        return redirect()->route('suppliers.index');
    }
}
