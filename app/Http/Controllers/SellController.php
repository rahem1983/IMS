<?php

namespace App\Http\Controllers;
use App\Models\Sell;

use Illuminate\Http\Request;

class SellController extends Controller
{
    public function getSell()
    {
        $sell = Sell::all();
        return $sell;
    }

    public function Sell()
    {
        $sell = Sell::join('products', 'products.id', '=', 'sells.product_id')->select('sells.*', 'products.name')->get();
        return view('sells',['sell'=>$sell]);
    }
}
