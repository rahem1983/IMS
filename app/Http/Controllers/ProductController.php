<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Storage;

use Illuminate\Http\Request;
use Carbon\Carbon;

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

    public function addProduct(Request $req)
    {
        $pro = new Product;

        $date = Carbon::now()->format('Y/m/d');

        $pro->name = $req->name;
        $pro->details = $req->details;
        $pro->unit_price = $req->unit_price;
        $pro->suppliers = $req->suppliers;
        $pro->vendors = $req->vendors;

        $pro->save();

        $stor = new Storage;

        $stor->product_id = $pro->id;
        $stor->amount_in_stock = $req->amount_in_stock;
        $stor->last_arrival = $date;

        if ($req->exp_date) {
            $stor->exp_date = $req->exp_date;
        }
        $stor->save();
        return redirect('/');

    }

    public function editProduct(Request $req)
    {
        $pro = Product::where('id', $req->id)->first();

        if ($req->name) {
            $pro->name = $req->name;
        }
        
        if ($req->details) {
            $pro->details = $req->details;
        }
        
        if ($req->unit_price) {
            $pro->unit_price = $req->unit_price;
        }
        
        if ($req->suppliers) {
            $pro->suppliers = $req->suppliers;
        }
        
        if ($req->vendors) {
            $pro->vendors = $req->vendors;
        }

        $pro->save();
        return redirect('/');
    }

}
