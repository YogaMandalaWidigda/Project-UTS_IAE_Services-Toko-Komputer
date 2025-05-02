<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
                'customer_name' => 'Budi Santoso',
                'email' => 'budi@example.com',
                'address' => 'Jl. Merdeka No. 1, Jakarta',
                'phone_number' => '081234567801',
            ],
            [
                'customer_name' => 'Siti Aminah',
                'email' => 'siti@example.com',
                'address' => 'Jl. Kenanga No. 2, Bandung',
                'phone_number' => '081234567802',
            ],
            [
                'customer_name' => 'Agus Prasetyo',
                'email' => 'agus@example.com',
                'address' => 'Jl. Sudirman No. 3, Surabaya',
                'phone_number' => '081234567803',
            ],
            [
                'customer_name' => 'Dewi Lestari',
                'email' => 'dewi@example.com',
                'address' => 'Jl. Mawar No. 4, Yogyakarta',
                'phone_number' => '081234567804',
            ],
            [
                'customer_name' => 'Rudi Hartono',
                'email' => 'rudi@example.com',
                'address' => 'Jl. Melati No. 5, Semarang',
                'phone_number' => '081234567805',
            ],
            [
                'customer_name' => 'Linda Sari',
                'email' => 'linda@example.com',
                'address' => 'Jl. Anggrek No. 6, Medan',
                'phone_number' => '081234567806',
            ],
            [
                'customer_name' => 'Joko Widodo',
                'email' => 'joko@example.com',
                'address' => 'Jl. Flamboyan No. 7, Palembang',
                'phone_number' => '081234567807',
            ],
            [
                'customer_name' => 'Maya Puspita',
                'email' => 'maya@example.com',
                'address' => 'Jl. Cemara No. 8, Denpasar',
                'phone_number' => '081234567808',
            ],
            [
                'customer_name' => 'Tono Wijaya',
                'email' => 'tono@example.com',
                'address' => 'Jl. Nusa Indah No. 9, Makassar',
                'phone_number' => '081234567809',
            ],
            [
                'customer_name' => 'Ani Nuraini',
                'email' => 'ani@example.com',
                'address' => 'Jl. Teratai No. 10, Malang',
                'phone_number' => '081234567810',
            ],
        ];

        foreach ($customers as $customer) {
            DB::table('customers')->insert(array_merge($customer, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
