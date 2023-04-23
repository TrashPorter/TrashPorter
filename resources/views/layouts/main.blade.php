<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="canonical" href="https://https://demo.themesberg.com/landwind/" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrashPorter | {{ $title }}</title>
    @include('layouts.partials.metaSEO')
    @include('layouts.partials.metaSocial')
    @include('layouts.partials.favicon')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/flowbite.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/themes/airbnb.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>
    <script defer src="{{ asset('js/flowbite.js') }}"></script>
    <script src="{{ asset('backend/flowbite/dist/flowbite.js') }}"></script>
</head>

<body class="bg-gray-50">
    {{-- @include('layouts.partials.header') --}}
    <!-- Start block -->
    @yield('container')
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</body>

</html>
