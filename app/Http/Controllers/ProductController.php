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
        $result = ['name'=> 'index' , 'payload'=>Product::all()];
        return $result;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create([
            "product_name"=> $request->pd_name,
            "product_type"=> $request->pd_type,
            "price"=> $request->pd_price,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payload = Product::find($id);
        return ['name' => 'show' , 'payload' => $payload];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product ::find($id);
        $product->product_name = $request->pd_name;
        $product->save();

        return "Updated Successful";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();

        return "Delete Successful";
    }
}
