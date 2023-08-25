<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $todayDate = Carbon::now()->format('Y-m-d');
        $orders = Order::where(function ($q) use ($request, $todayDate) {
            if ($request->date) {
                $q->whereDate('created_at', $request->date);
            } else {
                $q->whereDate('created_at', $todayDate);
            }

            if ($request->status) {
                $q->where('status_message', $request->status);
            }
        })->get();

        return view('admin.orders.index', compact('orders'));
    }

    public function show(int $orderId)
    {
        $order = Order::find($orderId);

        if ($order) {
            return view('admin.orders.view', compact('order'));
        } else {
            return redirect('admin/orders')->with('message', 'Order Id not found');
        }
    }

    public function updateOrderStatus(int $orderId, Request $request)
    {
    $order = Order::where('id', $orderId)->first(); if($order) {
    $order->update([
    'status_message' => $request->order_status
    ]);
    return redirect('admin/orders/'.$orderId)->with('message', 'Order Status Updated'); }else{
    return redirect('admin/orders/'.$orderId)->with('message', 'Order Id not found');


    }}
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tracking_no' => 'required',
        ]);

        $order = new Order();
        $order->tracking_no = $validatedData['tracking_no'];
        $order->save();

        return redirect()->route('admin.orders.index')->with('message', 'Order added successfully.');
    }
}
