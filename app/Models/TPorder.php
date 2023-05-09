<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TPorder extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'alamat',
        'pesanan',
        'tanggal',
        'status',
    ];
}
