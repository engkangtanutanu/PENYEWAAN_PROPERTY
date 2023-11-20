<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admin';

    protected $fillable = [
        'nama_admin',
        'email_admin',
        'password_admin',
    ];

    protected $hidden = [
        'password_admin',
    ];
}
