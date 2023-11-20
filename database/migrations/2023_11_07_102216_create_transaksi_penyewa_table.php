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
        Schema::create('transaksi_penyewa', function (Blueprint $table) {
            $table->bigIncrements('ID_Transaksi');
            $table->bigInteger('ID_Properti')->unsigned();
            $table->bigInteger('ID_Penyewa')->unsigned();
            $table->date('Tanggal_Mulai_Sewa');
            $table->date('Tanggal_Akhir_Sewa');
            $table->string('Durasi_Sewa', 5);
            $table->decimal('Total_Biaya', 3, 3);
            $table->timestamps();

            $table->foreign('ID_Properti')->references('id')->on('properti');
            $table->foreign('ID_Penyewa')->references('id')->on('penyewa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_penyewa');
    }
};
