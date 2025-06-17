<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// // View Method 
// Route::view('/myhomepage','home')->name("homePage");



// Route::view('/page','pages.hello ')->name("pageTemplate");

//     // Route::get('/data',function(){
//     //     echo ""; 
//     // });


// Route::view('/home2','index')->name("home2");

Route::post('/submit' , function(Request $request){
    $name =  $request->name;
    $email = $request->email;
    $phone = $request->number;
    $address = $request->input('address');
    echo $name."<br>".$email."<br>".$phone."<br>".$address;
})->name('formSubmit');



// parameter route


Route::get('/data/{id}',function($id){
    echo "<h1>".$id."</h1>";
});

Route::get('/name/{name}',function($name){
    echo "Name: ".$name;
});


// Controller route 

Route::get('/demo', [DemoController::class , 'index']);

Route::get('/welcome' , [UserController::class , 'welcome']);

Route::get('/form' , [UserController::class , 'form']);


Route::get('/controller/{user}',[UserController::class , 'UserData']);