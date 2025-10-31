<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelanggan;

class PelangganSeeder extends Seeder
{
    public function run(): void
    {
        Pelanggan::insert([
            [
                'nama' => 'Fardhan Daswara',
                'alamat' => 'Jl. Melati No. 10, Bandung',
                'email' => 'fardhan@example.com',
                'no_telepon' => '081234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Andi Pratama',
                'alamat' => 'Jl. Mawar No. 25, Jakarta',
                'email' => 'andi@example.com',
                'no_telepon' => '082345678912',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
