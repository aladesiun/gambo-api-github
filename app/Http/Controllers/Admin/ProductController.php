<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\productResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        if(
            !$this->validate($request, [

                    'purchase_price' => '',
                    'price' => '',
                    'bulk_price' => '',
                    'unit_stock' => '',
                    'stock' => '',
//                    'image' => 'required|mimes:csv,txt,xlx,xls,pdf,png,jpeg|max:2048',
                    'instock' => '',
                    'barcode' => '',
                    'manufacturer' => '',
                    'supplier' => '',

                ]
            )
        ){
            HelperController::flashSession(true, 'an error occured');
            return ;

        }
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->purchase_price = $request->purchase_price;
        $product->price = $request->price;
        $product->bulk_price = $request->bulk_price;
        $product->unit_stock = $request->unit_stock;
        $product->stock = $request->stock;
        $product->active = $request->active;
        $product->instock = 1;
        $product->manufacturer = $request->manufacturer;
        $product->supplier = $request->supplier;
        $product->barcode = mt_rand(100,99999).date('ymdhis');

        $filename = $request->name."".date("YmdHis");
        $product->addMediaFromRequest('image')->usingName($filename)
            ->usingFileName($filename.".".$request->file('image')->getClientOriginalExtension())
            ->toMediaCollection();
        if ($product->save()){
            $category = Category::find($request->category);

            $product->categories()->attach($category);
            return redirect()->route('viewProductPage')->with('success', 'Product created successfully.');

        }
        HelperController::flashSession(true, 'an error occured');
        return redirect()->route('home')->withInput();

    }

    public function index()
    {
        $products = Product::all();
        return view('admin.product.products', ['products'=> $products]);
    }

    public function addPage (){
        $category = Category::all();
        return view('admin.product.add_product', ['categories'=>$category]);
    }

    public function singleProduct ($id){
        $product = Product::where('id', $id)->first();
        return view('admin.product.product', ['product'=>$product]);

    }
}
