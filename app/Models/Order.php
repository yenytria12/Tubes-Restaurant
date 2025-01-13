<?php
// app/Http/Controllers/Admin/OrderController.php

namespace App\Http\Controllers\Admin;

use App\Models\Order;  // Pastikan menggunakan model dari App\Models
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();  // Mengambil semua data order
        return view('admin.orders.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);  // Menampilkan order berdasarkan ID
        return view('admin.orders.show', compact('order'));
    }

    // Metode lainnya untuk create, store, update, destroy
}
