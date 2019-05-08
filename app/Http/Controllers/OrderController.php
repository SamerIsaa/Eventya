<?php

namespace App\Http\Controllers;

use App\Order;
use App\Supplier;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function newOrders()
    {
        $supplier = Supplier::find(auth('supplier')->id());
        $newOrders = $supplier->orders->where('status_id' , 1);

        return view('users.suppliers.orders.newOrders' , compact('newOrders'));
    }

    public function accept($id)
    {
        try{
            $order = Order::findOrFail($id);
            $order->status_id = 2 ;
            $order->save();
        }catch (\Exception $exception){

        }
        return redirect()->back();
    }

    public function reject($id)
    {
        try{
            Order::destroy($id);
        }catch (\Exception $exception){

        }
        return redirect()->back();
    }

    public function reservationOrders()
    {
        $supplier = Supplier::find(auth('supplier')->id());
        $reservationOrders = $supplier->orders->where('status_id' , 2);

        return view('users.suppliers.orders.reservationOrders' , compact('reservationOrders'));
    }

    public function endedOrders()
    {
        $supplier = Supplier::find(auth('supplier')->id());
        $endedOrders = $supplier->orders->where('status_id' , 3);

        return view('users.suppliers.orders.endedOrders' , compact('endedOrders'));
    }
}
