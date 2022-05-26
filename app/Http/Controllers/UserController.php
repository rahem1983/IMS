<?php

namespace App\Http\Controllers;
use App\Models\Sell;
use App\Models\Storage;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser()
    {
        $user = User::all();
        return $user;
    }

    public function index()
    {
        $pro = Product::join('storages', 'products.id', '=', 'storages.product_id')->select('products.*', 'storages.amount_in_stock')->get();
        $sell = Sell::join('products', 'products.id', '=', 'sells.product_id')->select('sells.*', 'products.name')->get();;

        // foreach ($sell as $key) {
        //     $key->delivery_time = $key->delivery_time->diffForHumans();
        //     $key->end_client_receive_time = $key->end_client_receive_time->diffForHumans();
        // }
        return view('home',[
            'product'=>$pro,
            'sell'=>$sell
        ]);
    }
}
