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

    public function deleteInventory($id)
    {
        $inv = Inventory::where('id', $id)->delete();
        return redirect('/getInventory');
    }

    public function addInventory(Request $req)
    {
        $inv = new Inventory;

        $inv->name = $req->name;
        $inv->electricity_bill = $req->electricity_bill;
        $inv->rent = $req->rent;
        $inv->gas_bill = $req->gas_bill;
        $inv->other_bill = $req->other_bill;
        $inv->employee_salary = $req->employee_salary;

        $inv->save();
        return redirect('/getInventory');

    }

    public function editInventory(Request $req)
    {
        $inv = Inventory::where('id', $req->id)->first();

        if ($req->name) {
            $inv->name = $req->name;
        }
        
        if ($req->electricity_bill) {
            $inv->electricity_bill = $req->electricity_bill;
        }
        
        if ($req->rent) {
            $inv->rent = $req->rent;
        }
        
        if ($req->gas_bill) {
            $inv->gas_bill = $req->gas_bill;
        }
        
        if ($req->other_bill) {
            $inv->other_bill = $req->other_bill;
        }

        if ($req->employee_salary) {
            $inv->employee_salary = $req->employee_salary;
        }

        $inv->save();
        return redirect('/getInventory');
    }
}
