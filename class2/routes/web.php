<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// View Method 
Route::view('/myhomepage','home')->name("homePage");



Route::view('/page','pages.hello ')->name("pageTemplate");

    // Route::get('/data',function(){
    //     echo ""; 
    // });


Route::view('/home2','index')->name("home2");

Route::post('/submit' , function(Request $request){
    $name =  $request->name;
    $email = $request->email;
    $phone = $request->number;
    $address = $request->input('address');
    echo $name."<br>".$email."<br>".$phone."<br>".$address;
})->name('formSubmit');