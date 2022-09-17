<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.category.categories', ['categories'=>$categories]);
    }
    public function store (Request $request){
        $this->validate($request,[
            'name'=>'required| min:2 | max:20'
        ]);
        $category = new Category();
        $category->name = $request->name;
        if ($category->save()){
            return redirect()->route('allCategories')->with('success', 'Category created successfully.');
        }
    }
    public function indexApi(){
        $categories = Category::all();
        return response([
            'status'=>true,
            'data'=>$categories
        ]);
    }
}
