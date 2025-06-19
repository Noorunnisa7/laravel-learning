<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function ViewCreate(){
        return view("create");
    }

    public function StoreData(Request $request){
       $validation = $request->validate([
        "name" => "string|required|max:100",
        "price" => "integer|required",
        "stock" => "integer|required",
        "description" => "string"
       ]);

       $products =  Product::create($request->all());
    //    $products =  Product::create([
    //     "name" => $request->name,
    //     "price" => $request->price,
        //    "Model" => "request field"
    //    ]);

       if($products){
         return redirect(route('create'))->with("message" , "Product Created Successfully");
       }
    }
}
