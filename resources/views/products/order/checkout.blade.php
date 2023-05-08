@extends('layouts.main')

@section('container')
    @include('layouts.partials.header')
    {{--
{-- <div class="flex items-center justify-center py-8">
    <button onclick="checkoutHandler(false)" class="px-10 py-2 text-white bg-indigo-600 rounded hover:bg-indigo-700">Open Modal</button>
</div> --}}
    <div class="top-0 w-full h-full pt-10 overflow-x-hidden overflow-y-auto pd-fixed bg-gray-50 dark:bg-gray-900 bg-opacity-90 sticky-0"
        id="chec-div">
        <div class="flex justify-center z-10 w-full h-full overflow-x-hidden transition duration-700 ease-in-out transform translate-x-0"
            id="checkout">
            <div class="flex flex-col items-end justify-end lg:flex-row" id="cart">
                <div class="w-full h-auto px-4 py-4 overflow-x-hidden overflow-y-hidden bg-white lg:w-2/3 md:w-8/12 lg:px-8 lg:py-14 md:px-6 md:py-8 dark:bg-gray-800 lg:h-screen"
                    id="scroll">
                    <div class="flex items-center text-gray-500 cursor-pointer hover:text-gray-600 dark:text-white"
                        onclick="checkoutHandler(false)">

                        <a href="{{ route('produk.view') }}" class="btn btn-secondary"> Back</a>

                    </div>

                    <p class="pt-3 text-3xl font-black leading-10 text-gray-800 lg:text-4xl dark:text-white">Checkout Produk
                    </p>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($pesanan_detail as $pesan_detail)
                        <div class="py-8 border-t md:flex items-strech md:py-10 lg:py-8 border-gray-50">
                            <div class="flex items-center">

                                <div>
                                    {{-- <p class="text-sm font-medium text-gray-900">Item pertama</p> --}}
                                </div>
                            </div>

                            <div class="w-full md:w-4/12 2xl:w-1/4">
                                <img src="{{ url('assets/img') }}/{{ $pesan_detail->gambar }}"
                                    alt="product{{ $pesan_detail->id }}"
                                    class="hidden object-cover object-center h-full md:block" />
                                <img src="{{ url('assets/img') }}/{{ $pesan_detail->gambar }}"
                                    alt="product{{ $pesan_detail->id }}"
                                    class="object-cover object-center w-full h-full md:hidden" />
                            </div>
                            <div class="flex flex-col justify-center md:pl-3 md:w-8/12 2xl:w-3/4">
                                <p class="pt-4 text-xs leading-3 text-gray-800 dark:text-white md:pt-0">#Barang
                                    {{ $no++ }}
                                </p>
                                <div class="flex items-center justify-between w-full pt-1">
                                    <p class="text-base font-black leading-none text-gray-800 dark:text-white">
                                        {{ $pesan_detail->produk->nama }}
                                    </p>

                                    <div class="flex items-center justify-between">
                                        <button
                                            class="px-2 py-1 mr-2 border border-gray-200 focus:outline-none dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white"
                                            onclick="event.preventDefault(); var oldValue = parseInt(document.querySelector('#input1').value); if(oldValue > 1){document.querySelector('#input1').value = oldValue - 1; updatePrice(oldValue - 1);}">-</button>
                                        <input type="text" id="input1" value="{{ $pesan_detail->jumlah }}"
                                            class="w-10 px-1 py-2 mx-auto mr-0 text-center border border-gray-200 focus:outline-none dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white"
                                            min="1" max="10"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 2)"
                                            onchange="updatePrice(parseInt(this.value))">
                                        <button
                                            class="px-2 py-1 ml-2 border border-gray-200 focus:outline-none dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white"
                                            onclick="event.preventDefault(); var oldValue = parseInt(document.querySelector('#input1').value); document.querySelector('#input1').value = oldValue + 1; updatePrice(oldValue + 1);">+</button>
                                    </div>
                                </div>

                                <p class="pt-2 text-xs leading-3 text-gray-600 dark:text-white">Harga : Rp.
                                    {{ number_format($pesan_detail->produk->harga) }}</p>

                                <div class="flex items-center justify-between pt-5">
                                    <div class="flex items-start">
                                        <form action="" method="POST">
                                            <button type="submit"><img
                                                    src="{{ Vite::asset('public/assets/img/trash.png') }}"
                                                    alt=""></button>
                                        </form>
                                    </div>
                                    <p id="price"
                                        class="flex items-end text-base font-black leading-none text-gray-800 dark:text-white">
                                        Rp {{ number_format($pesan_detail->jumlah_harga) }} </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="py-8 border-t md:flex items-strech md:py-10 lg:py-8 border-gray-50">
                        <div class="flex items-center">

                            <div>
                                
                            </div>
                        </div>
                        <div class="w-full md:w-4/12 2xl:w-1/4">

                            <img src="https://i.ibb.co/c6KyDXN/Rectangle-5-1.png" alt="Gray Sneakers"
                                class="hidden object-cover object-center h-full md:block" />
                            <img src="https://i.ibb.co/yVSpYqx/Rectangle-6.png" alt="Gray Sneakers"
                                class="object-cover object-center w-full h-full md:hidden" />
                        </div>
                        <div class="flex flex-col justify-center md:pl-3 md:w-8/12 2xl:w-3/4">
                            <p class="pt-4 text-xs leading-3 text-gray-800 dark:text-white md:pt-0">RF293</p>
                            <div class="flex items-center justify-between w-full pt-1">
                                <p class="text-base font-black leading-none text-gray-800 dark:text-white">LW sneakers</p>
                                <div class="flex items-center justify-between">
                                    <button
                                        class="px-2 py-1 mr-2 border border-gray-200 focus:outline-none dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white"
                                        onclick="event.preventDefault(); var oldValue = parseInt(document.querySelector('#input2').value); if(oldValue > 1){document.querySelector('#input2').value = oldValue - 1 ;updatePrice1(oldValue - 1);}">-</button>
                                    <input type="text" id="input2" value="1"
                                        class="w-10 px-1 py-2 mx-auto mr-0 text-center border border-gray-200 focus:outline-none dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white"
                                        min="1" max="10"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 2)">
                                    <button
                                        class="px-2 py-1 ml-2 border border-gray-200 focus:outline-none dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white"
                                        onclick="event.preventDefault(); var oldValue = parseInt(document.querySelector('#input2').value); document.querySelector('#input2').value = oldValue + 1; updatePrice1(oldValue + 1);">+</button>
                                </div>


                            </div>
                            <p class="pt-2 text-xs leading-3 text-gray-600 dark:text-white">Height: 10 inches</p>
                            <p class="py-4 text-xs leading-3 text-gray-600 dark:text-white">Color: Black</p>
                            <p class="text-xs leading-3 text-gray-600 w-96 dark:text-white">Composition: 100% calf leather
                            </p>
                            <div class="flex items-center justify-between pt-5">
                                <div class="flex itemms-center">
                                    <p class="text-xs leading-3 text-gray-800 underline cursor-pointer dark:text-white">Add
                                        to favorites</p>
                                    <p class="pl-5 text-xs leading-3 text-red-500 underline cursor-pointer">Remove</p>
                                </div>
                                <p id="price1" class="text-base font-black leading-none text-gray-800 dark:text-white">
                                    Rp90.000</p>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="py-8 border-t md:flex items-strech md:py-10 lg:py-8 border-gray-50">
                        <div class="flex items-center">

                            <div>
                                
                            </div>
                        </div>
                        <div class="w-full md:w-4/12 2xl:w-1/4">

                            <img src="https://i.ibb.co/6gzWwSq/Rectangle-20-1.png" alt="Black Leather Purse"
                                class="hidden object-cover object-center h-full md:block" />
                            <img src="https://i.ibb.co/TTnzMTf/Rectangle-21.png" alt="Black Leather Purse"
                                class="object-cover object-center w-full h-full md:hidden" />
                        </div>
                        <div class="flex flex-col justify-center md:pl-3 md:w-8/12 2xl:w-3/4">
                            <p class="pt-4 text-xs leading-3 text-gray-800 dark:text-white md:pt-0">RF293</p>
                            <div class="flex items-center justify-between w-full">
                                <p class="text-base font-black leading-none text-gray-800 dark:text-white">Luxe card holder
                                </p>
                                <div class="flex items-center justify-between">
                                    <button
                                        class="px-2 py-1 mr-2 border border-gray-200 focus:outline-none dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white"
                                        onclick="event.preventDefault(); var oldValue = parseInt(document.querySelector('#input3').value); if(oldValue > 1){document.querySelector('#input3').value = oldValue - 1;updatePrice2(oldValue - 1);}">-</button>
                                    <input type="text" id="input3" value="1"
                                        class="w-10 px-1 py-2 mx-auto mr-0 text-center border border-gray-200 focus:outline-none dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white"
                                        min="1" max="10"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 2)">

                                    <button
                                        class="px-2 py-1 ml-2 border border-gray-200 focus:outline-none dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white"
                                        onclick="event.preventDefault(); var oldValue = parseInt(document.querySelector('#input3').value); document.querySelector('#input3').value = oldValue + 1;updatePrice2(oldValue + 1);">+</button>
                                </div>
                            </div>
                            <p class="pt-2 text-xs leading-3 text-gray-600 dark:text-white">Height: 10 inches</p>
                            <p class="py-4 text-xs leading-3 text-gray-600 dark:text-white">Color: Black</p>
                            <p class="text-xs leading-3 text-gray-600 w-96 dark:text-white">Composition: 100% calf leather
                            </p>
                            <div class="flex items-center justify-between pt-5">
                                <div class="flex itemms-center">
                                    <p class="text-xs leading-3 text-gray-800 underline cursor-pointer dark:text-white">
                                        Remove</p>
                                    <p class="pl-5 text-xs leading-3 text-red-500 underline cursor-pointer"></p>
                                </div>
                                <p id="price2" onchange="setsubtotal()"
                                    class="text-base font-black leading-none text-gray-800 dark:text-white">
                                    Rp90.000</p>
                                {{-- <script>
                                        var price0 = querySelector("#price2").value;
                                        document.getElementById("subtotal").innerText = 'Rp' + price0.toLocaleString();
                                    </script> 
                            </div>
                        </div>
                    </div> --}}

                </div>

                <script>
                    function updatePrice2(value) {
                        const dompet = document.getElementById('dompet');
                        const price2El = document.getElementById('price2');
                        let price2 = parseInt(price2El.innerText.replace('Rp', '').replace('.', ''));
                        price2 = value * 90000;
                        price2El.innerText = 'Rp' + price2.toLocaleString();
                        dompet.innerText = 'Rp' + price2.toLocaleString();

                    }

                    function updatePrice1(value) {
                        const pricePL = document.getElementById('sepatu');
                        const price1El = document.getElementById('price1');
                        let price1 = parseInt(price1El.innerText.replace('Rp', '').replace('.', ''));
                        price1 = value * 90000;
                        price1El.innerText = 'Rp' + price1.toLocaleString();
                        pricePL.innerText = 'Rp' + price1.toLocaleString();

                    }

                    function updatePrice(value) {
                        const priceOL = document.getElementById('tas');
                        const priceEl = document.getElementById('price');
                        let price = parseInt(priceEl.innerText.replace('Rp', '').replace('.', ''));
                        price = value * 90000;
                        priceEl.innerText = 'Rp' + price.toLocaleString();
                        priceOL.innerText = 'Rp' + price.toLocaleString();

                    }

                    // function updateSubtotal() {
                    //     const priceEl = document.getElementById('price');
                    //     const price1El = document.getElementById('price1');
                    //     const price2El = document.getElementById('price2');
                    //     const subtotalEl = document.getElementById('subtotal');

                    //     priceEl.addEventListener('input1', updateSubtotal);
                    //     price1El.addEventListener('input2', updateSubtotal);
                    //     price2El.addEventListener('input3', updateSubtotal);
                    //     subtotalEl.addEventListener('input', updateSubtotal);

                    // }

                    // const checkoutBtn = document.getElementById('total');
                    // checkoutBtn.addEventListener('click', function() {
                    //     updateSubtotal();
                    // });
                </script>
                <div class="w-full h-full bg-gray-100 lg:w-96 md:w-8/12 dark:bg-gray-900">
                    <div
                        class="flex flex-col justify-between h-auto px-4 py-6 overflow-y-auto lg:h-screen lg:px-8 md:px-7 lg:py-20 md:py-10">
                        <div>
                            <p class="text-3xl font-black leading-9 text-gray-800 lg:text-4xl dark:text-white">Summary</p>
                            @foreach ($pesanan_detail as $pesan_detail)
                                <div class="flex items-center justify-between pt-16">
                                    <p class="text-base leading-none text-gray-800 dark:text-white">
                                        {{ $pesan_detail->produk->nama }}</p>
                                    <p id="tas" class="text-base leading-none text-gray-800 dark:text-white">Rp
                                        {{ number_format($pesan_detail->jumlah_harga) }}
                                    </p>
                                    {{-- <p id="subtotal2" class="text-base leading-none text-gray-800 dark:text-white">Rp90.000</p> --}}

                                </div>
                            @endforeach

                        </div>

                        <div>
                            <div class="mt-6 border border-gray-500 border-solid"></div>
                            <div class="flex items-center justify-between pt-20 pb-6 lg:pt-5">

                                <p class="text-2xl leading-normal text-gray-800 dark:text-white">Total</p>
                                <p id="total"
                                    class="text-2xl font-bold leading-normal text-right text-gray-800 dark:text-white">tes
                                </p>
                                <script>
                                    function total() {
                                        const ongkir = document.getElementById("#ongkir").innerHTML; // Mengambil nilai dari elemen dengan id="ongkir"
                                        const total = document.getElementById("#total"); // Memilih elemen dengan id="total"
                                        total.innerHTML = ongkir; // Menetapkan nilai dari elemen dengan id="ongkir" ke elemen dengan id="total"



                                    }
                                </script>
                            </div>
                            <button onclick="checkoutHandler1(true)"
                                class="w-full py-5 text-base leading-none text-white bg-gray-800 border border-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 dark:hover:bg-gray-700">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            /* width */
            #scroll::-webkit-scrollbar {
                width: 1px;
            }

            /* Track */
            #scroll::-webkit-scrollbar-track {
                background: #f1f1f1;
            }

            /* Handle */
            #scroll::-webkit-scrollbar-thumb {
                background: rgb(133, 132, 132);
            }
        </style>
