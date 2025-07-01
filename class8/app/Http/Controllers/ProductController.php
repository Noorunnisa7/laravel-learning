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

    //    $products->save();
    //    $products =  Product::create([
    //     "name" => $request->name,
    //     "price" => $request->price,
        //    "Model" => "request field"
    //    ]);

    // $products =  Product::find($id));
    //$product->update();

       if($products){
         return redirect(route('create'))->with("message" , "Product Created Successfully");
       }
    }

    public function ListView(){
    
        // $name = "Nisa";
        // $email = "Noorunnisa560@gmail.com";

         $products = Product::all();
        //  $products = Product::all()->where("id" , "=" , 2);

        // select * from product 

        // $products = Product::where("price" , ">=" , 250)->orderby("price")->get();
        return view('list' , compact('products'));
    }

    public function destory($id){
        $product = Product::find($id);
        $product->delete();

        return redirect(route('allData'))->with("message" , "Product deleted successfully");
    }


    public function trash(){
        $products = Product::onlyTrashed()->get();
        return view('trash' , compact('products'));
    }

    public function forceDelete($id){
        $product= Product::withTrashed()->find($id);
        if($product){
            $product->forceDelete();
            return redirect(route('trash'))->with("message" , "Product permanent deleted successfully");
        }
    }

     public function restore($id){
        $product= Product::withTrashed()->find($id);
        if($product){
            $product->restore();
             return redirect(route('allData'))->with("message" , "Product restore successfully");
        }
    }
}
