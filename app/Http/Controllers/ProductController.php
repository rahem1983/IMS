<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Storage;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct()
    {
        $pro = Product::all();
        return $pro;
    }

    public function index()
    {
        $pro = Product::join('storages', 'products.id', '=', 'storages.product_id')->select('products.*', 'storages.amount_in_stock')->get();
        return view('home',['product'=>$pro]);
    }
    public function deleteProduct($id)
    {
        $pro = Product::where('id', $id)->delete();
        $str = Storage::where('product_id', $id)->delete();
        return redirect('/');
    }

    
}
