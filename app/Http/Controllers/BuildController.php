<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class BuildController extends Controller
{
    public function rekomendasi($budget)
    {
        $budget = (int) $budget;

        $categories = [
            'Processor',
            'RAM',
            'Storage',
            'Motherboard',
            'GPU',
            'PSU',
            'Casing',
            'Air Cooler',
        ];

        $selectedParts = [];
        $totalPrice = 0;

        foreach ($categories as $category) {
            // Cari produk termurah di kategori ini yang bisa masuk budget
            $product = Product::where('chategory', $category)
                ->where('price', '<=', $budget - $totalPrice)
                ->orderBy('price', 'desc') // ambil yang paling mahal tapi masih muat
                ->first();

            if ($product) {
                $selectedParts[$category] = $product;
                $totalPrice += $product->price;
            }
        }

        if (empty($selectedParts)) {
            return response()->json([
                'message' => 'Tidak ada part yang tersedia untuk budget ini.'
            ], 400);
        }

        return response()->json([
            'recommended_build' => $selectedParts,
            'total_price' => $totalPrice,
            'remaining_budget' => $budget - $totalPrice,
        ]);
    }
}
