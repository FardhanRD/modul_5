<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pesanan');
            $table->foreignId('pelanggan_id')->constrained('pelanggans')->onDelete('cascade');
            $table->decimal('total_harga', 10, 2);
            $table->enum('status', ['diproses', 'selesai']);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('pesanans');
    }
};
