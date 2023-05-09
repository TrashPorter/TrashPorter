<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukOrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'produk_id',
        'produkorder_id',
        'jumlah',
        'jumlah_harga',
        'gambar',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id', 'id');
    }

    public function produk_order()
    {
        return $this->belongsTo('App\ProdukOrder', 'produkorder_id', 'id');
    }
}
