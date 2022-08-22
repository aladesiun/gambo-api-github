<?php

namespace App\Http\Controllers;

use App\Http\Requests\productRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(productRequest $request)
    {
        $product = Product::create($request->validate()+[
                'name' => $request->name,
                'description' => $request->description,
                'purchase_price' => $request->purchase_price,
                'price' => $request->price,
                'bulk_price' => $request->bulk_price,
                'unit_stock' => $request->unit_stock,
                'stock' => $request->stock,
                'image' => $request->image,
                'instock' => $request->instock,
                'barcode' => $request->barcode,
                'manufacturer' => $request->manufacturer,
                'supplier' => $request->supplier,
            ]);
        return new Product($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
