<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukOrder extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function produk_order_detail()
    {
        return $this->hasMany('App\ProdukOrderDetail', 'produkorder_id', 'id');
    }
}
