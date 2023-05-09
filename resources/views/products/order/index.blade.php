@extends('layouts.main')

@section('container')
    @include('layouts.partials.header')

    <div class="bg-white pt-20">
        <div class="flex justify-center mb-5">

            <div class="flex flex-row justify-start mx-4">
                <a href="{{ route('produk.view') }}"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
            <div
                class="flex flex-row items-center h-500 bg-white border border-gray-200 rounded-lg shadow w-1/2 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mb-8">

                <img class="object-fit w-1/2 h-auto rounded-t-lg md:rounded-none md:rounded-l-lg bg-gray-50"
                    src="{{ url('assets/img') }}/{{ $produk->gambar }}" alt="{{ $produk->slug }}">
                <div class="flex flex-col justify-start p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $produk->nama }}
                    </h5>
                    <div class="relative overflow-x-auto sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <tbody>
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap  dark:text-white dark:bg-gray-800">
                                        Deskripsi
                                    </th>
                                    <td class="px-6 py-2">{{ $produk->deskripsi }}
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap  dark:text-white dark:bg-gray-800">
                                        Harga
                                    </th>
                                    <td class="px-6 py-2">Rp. {{ number_format($produk->harga) }}
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap  dark:text-white dark:bg-gray-800">
                                        Stok
                                    </th>
                                    <td class="px-6 py-2">{{ number_format($produk->stok) }}
                                    </td>
                                </tr>
                                <form action="" method="post">
                                    @csrf
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white dark:bg-gray-800">
                                            Jumlah Pesan
                                        </th>
                                        <td class="row px-6 py-2">
                                            <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

                                            <div x-data="{ productQuantity: 1 }">
                                                <label for="Quantity" class="sr-only"> Quantity </label>

                                                <div class="flex items-center gap-1">
                                                    <button type="button" x-on:click="productQuantity--"
                                                        :disabled="productQuantity === 0"
                                                        class="w-10 h-10 leading-10 text-gray-600 transition hover:opacity-75">
                                                        &minus;
                                                    </button>

                                                    <input type="number" name="Quantity" required id="Quantity"
                                                        x-model="productQuantity"
                                                        class="h-10 w-16 rounded border-gray-200 text-center [-moz-appearance:_textfield] sm:text-sm [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none" />

                                                    <button type="button" x-on:click="productQuantity++"
                                                        class="w-10 h-10 leading-10 text-gray-600 transition hover:opacity-75">
                                                        &plus;
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="px-6 py-2 border-gray-200 dark:border-gray-700">
                                        <td>

                                        </td>
                                        <td class="px-6 py-2">
                                            <div class="flex justify-center mt-3 ">
                                                <button type="submit"
                                                    class="text-sky-600 hover:text-white border border-sky-600 hover:bg-sky-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800"><i
                                                        class="fa fa-shopping-cart mr-2"></i>Masukkan
                                                    Keranjang</button>
                                            </div>
                                        </td>

                                    </tr>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




    </div>
@endsection
