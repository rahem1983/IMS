<?php

namespace App\Http\Controllers;

use App\Models\Inventory;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function getInventory()
    {
        $inv = Inventory::all();
        return view('inventories',['inventory'=>$inv]);
        
    }
}
