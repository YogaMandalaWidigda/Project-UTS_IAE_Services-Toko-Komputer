<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\ProductResource;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return new ProductResource($products, 'Success', 'List of Products');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_name' => 'required|string',
            'brand' => 'required|string',
            'chategory' => 'required|string',
            'price' => 'required|integer',
            'stock' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return new ProductResource(null, 'Failed', $validator->errors());
        }

        $product = Product::create($request->all());
        return new ProductResource($product, 'Success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return new ProductResource(null, 'Failed', 'Product not found');
        }

        return Product::findOrFail($id);
        return new ProductResource($product, 'Success', 'Product found');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return new ProductResource(null, 'Failed', 'Product not found');
        }

        $product->update($request->all());

        return new ProductResource($product, 'Success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return new ProductResource(null, 'Failed', 'Product not found');
        }

        $product->delete();

        return new ProductResource(null, 'Success', 'Product deleted successfully');
    }
}
