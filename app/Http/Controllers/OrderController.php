<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Services\RajaOngkirService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $rajaOngkirService;

    public function __construct(RajaOngkirService $rajaOngkirService)
    {
        $this->rajaOngkirService = $rajaOngkirService;
    }

    public function index()
    {
        $orders = Order::with(['items.product'])->latest()->paginate(10);
        return view('orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $order->load(['items.product', 'payment']);

        // Get province and city names using RajaOngkirService
        $provinceName = $this->rajaOngkirService->getProvinceName($order->province_id);
        $cityName = $this->rajaOngkirService->getCityName($order->city_id);

        return view('orders.show', compact('order', 'provinceName', 'cityName'));
    }

    public function updateStatus(Request $request, Order $order)
    {
        $request->validate([
            'payment_status' => 'required|in:pending,paid,cancelled',
            'shipping_status' => 'required|in:proses,dikirim,selesai,dibatalkan',
        ]);

        $order->payment_status = $request->payment_status;
        $order->shipping_status = $request->shipping_status;
        $order->save();

        return redirect()->route('orders.show', $order)->with('success', 'Order status updated successfully');
    }
}
