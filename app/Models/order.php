<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $table = 'orders'; // Nama tabelnya orders

    // Kalau nama primary key tabel kamu beda, misal bukan 'id', kamu bisa set protected $primaryKey

    protected $fillable = [
        'customer_id',
        'customer_name',
        'product_id',
        'product_name',
        'price',
        'quantity',
        'total_price',
    ];
}
