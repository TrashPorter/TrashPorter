{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in admin!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('driver.layouts.driver')

@section('content')
    @include('driver.layouts.partials.topnav')
    <!-- cards -->
    <div class="w-full px-6 py-6 mx-auto">
        <!-- row 1 -->
        <div class="flex flex-wrap w-full -mx-3">

            <div class="relative w-full overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <caption
                        class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        TrashPorter Order
                    </caption>
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Alamat
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Pesanan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="flex justify-end px-6 py-3 mr-7">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full" src="assets/img/profile.jpg" alt="Jese image">
                                    <div class="pl-3">
                                        <div class="text-base font-semibold">{{ $item->nama }}</div>
                                        <div class="font-normal text-gray-500">{{ $item->email }}</div>
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                    {{ $item->alamat }}
                                </td>
                                <td class="px-6 py-4">
                                    @foreach (explode(' ',$item->pesanan)  as $pesanan)
                                    {{ $pesanan }} <br>
                                    @endforeach
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->tanggal }} </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        {{-- <span class="status" data-id="{{ $item->id }}">
                                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2" ></div>
                                    {{-- <div class="status" data-id="{{ $item->id }}"></div>
                                     --}}
                                        @if ($item->status == '0')
                                            <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2">

                                            </div>
                                            <div class="flex items-center">
                                                Pending
                                           </div>

                                        @elseif ($item->status == '1')
                                            <div class="h-2.5 w-2.5 rounded-full bg-yellow-300 mr-2">

                                            </div>
                                            <div class="flex items-center">
                                                On-proggress
                                           </div>

                                        @else
                                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2">

                                            </div>
                                            <div class="flex items-center">
                                                Done
                                           </div>

                                            {{-- </span> --}}
                                        @endif
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="mx-2">
                                        @if ($item->status == 0)
                                        <a href=" {{ route('updateStatus', ['id' => $item->id, 'status' => 1, 'driver_id' => Auth::user()->id ]) }} "
                                        class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Take</a>
                                        @elseif ($item->status == 1 && $item->driver_id == Auth::user()->id)

                                        <a href=" {{ route('updateStatus', ['id' => $item->id, 'status' => 2, 'driver_id' => Auth::user()->id  ]) }}"
                                        class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Done</a>
                                        @else
                                        <a href=""
                                        class=""></a>
                                            {{-- </span> --}}
                                        @endif
                                        {{-- <a href=""
                                            class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Take</a> --}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        {{-- <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="assets/img/aboutus/fatiya.jpeg"
                                    alt="Jese image">
                                <div class="pl-3">
                                    <div class="text-base font-semibold">Quzza</div>
                                    <div class="font-normal text-gray-500">quzza@gmail.com</div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                Neusu
                            </td>
                            <td class="px-6 py-4">
                                Indomie (1 Kg)
                            </td>
                            <td class="px-6 py-4">
                                Selasa, 6 Mei 2023 21:23                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-yellow-300 mr-2"></div> On Process
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="mx-2">
                                    <a href=""
                                        class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Done</a>
                                </div>
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="assets/img/aboutus/farhan.jpeg"
                                    alt="Jese image">
                                <div class="pl-3">
                                    <div class="text-base font-semibold">Parhan</div>
                                    <div class="font-normal text-gray-500">parhan@gmail.com</div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                Peunayong
                            </td>
                            <td class="px-6 py-4">
                                Mie Aceh (2 Kg)
                            </td>
                            <td class="px-6 py-4">
                                Selasa, 6 Mei 2023 22:23                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                     Done
                                </div>
                            </td>
                        <td class="px-6 py-4 text-right">
                            {{-- <div class="mx-2">
                                    <a href=""
                                        class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Take</a>
                                </div> --}}
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <footer class="pt-4">
            <div class="w-full px-6 mx-auto">
                <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                    <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                        <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                            ©
                            <script>
                                document.write(new Date().getFullYear() + ",");
                            </script>
                            {{--  <i class="fa fa-heart"></i> by --}}made by
                            <a href="https://www.creative-tim.com" class="font-semibold text-slate-700"
                                target="_blank">TrashPorter Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                        <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com"
                                    class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500"
                                    target="_blank">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation"
                                    class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500"
                                    target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://creative-tim.com/blog"
                                    class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500"
                                    target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license"
                                    class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-soft-in-out text-slate-500"
                                    target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end cards -->
@endsection
