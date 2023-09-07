<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
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
            'name' => 'required',
            'price' => 'required|numeric|min:1|max:9999.99',
            'image' => 'required',
        ]);

        if($request->image){
            Products::create([
                'name'=> $request->name,
                'price'=> $request->price,
                // 'img'=> $request->img,
                'image' => $request->file('image')->store('images','public'),
            ]);
        return back()->with('message','Your Product has been posted successfully');
        }
        Products::create([
            'name'=> $request->name,
            'price'=> $request->price,
        ]);

        return back()->with('message','Your Product has been posted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $product)
    {
        return view('navs.productpage',['product'=>$product]);
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
        $product=Products::destroy($id);
        return back()->with('message','The Product has been deleted successfully');
    }
}
