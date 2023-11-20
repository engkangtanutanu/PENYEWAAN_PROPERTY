<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properti extends Model
{
    protected $table = 'properti'; 

    protected $fillable = [
        'Jenis_Properti',
        'Alamat',
        'Luas_Bangunan',
        'Jumlah_Kamar_Tidur',
        'Jumlah_Kamar_Mandi',
        'Fasilitas',
        'Harga_Sewa_Harian',
        'Harga_Sewa_Bulanan',
        'Harga_Sewa_Tahunan',
        'Status',
        'image',
    ];
}
