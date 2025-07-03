<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\Country;



Route::get('/', function () {
    return view('welcome');
})->name('welcome')->middleware('CheckData');


// group middlware 
Route::middleware('CheckData')->group(function(){

Route::get("/create" , [ProductController::class , 'ViewCreate'])->name("create");
Route::post("/submit" , [ProductController::class , 'StoreData'])->name("addData");

Route::get("/list" , [ProductController::class , 'ListView'])->name('allData');

});


// Route::get("/create" , [ProductController::class , 'ViewCreate'])->name("create");
// Route::post("/submit" , [ProductController::class , 'StoreData'])->name("addData");

// Route::get("/list" , [ProductController::class , 'ListView'])->name('allData');

Route::delete("/destory/{id}" , [ProductController::class , "destory"])->name("deleteData");

Route::get('/trash',[ProductController::class , 'trash'])->name('trash');

Route::post('/forceDelete/{id}',[ProductController::class , 'forceDelete'])->name('forceDelete');

Route::post('/restore/{id}' , [ProductController::class , 'restore'])->name('restore');

// Route::get("/list" , [ProductController::class , 'ListView'])->name('allData')->middleware(Country::class);
