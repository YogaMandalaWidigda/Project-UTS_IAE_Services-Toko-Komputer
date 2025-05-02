<?php
namespace App\Services;
use Illuminate\Support\Facades\Http;

class UserService {
    public function getUserById($id) {
        $response = Http::get("http://127.0.0.1:8001/api/customers/{$id}");
        return $response->successful() ? $response->json() : null;
    }
}
