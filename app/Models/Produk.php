<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    // Nama tabel (opsional, Laravel otomatis mengenali 'produks')
    protected $table = 'produks';

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'nama',
        'harga',
        'stok',
        'deskripsi',
    ];

    /**
     * Relasi ke model DetailPesanan (one-to-many)
     * Satu produk bisa muncul di banyak detail pesanan.
     */
    public function detailPesanans()
    {
        return $this->hasMany(DetailPesanan::class);
    }
}
