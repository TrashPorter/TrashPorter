<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="resources/css/app.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/white_logo.png">



    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen ">
    <div class="min-h-screen ">
        <header class="absolute w-10 py-2 mx-4 hover:animate-pulse">
        </header>

        <div
            class="flex flex-col items-center min-h-screen sm:justify-center sm:pt-0 bg-gradient-to-r from-cyan-500 to-blue-500">

            <div class="flex justify-center">
                <div class="justify-center mx-5">
                    <h2 class="w-full text-3xl font-bold tracking-tight text-white">TrashPorter</h2>
                </div>
            </div>
            <div class="flex justify-center px-6 mt-1">
                <p class="text-white"> Reduce, reuse, and recycle to prevent further damage to our environment</p>
            </div>
            <div
                class="w-full px-6 py-4 mt-6 overflow-hidden bg-white border border-gray-200 rounded-lg shadow sm:max-w-md dark:bg-gray-800 dark:border-gray-700 sm:rounded-lg ">
                <div class="flex justify-center w-24 mx-auto mb-4">
                    <a href="/">
                        <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
                    </a>
                </div>

                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
