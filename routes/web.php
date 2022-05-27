<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::controller(InventoryController::class)->group(function (){
    Route::get('getInventory','getInventory');    
});

Route::controller(SellController::class)->group(function (){
    Route::get('getSell','getSell'); 
    Route::get('/sell','Sell'); 
});

Route::controller(UserController::class)->group(function (){
    Route::get('getUser','getUser');    
});

Route::controller(StorageController::class)->group(function (){
    Route::get('/stocks','Stock'); 
    Route::get('getStorage','getStorage');    
});

Route::controller(ProductController::class)->group(function (){
    Route::get('getProduct','getProduct');
    Route::get('/','index');    
    Route::post('/addProduct','addProduct');    
    Route::post('/editProduct','editProduct');    
    Route::get('deleteProduct/{id}','deleteProduct');

});