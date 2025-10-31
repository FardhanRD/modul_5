<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        Produk::insert([
            [
                'nama' => 'Laptop ASUS ROG',
                'harga' => 25000000,
                'stok' => 5,
                'deskripsi' => 'Laptop gaming dengan performa tinggi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Mouse Logitech G Pro',
                'harga' => 750000,
                'stok' => 15,
                'deskripsi' => 'Mouse gaming dengan sensor presisi tinggi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Keyboard Mechanical Keychron K6',
                'harga' => 1500000,
                'stok' => 10,
                'deskripsi' => 'Keyboard mechanical wireless premium.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
