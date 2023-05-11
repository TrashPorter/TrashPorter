@extends('admin.layouts.admin')

@section('content')
    @include('admin.layouts.partials.topnav', ['title' => 'Product'])
    <!-- cards -->
    <div class="w-full px-6 py-6 mx-auto">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3 w-full">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <caption
                        class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Product
                        <a href="{{ route('admin.produks.create') }}"
                            class="mt-1 px-4 py-2 mb-2 bg-blue-100 text-blue-800 text-xs font-medium mr-2 rounded dark:bg-blue-900 dark:text-blue-300">Add
                            Product</a>
                    </caption>
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Product Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Picture
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Stock
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>
                            <th scope="col" class="pr-5">
                                <div class="flex lg:justify-end md:justify-center lg:mr-12 md:mr-0">
                                    Actions
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($produks as $produk)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Pupuk NPK Mutiara
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap dark:text-white">
                                Hasil olahan sampah
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap dark:text-white ">
                                <img src="{{ Vite::asset('public/assets/img/gandasil_pupuk.jpg') }}" alt="">
                                <img src="{{ Vite::asset('public/assets/img/' . $produk->gambar) }}" alt="">
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap dark:text-white">
                                Rp. 75000
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap dark:text-white">
                                50
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap dark:text-white">
                                pupuk hasil olahan sampah
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="mx-2">
                                    <a href=""
                                        class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">Edit</a>
                                    |
                                    <form method="POST" class="inline-block" action=""
                                        onsubmit="return confirm('Apakah Anda Yakin?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300 ml-2">
                                            Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach --}}


                        @foreach ($produks as $produk)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $produk->nama }}
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap dark:text-white">
                                    {{ $produk->kategori }}
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap dark:text-white">
                                    <div class="w-32">
                                        <img src="{{ Vite::asset('public/assets/img/' . $produk->gambar) }}" alt="">
                                    </div>
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap dark:text-white">
                                    Rp. {{ number_format($produk->harga) }}
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap dark:text-white">
                                    {{ number_format($produk->stok) }}
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap dark:text-white">
                                    {{ $produk->deskripsi }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="mx-2">
                                        <a href="{{ route('admin.produks.edit', $produk->id) }}"
                                            class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">Edit</a>
                                        |
                                        <form method="POST" class="inline-block"
                                            action="{{ route('admin.produks.destroy', $produk->id) }}"
                                            onsubmit="return confirm('Apakah Anda Yakin?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300 ml-2">
                                                Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        <footer class="fixed bottom-0 pt-4">
            <div class="w-full px-6 mx-auto">
                <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                    <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0   ">
                        <div class="leading-normal text-center text-sm text-slate-500 lg:text-left">
                            ©
                            <script>
                                document.write(new Date().getFullYear() + ",");
                            </script>
                            {{--  <i class="fa fa-heart"></i> by --}}made by
                            <a href="" class="font-semibold text-slate-700" target="_blank">TrashPorter Tim</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end cards -->
@endsection
