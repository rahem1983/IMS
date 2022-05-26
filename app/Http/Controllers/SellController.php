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
}
