<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    protected $table = 'penyewa';
    
    protected $fillable = [
        'Nama_Penyewa',
        'Alamat_Penyewa',
        'Email',
        'Telepon',
        'image',
    ];

    public $timestamps = false;
}
