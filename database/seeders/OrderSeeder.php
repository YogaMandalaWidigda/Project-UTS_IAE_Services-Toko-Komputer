<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'customer_id' => 5,
                'product_id'=> 6,
                'quantity'=> 3,
                'customer_name'=> 'Rudi Hartono',
                'product_name'=> 'Core i5-12400F',
                'price'=> 2500000,
                'total_price'=> 7500000,
            ],
            [
                'customer_id' => 2,
                'product_id' => 4,
                'quantity' => 2,
                'customer_name' => 'Siti Aminah',
                'product_name' => 'Ryzen 5 7600',
                'price' => 3100000,
                'total_price' => 6200000,
            ],
        ]);
    }
}
