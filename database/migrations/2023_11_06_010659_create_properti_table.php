<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properti', function (Blueprint $table) {
            $table->id();
            $table->string('Jenis_Properti', 20);
            $table->string('Alamat', 50);
            $table->string('Luas_Bangunan', 10);
            $table->integer('Jumlah_Kamar_Tidur',);
            $table->integer('Jumlah_Kamar_Mandi',);
            $table->string('Fasilitas', 20);
            $table->decimal('Harga_Sewa_Harian', 7, 3);
            $table->decimal('Harga_Sewa_Bulanan', 7, 3);
            $table->decimal('Harga_Sewa_Tahunan', 7, 3);
            $table->string('Status', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properti');
    }
};
