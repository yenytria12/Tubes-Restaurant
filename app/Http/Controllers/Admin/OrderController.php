<?php
// app/Models/Order.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Define your model properties and relationships here
}

// app/Http/Controllers/Admin/OrderController.php

namespace App\Http\Controllers\Admin;

use App\Models\Order;  // Pastikan menggunakan model Order dari App\Models
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::all();
        return view('admin.order.index', compact('orders'));
    }

    // Metode lain dalam controller
}
