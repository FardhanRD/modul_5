<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    // Tentukan nama tabel (opsional jika nama tabel mengikuti konvensi jamak)
    protected $table = 'detail_pesanans';

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'pesanan_id',
        'produk_id',
        'jumlah',
        'harga',
        'subtotal',
    ];

    /**
     * Relasi ke model Pesanan (many-to-one)
     * Setiap detail pesanan dimiliki oleh satu pesanan.
     */
    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }

    /**
     * Relasi ke model Produk (many-to-one)
     * Setiap detail pesanan berhubungan dengan satu produk.
     */
    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
