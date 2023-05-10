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
        <div
            class="justify-between gap-8 mb-10 mr-4 -mx-3 lg:w-1/2 lg:flex-row bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
            <div class="w-full p-8 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <h5 class="px-2 text-xl font-bold leading-none text-gray-900 dark:text-white">Salary</h5>
                <p class="px-2 mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Salary Ammount : </p>
                <p class="text-4xl font-bold text-center text-gray-900 px-28 dark:text-white">
                    Rp 100.000
                </p>
                <div class="flex justify-end px-3 py-1">
                    <a href="#"
                        class="flex items-center justify-center px-4 py-3 text-white bg-gray-800 rounded-lg w-30 sm:w-auto hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                        <div class="-mt-1 font-sans text-sm font-semibold">Transfer</div>
                    </a>
                </div>
            </div>
        </div>

        <!-- row 2 -->
        <div class="w-full mt-10 -mx-3 shadow-md bg-gray-50 sm:rounded-lg">
            <header
                class="p-5 text-lg font-semibold text-left text-gray-900 bg-white border border-gray-100 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                Transaksi Terakhir
            </header>
            @foreach ($data as $item)
            <div class="bg-white border border-gray-100 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                <div class="p-5 bg-gray-50"><time class="text-lg font-semibold text-gray-900 dark:text-white">
                    {{ \Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }}</time></div>

                <ol class="bg-white divide-y divider-gray-200 dark:divide-gray-700">
                    <li>
                        <div class="flex justify-between hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="flex">
                                <a href="#" class="items-center block px-8 py-4 pt-3 sm:flex ">
                                    <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0"
                                        src="assets/img/profile.jpg" alt="Quzza image" />
                                    <div class="text-gray-600 dark:text-gray-400">
                                        <div class="text-base font-normal"><span
                                                class="font-medium text-gray-900 dark:text-white">{{ $item->nama }}</span> memesan <span
                                                class="font-medium text-gray-900 dark:text-white">Antar Jemput Sampah</span>
                                        </div>
                                        <div class="text-sm font-normal">
                                            {{ $item->alamat }}
                                        </div>
                                    </div>
                                    <span
                                        class="inline-flex items-center text-xs font-normal text-gray-500 dark:text-gray-400">
                                        {{ \Carbon\Carbon::parse($item->tanggal)->format('H:i:s') }}
                                    </span>
                                </a>
                            </div>
                            <div class="flex">
                                <p class="px-2 my-auto text-lg font-semibold text-gray-900 mx-7 md:mx-24 dark:text-white">Rp
                                    25.000</p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    {{-- <li>
                        <div class="flex justify-between hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="flex">
                                <a href="#" class="items-center block px-8 py-4 pt-3 sm:flex ">
                                    <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0"
                                        src="assets/img/aboutus/farhan.jpeg" alt="Parhan image" />
                                    <div class="text-gray-600 dark:text-gray-400">
                                        <div class="text-base font-normal"><span
                                                class="font-medium text-gray-900 dark:text-white">Parhan</span> memesan
                                            <span class="font-medium text-gray-900 dark:text-white">Antar Jemput
                                                Sampah</span>
                                        </div>
                                        <div class="text-sm font-normal">Peunayong, Jl. Kartini</div>
                                    </div>
                                    <span
                                        class="inline-flex items-center text-xs font-normal text-gray-500 dark:text-gray-400">
                                        22:23
                                    </span>
                                </a>
                            </div>
                            <div class="flex">
                                <p class="px-2 my-auto text-lg font-semibold text-gray-900 mx-7 md:mx-24 dark:text-white">Rp
                                    25.000</p>
                            </div>
                        </div>
                    </li>
                </ol>
            </div>
            <div class="bg-white border border-gray-100 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                <div class="p-5 bg-gray-50"><time class="text-lg font-semibold text-gray-900 dark:text-white">May 5th,
                        2023</time></div>
                <ol class="bg-white divide-y divider-gray-200 dark:divide-gray-700">
                    <li>
                        <div class="flex justify-between hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="">
                                <a href="#" class="items-center block px-8 py-4 pt-3 sm:flex ">
                                    <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0" src="assets/img/aboutus/adid.jpeg"
                                        alt="Adid image" />
                                    <div class="text-gray-600 dark:text-gray-400">
                                        <div class="text-base font-normal"><span
                                                class="font-medium text-gray-900 dark:text-white">Adid</span> memesan <span
                                                class="font-medium text-gray-900 dark:text-white">Antar Jemput Sampah</span>
                                        </div>
                                        <div class="text-sm font-normal">Indrapuri, Jl. Medan Banda Aceh</div>
                                    </div>
                                    <span
                                        class="inline-flex items-center text-xs font-normal text-gray-500 dark:text-gray-400">
                                        20:23
                                    </span>
                                </a>
                            </div>
                            <div class="flex">
                                <p class="px-2 my-auto text-lg font-semibold text-gray-900 mx-7 md:mx-24 dark:text-white">Rp
                                    50.000</p>
                            </div>
                        </div>
                    </li> --}}
                </ol>
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
