<?php

namespace App\Http\Controllers;

use App\Models\ClientUsers;
use Illuminate\Http\Request;
use App\Models\JobOrders;

class JobOrder extends Controller
{
    public function getAllJobOrders()
    {
        return JobOrders::all();
    }

    public function getSelectedJobOrder($id)
    {
        return JobOrders::where('id', $id)->get();
    }

    public function addNewJobOrder(Request $request)
    {
        $createNewJobOrder = new JobOrders();
        $createNewJobOrder->client_id = $request->client;
        $createNewJobOrder->quotedAmount = $request->quotedAmount;
        $createNewJobOrder->phoneno = $request->phoneno;
        $createNewJobOrder->date = $request->date;
        $createNewJobOrder->save();
        return $createNewJobOrder;
    }
}


// $result = Car::with('vehicles')->get();