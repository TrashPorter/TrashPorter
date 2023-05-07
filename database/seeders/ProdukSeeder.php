<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'nama' => 'Pupuk NPK Mutiara',
            'slug' => Str::slug('Pupuk NPK Mutiara', '-'),
            'deskripsi' => 'pupuk hasil olahan sampah',
            'kategori' => 'Hasil olahan sampah',
            'gambar' => 'pupuk_npk.png',
            'harga' => 75000,
            'stok' => 50,
        ]);
        Produk::create([
            'nama' => 'Pupuk kalsium Nitrat',
            'slug' => Str::slug('Pupuk kalsium Nitrat', '-'),
            'deskripsi' => 'pupuk hasil olahan sampah',
            'kategori' => 'Hasil olahan sampah',
            'gambar' => 'pupuk_urea.png',
            'harga' => 30000,
            'stok' => 50,
        ]);
        Produk::create([
            'nama' => 'Pupuk Organik',
            'slug' => Str::slug('Pupuk Organik', '-'),
            'deskripsi' => 'pupuk hasil olahan sampah',
            'kategori' => 'Hasil olahan sampah',
            'gambar' => 'pupuk_natural.png',
            'harga' => 75000,
            'stok' => 50,
        ]);
    }
}
