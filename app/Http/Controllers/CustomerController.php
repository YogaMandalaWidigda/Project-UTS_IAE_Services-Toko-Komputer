<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;
use App\Http\Resources\CustomerResource;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return new CustomerResource($customers, 'Success', 'List of Customers');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'customer_name' => 'required',
            'email' => 'required|email|unique:customers,email',
            'address' => 'required',
            'phone_number' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return new CustomerResource(null, 'Failed', $validator->errors());
        }

        $customer = Customer::create($request->all());
        return new CustomerResource($customer, 'Success', 'Sale created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::find($id);
    
        if (!$customer) {
            return new CustomerResource(null, 'Failed', 'Customer not found');
        }
    
        // Cari order berdasarkan customer_id
        $orders = Order::where('customer_id', $id)->get();
    
        // Kamu bisa kembalikan dua data sekaligus
        return response()->json([
            'status' => 'Success',
            'message' => 'Customer Found',
            'data' => [
                'customer' => $customer,
                'orders' => $orders
            ]
        ]);
    }
    public function getOrders(string $id)
{
    $customer = Customer::find($id);

    if (!$customer) {
        return response()->json([
            'status' => 'Failed',
            'message' => 'Customer not found',
            'data' => null
        ], 404);
    }

    // Ambil semua order milik customer ini
    $orders = Order::where('customer_id', $id)->get();

    return response()->json([
        'status' => 'Success',
        'message' => 'Orders retrieved successfully',
        'data' => $orders
    ]);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = Customer::find($id);

        if (!$customer) {
            return new CustomerResource(null, 'Failed', 'Customer not found');
        }

        $customer->update($request->all());

        return new CustomerResource($customer, 'Success', 'Customer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::find($id);

        if (!$customer) {
            return new CustomerResource(null, 'Failed', 'Customer not found');
        }

        $customer->delete();

        return new CustomerResource(null, 'Success', 'Customer deleted successfully');
    }
}
