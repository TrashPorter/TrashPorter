<!--
=========================================================
* Soft UI Dashboard Tailwind - v1.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard-tailwind
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="logo_aja" sizes="76x76" href="{{ Vite::asset('public/assets/img/logo_aja.png') }}" />
    <link rel="icon" type="image/png" href="{{ Vite::asset('public/assets/img/white_logo.png') }}" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link id="pagestyle" href="{{ URL::asset('assets/css/soft-ui-dashboard-tailwind.css') }}" rel="stylesheet" />
    <title>TrashPorter | Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @include('admin.layouts.partials.link')
</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    @include('sweetalert::alert')
    @include('admin.layouts.partials.sidenav')
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        @if (Session::has('message'))
            <div id="marketing-banner" tabindex="-1"
                class="fixed z-50 flex flex-col md:flex-row justify-between w-[calc(100%-2rem)] p-4 -translate-x-1/2 bg-white border border-gray-100 rounded-lg shadow-sm lg:max-w-7xl left-1/2 top-6 dark:bg-gray-700 dark:border-gray-600">
                <div class="flex flex-col items-start mb-3 mr-4 md:items-center md:flex-row md:mb-0">
                    <a href=""
                        class="flex items-center mb-2 border-gray-200 md:pr-4 md:mr-4 md:border-r md:mb-0 dark:border-gray-600">
                        <img src="{{ Vite::asset('public/assets/img/logo_aja.png') }}" class="h-6 mr-2"
                            alt="TrashPorter">
                        <span
                            class="self-center text-lg font-semibold whitespace-nowrap dark:text-white">TrashPorter</span>
                    </a>
                    <p class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400">
                        {{ Session::get('message') }}</p>
                </div>
                <div class="flex items-center flex-shrink-0">
                    <button data-dismiss-target="#marketing-banner" type="button"
                        class="absolute top-2.5 right-2.5 md:relative md:top-auto md:right-auto flex-shrink-0 inline-flex justify-center items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close banner</span>
                    </button>
                </div>
            </div>
        @endif
        @yield('content')
    </main>
    {{-- @include('admin.layouts.partials.footer') --}}
    @include('admin.layouts.partials.script')

</body>

</html>
