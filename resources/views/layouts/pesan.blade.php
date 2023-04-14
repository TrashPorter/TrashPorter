<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Order</title>
    <script src="order.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/themes/airbnb.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
</head>

<body class="bg-blue-100">
    <nav class="h-18 w-full p-4 flex justify-between border-b shadow-sm ">
        <div class="flex px-5">
            <img src="assets/img/logo.PNG" class="h-auto w-36">
        </div>
        <div class="mr-8">
            <h2 class="font-semibold pt-4">Pesan Antar</h2>
        </div>
    </nav>

    <form action="" method="post" class="w-10/12 mx-auto bg-white drop-shadow-xl rounded-lg">
        <div class="h-screen mt-10 border-1 shadow-xl">
            <div class="border-b-1 shadow-md p-2 border-gray-300 leading-8 font-light">
                <h2 class="font-medium text-3xl text-center">Form Pemesanan
                </h2>
                {{-- <p>Isi form dibawah untuk melakukan pemesanan</p> --}}
            </div>

            <fieldset class="pb-8 border-b-2">
                <div class="mt-8 ml-12 ">
                    <label for="nama" class="font-medium text-sm">
                        Nama <input type="text" id="nama" name="nama" required
                            class="mr-2 w-9/12 block mt-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </label>
                </div>

                <div class="mt-10 ml-12 ">
                    <label for="nomor" class="font-medium text-sm">
                        Nomor HP <input type="tel" id="nomor" name="nomor" required
                            pattern="^(^\+62|62|^08)(\d{3,4}-?){2}\d{3,4}$"
                            class="mr-2 w-9/12  block mt-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </label>
                </div>

                <div x-data x-init="flatpickr($refs.datetimewidget, { wrap: true, enableTime: true, dateFormat: 'M j, Y h:i K' });" x-ref="datetimewidget" class="mt-10 ml-12 ">
                    <label for="datetime" class="flex-grow  block font-medium text-sm text-gray-700 mb-1">Date and Time
                        <input x-ref="datetime" type="text" id="datetime" data-input
                            class="mr-2 w-9/12 block mt-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </label>
                </div>

            </fieldset>

            <div>
                <fieldset class="mt-8 border-b-2 pb-8">

                    <div class="space-y-6 ml-12 ">
                        <h4 class="leading-6 text-gray-900 font-medium text-sm  ">Pilih Jenis Sampah
                        </h4>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="botol" name="botol" type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="botol" class="font-sm text-gray-900">Botol Plastik</label>
                                <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="kaleng" name="kaleng" type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="kaleng" class="font-sm text-gray-900">Kaleng</label>
                                <p class="text-gray-500">Get notified when a candidate applies for a job.</p>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="kardus" name="kardus" type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="kardus" class="font-sm text-gray-900">Kardus</label>
                                <p class="text-gray-500">Get notified when a candidate accepts or rejects an offer.</p>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="organik" name="organik" type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="organik" class="font-sm text-gray-900">Sampah Organik</label>
                                <p class="text-gray-500">Get notified when a candidate applies for a job.</p>
                            </div>
                        </div>
                    </div>


                </fieldset>
            </div>
        </div>
    </form>

</body>

</html>
