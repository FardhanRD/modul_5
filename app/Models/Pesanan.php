<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model {
    protected $fillable = ['tanggal_pesanan', 'pelanggan_id', 'total_harga', 'status'];

    public function pelanggan() {
        return $this->belongsTo(Pelanggan::class);
    }

    public function detailPesanans() {
        return $this->hasMany(DetailPesanan::class);
    }
}

