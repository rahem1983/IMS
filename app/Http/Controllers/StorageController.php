<?php

namespace App\Http\Controllers;
use App\Models\Storage;

use Illuminate\Http\Request;
use Carbon\Carbon;

class StorageController extends Controller
{
    public function getStorage()
    {
        $stor = Storage::all();
        return $stor;
    }

    public function Stock()
    {
        $storage = Storage::join('products', 'products.id', '=', 'storages.product_id')->select('storages.*', 'products.*')->get();
        return view('stocks',['storage'=>$storage]);
    }

    public function editStorage(Request $req)
    {
        $date = Carbon::now()->format('Y/m/d');
        $stor = Storage::where('product_id', $req->id)->first();

        $stor->last_arrival = $date;

        if ($req->exp_date) {
            $stor->exp_date = $req->exp_date;
        }

        if ($req->amount_in_stock) {
            $stor->amount_in_stock = $req->amount_in_stock;
        }
        $stor->save();
        return redirect('/stocks');
    }
}
