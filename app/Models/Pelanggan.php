<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model {
    protected $fillable = ['nama', 'alamat', 'email', 'no_telepon'];

    public function pesanans() {
        return $this->hasMany(Pesanan::class);
    }
}

