<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pesanan;
use App\Models\Pelanggan;
use Illuminate\Support\Carbon;

class PesananSeeder extends Seeder
{
    public function run(): void
    {
        $pelanggan1 = Pelanggan::first();
        $pelanggan2 = Pelanggan::skip(1)->first();

        Pesanan::insert([
            [
                'tanggal_pesanan' => Carbon::now()->subDays(3),
                'pelanggan_id' => $pelanggan1->id,
                'total_harga' => 32500000,
                'status' => 'diproses',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_pesanan' => Carbon::now()->subDay(),
                'pelanggan_id' => $pelanggan2->id,
                'total_harga' => 2250000,
                'status' => 'selesai',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
