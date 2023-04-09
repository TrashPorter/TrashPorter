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


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen ">
    <div class="min-h-screen ">
        <header class="absolute w-10 py-2 mx-4 hover:animate-pulse">
            <a href=""><img src="assets/img/back-arrow.png" alt="gambar"></a>
        </header>

        <div class="min-h-screen flex flex-col sm:justify-center items-center sm:pt-0 bg-gradient-to-r from-cyan-500 to-blue-500">

            <div class="flex justify-center">
                <div class="mx-6 justify-center">
                    <h2 class="font-bold text-3xl w-full tracking-tight text-white">TrashPorter</h2>
                </div>

            </div>
            <div class="flex justify-center mt-1 px-6">
                <p class="text-white"> Reduce, reuse, and recycle to prevent further damage to our environment</p>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg ">
                <div class="w-24 mx-auto flex justify-center">
                    <a href="/">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </a>
                </div>

                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>