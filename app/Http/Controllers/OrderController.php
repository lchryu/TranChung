<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderByDesc('id')->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required',
            'quantity' => 'required',
            'customer_name' => 'required',
        ]);

        $order = Order::create($validatedData);

        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $validatedData = $request->validate([
            'product_id' => 'required',
            'quantity' => 'required',
            'customer_name' => 'required',
        ]);

        $order->update($validatedData);

        return redirect()->route('orders.show', $order->id)->with('success', 'Order updated successfully.');
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }
}
