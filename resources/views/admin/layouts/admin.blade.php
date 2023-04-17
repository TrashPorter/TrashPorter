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
    <link rel="logo_aja" sizes="76x76" href="./assets/img/logo_aja.png" />
    <link rel="icon" type="image/png" href="./assets/img/white_logo.png" />
    <title>TrashPorter | Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @include('admin.layouts.partials.link')
</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    @include('admin.layouts.partials.header')
    @yield('content')
    @include('admin.layouts.partials.footer')
</body>
@include('admin.layouts.partials.script')

</html>
