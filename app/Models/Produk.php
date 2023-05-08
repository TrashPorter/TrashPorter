<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'kategori',
        'gambar',
        'harga',
        'stok',
    ];

    public function produk_order_detail()
    {
        return $this->hasMany('App\ProdukOrderDetail', 'produk_id', 'id');
    }
}
