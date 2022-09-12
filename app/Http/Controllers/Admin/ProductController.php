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
        $product->category_id = $request->category;
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

        if($product->save()){
            if($request->hasFile('image')){
                $image = $request->file('image');

                //Generate path and file name for file
                $upload_path=storage_path("app/public/blogs-images");
                $filename=date("YmdHis").'.'.$image->getClientOriginalExtension();

                //move image from temp server folder
                $image->move($upload_path, $filename);

                //Save filename to db
                $product->image = $filename;
                $product->save();

            }
            return redirect()->route('home')->with('success', 'Product created successfully.');

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
}
