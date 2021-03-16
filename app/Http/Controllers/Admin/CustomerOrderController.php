<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class CustomerOrderController extends Controller
{
    public function customerOrders()
    {
        $orders = Order::all();
        return view('admin/customerorders',['orders'=>$orders]);
    }
    public function placed($id)
    {
        $order = Order::find($id);
        $order->status = "Placed";
        $order->save();
        return redirect ('customerorders');
    }
    public function shipped($id)
    {
        $order = Order::find($id);
        $order->status = "Shipped";
        $order->save();
        return redirect ('customerorders');
    }
    public function delivered($id)
    {
        $order = Order::find($id);
        $order->status = "Delivered";
        $order->save();
        return redirect ('customerorders');
    }
    public function paid($id)
    {
        $order = Order::find($id);
        $order->payment_status = "Paid";
        $order->save();
        return redirect ('customerorders');
    }
    public function debitMethod($id)
    {
        $order = Order::find($id);
        $order->payment_method = "Debit Card";
        $order->save();
        return redirect ('customerorders');
    }
    public function codMethod($id)
    {
        $order = Order::find($id);
        $order->payment_method = "Cash on Delivery";
        $order->save();
        return redirect ('customerorders');
    }
}
