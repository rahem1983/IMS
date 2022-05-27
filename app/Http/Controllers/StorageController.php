<?php

namespace App\Http\Controllers;
use App\Models\Storage;

use Illuminate\Http\Request;

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
}
