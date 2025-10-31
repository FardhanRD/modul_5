<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DetailPesanan;
use App\Models\Pesanan;
use App\Models\Produk;

class DetailPesananSeeder extends Seeder
{
    public function run(): void
    {
        $pesanan1 = Pesanan::first();
        $pesanan2 = Pesanan::skip(1)->first();

        $produk1 = Produk::first();
        $produk2 = Produk::skip(1)->first();
        $produk3 = Produk::skip(2)->first();

        // Detail pesanan pertama
        DetailPesanan::insert([
            [
                'pesanan_id' => $pesanan1->id,
                'produk_id' => $produk1->id,
                'jumlah' => 1,
                'harga_satuan' => $produk1->harga,
                'subtotal' => $produk1->harga * 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pesanan_id' => $pesanan1->id,
                'produk_id' => $produk2->id,
                'jumlah' => 2,
                'harga_satuan' => $produk2->harga,
                'subtotal' => $produk2->harga * 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Detail pesanan kedua
        DetailPesanan::insert([
            [
                'pesanan_id' => $pesanan2->id,
                'produk_id' => $produk3->id,
                'jumlah' => 1,
                'harga_satuan' => $produk3->harga,
                'subtotal' => $produk3->harga * 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
