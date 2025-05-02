<?php
namespace App\Services;
use Illuminate\Support\Facades\Http;

class ProductService {
    public function getProductById($id) {
        $response = Http::get("http://127.0.0.1:8002/api/products/{$id}");
        return $response->successful() ? $response->json() : null;
    }
}

