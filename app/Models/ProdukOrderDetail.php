<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukOrderDetail extends Model
{
    use HasFactory;

    public function produk()
    {
        return $this->belongsTo('App\Produk', 'produk_id', 'id');
    }

    public function produk_order()
    {
        return $this->belongsTo('App\ProdukOrder', 'produkorder_id', 'id');
    }
}
