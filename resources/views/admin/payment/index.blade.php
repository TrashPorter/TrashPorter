@extends('admin.layouts.admin')

@section('content')
    @include('admin.layouts.partials.topnav', ['title' => 'Payment'])
    <!-- cards -->
    <div class="w-full px-6 py-6 mx-auto">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3 w-full">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <caption
                        class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Payment

                    </caption>
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Phone Number
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Shipping cost
                            </th>
                            <th scope="col" class="px-6 py-3">
                                User Earn
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>

                            <th scope="col" class="pr-5">
                                <div class="flex lg:justify-end md:justify-center lg:mr-12 md:mr-0">
                                    Actions
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Sofia Fei
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap dark:text-white">
                                0812345678910
                            </td>

                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap dark:text-white">
                                Rp. 10.000
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap dark:text-white">
                                RP. 75.000
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap dark:text-white">
                                Complete
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

                        {{-- @foreach ($a as $data)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $data->nama }}
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap dark:text-white">
                                    {{ $data->nomor }}
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap dark:text-white">
                                    Rp. {{ $data->ongkir }}
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap dark:text-white">
                                    Rp. {{ $data->harga_total }}
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-600 whitespace-nowrap dark:text-white">
                                    {{ $data->status }}
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
