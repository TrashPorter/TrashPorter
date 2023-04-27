@extends('layouts.main')

@section('container')
    @include('layouts.partials.header')

    {{-- { --}}
        <!--
  This example requires some changes to your config:


  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }

-->
<div class="bg-white">
    <div class="max-w-2xl px-4 py-16 mx-auto sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>

      <div class="grid grid-cols-1 mt-6 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8 ">
        <div class="relative group">
            <div class="object-center w-full overflow-hidden rounded-md bg-gray-50 min-h-80 aspect-h-1 aspect-w-1 lg:aspect-none group-hover:opacity-75 lg:h-72">
              <img src="assets/img/pupuk_npk.png" alt="Front of men&#039;s Basic Tee in black." class="justify-center object-center -mt-5 lg:w-50 xl:w-50">
            </div>
            <div class="flex justify-between mt-4">
                <div>
                  <h3 class="text-sm text-gray-700">
                    <a href="#">
                      <span aria-hidden="true" class="absolute inset-0"></span>
                      Pupuk
                    </a>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500">Hasil olahan sampah</p>
                </div>
                <p class="text-sm font-medium text-gray-900">Rp75.000</p>
              </div>
              <button class="px-4 py-2 mt-2 font-bold text-white rounded bg-sky-500 hover:bg-sky-600" style="display: flex; align-items: center;">
                  <div class="">
                    <img src="assets/img/shopping-cart1.png" alt="" class="cart-icon" style="float: left; margin-right: 10px; width: 20px; height: 20px; ">
                  </div>
                   <div class="mx-auto">Masukkan ke Keranjang</div>
                  </button>

            </div>
        <div class="relative group">
            <div class="w-full overflow-hidden rounded-md bg-gray-50 min-h-80 aspect-h-1 aspect-w-1 lg:aspect-none group-hover:opacity-75 lg:h-72">
              <img src="assets/img/pupuk_urea.png" alt="Front of men&#039;s Basic Tee in black." class="object-cover object-center w-full h-full mx-auto mt-5 lg:h-4/5 lg:w-4/5">
            </div>
            <div class="flex justify-between mt-4">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Pupuk
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Hasil olahan sampah</p>
              </div>
              <p class="text-sm font-medium text-gray-900">Rp30.000</p>
            </div>
            <button class="px-4 py-2 mt-2 font-bold text-white rounded bg-sky-500 hover:bg-sky-600" style="display: flex; align-items: center;">
                <div class="">
                  <img src="assets/img/shopping-cart1.png" alt="" class="cart-icon" style="float: left; margin-right: 10px; width: 20px; height: 20px; ">
                </div>
                 <div class="mx-auto">Masukkan ke Keranjang</div>
                </button>

          </div>
          <div class="relative group">
            <div class="w-full overflow-hidden rounded-md bg-gray-50 min-h-80 aspect-h-1 aspect-w-1 lg:aspect-none group-hover:opacity-75 lg:h-72">
              <img src="assets/img/pupuk_natural.png" alt="Front of men&#039;s Basic Tee in black." class="object-cover object-center w-40 h-56 mt-10 ml-16 ">
            </div>
            <div class="flex justify-between mt-4">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Pupuk
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Hasil olahan sampah</p>
              </div>
              <p class="text-sm font-medium text-gray-900">Rp75.000</p>
            </div>
            <button class="px-4 py-2 mt-2 font-bold text-white rounded bg-sky-500 hover:bg-sky-600" style="display: flex; align-items: center;">
                <div class="">
                  <img src="assets/img/shopping-cart1.png" alt="" class="cart-icon" style="float: left; margin-right: 10px; width: 20px; height: 20px; ">
                </div>
                 <div class="mx-auto">Masukkan ke Keranjang</div>
                </button>
          </div>

          <div class="relative group">
            <div class="w-full overflow-hidden rounded-md bg-gray-50 min-h-80 aspect-h-1 aspect-w-1 lg:aspect-none group-hover:opacity-75 lg:h-72">
              <img src="assets/img/vipree.png" alt="Front of men&#039;s Basic Tee in black." class="object-cover object-center mt-7 ml-9 h-60 w-52">
            </div>
            <div class="flex justify-between mt-4">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Pupuk
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Hasil olahan sampah</p>
              </div>
              <p class="text-sm font-medium text-gray-900">Rp50.000</p>
            </div>
            <button class="px-4 py-2 mt-2 font-bold text-white rounded bg-sky-500 hover:bg-sky-600" style="display: flex; align-items: center;">
                <div class="">
                  <img src="assets/img/shopping-cart1.png" alt="" class="cart-icon" style="float: left; margin-right: 10px; width: 20px; height: 20px; ">
                </div>
                 <div class="mx-auto">Masukkan ke Keranjang</div>
                </button>
          </div>
          <div class="relative group">
            <div class="w-full overflow-hidden rounded-md bg-gray-50 min-h-80 aspect-h-1 aspect-w-1 lg:aspect-none group-hover:opacity-75 lg:h-80">
              <img src="assets/img/greenpig.png" alt="Front of men&#lg:h-60 lg:w-52039;s Basic Tee in black." class="object-cover object-center w-full h-full my-2 mt-8 ml-12 lg:h-72 lg:w-40">
            </div>
            <div class="flex justify-between mt-4">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Pupuk
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Hasil olahan sampah</p>
              </div>
              <p class="text-sm font-medium text-gray-900">Rp60.000</p>
            </div>
            <button class="px-4 py-2 mt-2 font-bold text-white rounded bg-sky-500 hover:bg-sky-600" style="display: flex; align-items: center;">
                <div class="">
                  <img src="assets/img/shopping-cart1.png" alt="" class="cart-icon" style="float: left; margin-right: 10px; width: 20px; height: 20px; ">
                </div>
                 <div class="mx-auto">Masukkan ke Keranjang</div>
                </button>
          </div>
          <div class="relative group">
            <div class="w-full overflow-hidden rounded-md bg-gray-50 min-h-80 aspect-h-1 aspect-w-1 lg:aspect-none group-hover:opacity-75 lg:h-80">
              <img src="assets/img/kaline.png" alt="Front of men&#039;s Basic Tee in black." class="object-cover object-center w-full h-full mx-auto mt-3 lg:h-72 lg:w-64">
            </div>
            <div class="flex justify-between mt-4">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Tong sampah
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Kerajinan tangan</p>
              </div>
              <p class="text-sm font-medium text-gray-900">Rp40.000</p>
            </div>
            <button class="px-4 py-2 mt-2 font-bold text-white rounded bg-sky-500 hover:bg-sky-600" style="display: flex; align-items: center;">
                <div class="">
                  <img src="assets/img/shopping-cart1.png" alt="" class="cart-icon" style="float: left; margin-right: 10px; width: 20px; height: 20px; ">
                </div>
                 <div class="mx-auto">Masukkan ke Keranjang</div>
                </button>
          </div>
          <div class="relative group">
            <div class="w-full overflow-hidden rounded-md bg-gray-50 min-h-80 aspect-h-1 aspect-w-1 lg:aspect-none group-hover:opacity-75 lg:h-80">
              <img src="assets/img/gambar_bunga_3.png" alt="Front of men&#039;s Basic Tee in black." class="object-cover object-center w-full h-full mx-auto lg:h-72 lg:w-72">
            </div>
            <div class="flex justify-between mt-4">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Bunga palsu
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Kerajinan tangan</p>
              </div>
              <p class="text-sm font-medium text-gray-900">Rp45.000</p>
            </div>
            <button class="px-4 py-2 mt-2 font-bold text-white rounded bg-sky-500 hover:bg-sky-600" style="display: flex; align-items: center;">
                <div class="">
                  <img src="assets/img/shopping-cart1.png" alt="" class="cart-icon" style="float: left; margin-right: 10px; width: 20px; height: 20px; ">
                </div>
                 <div class="mx-auto">Masukkan ke Keranjang</div>
                </button>
          </div>
          <div class="relative group">
            <div class="w-full overflow-hidden rounded-md bg-gray-50 min-h-80 aspect-h-1 aspect-w-1 lg:aspect-none group-hover:opacity-75 lg:h-80">
                <img src="assets/img/kerajinan_bunga.png" alt="Front of men's Basic Tee in black." class="object-cover object-center w-full h-full mx-auto lg:h-72 lg:w-72">

            </div>
            <div class="flex justify-between mt-4">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Bunga palsu
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Kerajinan Tangan</p>
              </div>
              <p class="text-sm font-medium text-gray-900">Rp35.000</p>
            </div>
            <button class="px-4 py-2 mt-2 font-bold text-white rounded bg-sky-500 hover:bg-sky-600" style="display: flex; align-items: center;">
                <div class="">
                  <img src="assets/img/shopping-cart1.png" alt="" class="cart-icon" style="float: left; margin-right: 10px; width: 20px; height: 20px; ">
                </div>
                 <div class="mx-auto">Masukkan ke Keranjang</div>
                </button>
          </div>

        <!-- More products... -->
      </div>
    </div>
  </div>


    </div>
@endsection
