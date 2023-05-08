{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
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
        {{-- <div
            class="w-full flex flex-col lg:flex-row justify-between gap-8 -mx-3 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
            <div class="bg-white w-full border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Salary</h5>
                <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">This is your salary</p>
                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                    $320
                </div>
                <a href="#"
                    class="w-30 sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                    <div class="text-left">
                        <div class="-mt-1 font-sans text-sm font-semibold">Transfer</div>
                    </div>
                </a>
            </div>

            <div
                class="w-full max-w-full p-8 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center justify-between mb-4">
                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Latest Customers</h5>
                    <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                        View all
                    </a>
                </div>
                <div class="flow-root">
                    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-full" src="assets/img/aboutus/adid.jpeg" alt="Adid">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        Neil Sims
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        email@windster.com
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    $320
                                </div>
                            </div>
                        </li>
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-full" src="assets/img/aboutus/adid.jpeg" alt="Bonnie image">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        Bonnie Green
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        email@windster.com
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    $3467
                                </div>
                            </div>
                        </li>
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-full" src="assets/img/aboutus/adid.jpeg"
                                        alt="Michael image">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        Michael Gough
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        email@windster.com
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    $67
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div> --}}
        {{-- <div
            class="w-full flex flex-col lg:flex-row justify-between gap-8 -mx-3 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
            <div
                class="bg-white w-full border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Salary</h5>
                <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">This is your salary</p>
                <div class="flex">
                    <p class="px-5 items-center text-base text-xl font-semibold text-gray-900 dark:text-white">
                        Rp 100.000
                    </p>
                    <a href="#"
                        class="w-30 sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                        <div class="text-left">
                            <div class="-mt-1 font-sans text-sm font-semibold">Transfer</div>
                        </div>
                    </a>
                </div>

            </div>
            <div
                class="bg-white w-full border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Salary</h5>
                <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">This is your salary</p>
                <div></div>
                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                    $320
                </div>
                <a href="#"
                    class="w-30 sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                    <div class="text-left">
                        <div class="-mt-1 font-sans text-sm font-semibold">Transfer</div>
                    </div>
                </a>
            </div>
            <div
                class="bg-white w-full border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Salary</h5>
                <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">This is your salary</p>
                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                    $320
                </div>
                <a href="#"
                    class="w-30 sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                    <div class="text-left">
                        <div class="-mt-1 font-sans text-sm font-semibold">Transfer</div>
                    </div>
                </a>
            </div>

        </div> --}}
        <div
            class="lg:w-1/2 lg:flex-row justify-between gap-8 -mx-3 mr-4 mb-10 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
            <div class="bg-white w-full border border-gray-200 rounded-lg shadow p-8 dark:bg-gray-800 dark:border-gray-700">
                <h5 class="text-xl font-bold px-2 leading-none text-gray-900 dark:text-white">Salary</h5>
                <p class="mb-5 text-base px-2 text-gray-500 sm:text-lg dark:text-gray-400">Salary Ammount : </p>
                <p class="px-28 text-center text-4xl font-bold text-gray-900 dark:text-white">
                    Rp 100.000
                </p>
                <div class="flex justify-end px-3 py-1">
                    <a href="#"
                        class="w-30 sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg flex items-center justify-center px-4 py-3 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                        <div class="-mt-1 font-sans text-sm font-semibold">Transfer</div>
                    </a>
                </div>
            </div>
        </div>

        <!-- row 2 -->
        <div class="bg-gray-50 shadow-md sm:rounded-lg  mt-10 -mx-3 w-full">
            <header
                class="p-5 text-lg font-semibold text-left text-gray-900 border border-gray-100 rounded-lg bg-white dark:bg-gray-800 dark:border-gray-700">
                Transaksi Terakhir
            </header>
            <div class="mb-4 border border-gray-100 rounded-lg bg-white dark:bg-gray-800 dark:border-gray-700">
                <div class="p-5 bg-gray-50"><time class="text-lg font-semibold text-gray-900 dark:text-white">May 5th,
                        2023</time></div>
                <ol class="divide-y divider-gray-200 bg-white dark:divide-gray-700">
                    <li>
                        <div class="flex hover:bg-gray-100 dark:hover:bg-gray-700 justify-between">
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
                                <p class="text-lg my-auto mx-7 md:mx-24 font-semibold px-2 text-gray-900 dark:text-white">Rp
                                    50.000</p>
                            </div>
                        </div>
                    </li>
                </ol>
            </div>
            <div class="border border-gray-100 rounded-lg bg-white dark:bg-gray-800 dark:border-gray-700">
                <div class="p-5 bg-gray-50"><time class="text-lg font-semibold text-gray-900 dark:text-white">May 6th,
                        2023</time></div>
                <ol class="divide-y divider-gray-200 bg-white dark:divide-gray-700">
                    <li>
                        <div class="flex hover:bg-gray-100 dark:hover:bg-gray-700 justify-between">
                            <div class="flex">
                                <a href="#" class="items-center block px-8 py-4 pt-3 sm:flex ">
                                    <img class="w-12 h-12 mb-3 mr-3 rounded-full sm:mb-0"
                                        src="assets/img/aboutus/fatiya.jpeg" alt="Quzza image" />
                                    <div class="text-gray-600 dark:text-gray-400">
                                        <div class="text-base font-normal"><span
                                                class="font-medium text-gray-900 dark:text-white">Quzza</span> memesan <span
                                                class="font-medium text-gray-900 dark:text-white">Antar Jemput Sampah</span>
                                        </div>
                                        <div class="text-sm font-normal">Neusu, Jl. Merak</div>
                                    </div>
                                    <span
                                        class="inline-flex items-center text-xs font-normal text-gray-500 dark:text-gray-400">
                                        21:23
                                    </span>
                                </a>
                            </div>
                            <div class="flex">
                                <p class="text-lg my-auto mx-7 md:mx-24 font-semibold px-2 text-gray-900 dark:text-white">Rp
                                    25.000</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex hover:bg-gray-100 dark:hover:bg-gray-700 justify-between">
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
                                <p class="text-lg my-auto mx-7 md:mx-24 font-semibold px-2 text-gray-900 dark:text-white">Rp
                                    25.000</p>
                            </div>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
        <footer class="pt-4">
            <div class="w-full px-6 mx-auto">
                <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                    <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                        <div class="leading-normal text-center text-sm text-slate-500 lg:text-left">
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
                                    class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500"
                                    target="_blank">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation"
                                    class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500"
                                    target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://creative-tim.com/blog"
                                    class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500"
                                    target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license"
                                    class="block px-4 pt-0 pb-1 pr-0 font-normal transition-colors ease-soft-in-out text-sm text-slate-500"
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
