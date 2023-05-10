<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TPorder extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'alamat',
        'pesanan',
        'tanggal',
        'status',
        'status_pembayaran',

    ];

    protected $table = 't_porders';
}
