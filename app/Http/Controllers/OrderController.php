<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Product;
use App\Services\UserService;
use App\Services\ProductService;

class OrderController extends Controller
{
    protected $userService, $productService;

    public function __construct(UserService $userService, ProductService $productService)
    {
        $this->userService = $userService;
        $this->productService = $productService;
    }
    public function getByCustomerId($customer_id)
    {
        // Ambil semua order berdasarkan customer_id
        $orders = Order::where('customer_id', $customer_id)->get();
    
        // Cek apakah ada data
        if ($orders->isEmpty()) {
            return response()->json(['message' => 'Tidak ada order untuk customer ini'], 404);
        }
    
        return response()->json($orders);
    }

    public function index()
{
    $orders = Order::all();

    if ($orders->isEmpty()) {
        return response()->json(['message' => 'Belum ada order'], 404);
    }

    return response()->json($orders, 200);
}
    public function store(Request $request)
    {
        $user = Customer::find($request->customer_id);
        $product = Product::find($request->product_id);
    
        if (!$user || !$product) {
            return response()->json(['error' => 'Data user atau produk tidak ditemukan'], 404);
        }
    
        $total = $product->price * $request->quantity;
    
        $order = Order::create([
            'customer_id' => $request->customer_id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'customer_name' => $user->customer_name,
            'product_name' => $product->product_name,
            'price' => $product->price,
            'total_price' => $total
        ]);
    
        return response()->json($order, 201);
    }
    public function update(Request $request, $id)
{
    $order = Order::find($id);

    if (!$order) {
        return response()->json(['error' => 'Order tidak ditemukan'], 404);
    }

    $user = Customer::find($request->customer_id);
    $product = Product::find($request->product_id);

    if (!$user || !$product) {
        return response()->json(['error' => 'Data user atau produk tidak ditemukan'], 404);
    }

    $total = $product->price * $request->quantity;

    $order->update([
        'customer_id' => $request->customer_id,
        'product_id' => $request->product_id,
        'quantity' => $request->quantity,
        'customer_name' => $user->customer_name,
        'product_name' => $product->product_name,
        'price' => $product->price,
        'total_price' => $total
    ]);

    return response()->json($order);
}

}


