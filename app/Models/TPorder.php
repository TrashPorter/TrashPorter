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
        'driver_id',
        'pesan_id',

    ];

    protected $table = 't_porders';

    public function pesan()
    {
        return $this->belongsTo('App\Pesan', 'pesan_id', 'id');
    }
}
