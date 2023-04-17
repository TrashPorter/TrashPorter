<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Order</title>
    <script src="order.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/themes/airbnb.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
</head>

<body class="bg-gray-100">
    <nav class="h-18 w-full p-4 flex justify-between border-b shadow-sm ">
        <div class="flex px-5">
            <img src="assets/img/logo.PNG" class="h-auto w-36">
        </div>
        <div class="mr-8">
            <h2 class="font-semibold pt-4">Pesan Antar</h2>
        </div>
    </nav>

    <h1 class="w-1/2 mt-6 ml-20 font-semibold text-2xl mb-8">
        New Order
    </h1>
    <form action="" method="post" class=" ml-4 drop-shadow-xl rounded-lg max-sm:">
        <div class="mt-4 border-1 shadow-xl block bg-white w-3/6 ml-16">

            {{-- <div class="border-b-1 border-gray-300 leading-8 font-light text-center">
                <h2 class="font-medium text-3xl pt-4">Form Pemesanan
                </h2>
                <p>Isi form dibawah untuk melakukan pemesanan</p>
            </div> --}}

            <fieldset class="pb-8 border-b-2 mx-8">

                <div class="relative z-0 w-full mb-6 group ml-6 mt-12">
                    <input type="text" name="nama" id="nama"
                        class="block py-2.5 px-0 w-9/12 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="nama"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                </div>

                <div class="relative z-0 w-full mb-6 group ml-6 mt-12">
                    <input type="tel" name="nomor" id="nomor"
                        class="block py-2.5 px-0 w-9/12 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        required placeholder=" " pattern="^(^\+62|62|^08)(\d{3,4}-?){2}\d{3,4}$" />
                    <label for="nomor"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor
                        HP</label>
                </div>

                <div x-data x-init="flatpickr($refs.datetimewidget, { wrap: true, enableTime: true, dateFormat: 'M j, Y h:i K' });" x-ref="datetimewidget"
                    class="relative z-0 w-full mb-6 group ml-6 mt-12">
                    <input x-ref="datetime" type="text" id="datetime" data-input
                        class="block py-2.5 px-0 w-9/12 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" ">
                    <label for="datetime"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Date
                        and Time
                    </label>
                </div>
                {{-- <div x-data x-init="flatpickr($refs.datetimewidget, { wrap: true, enableTime: true, dateFormat: 'M j, Y h:i K' });" x-ref="datetimewidget" class="mt-10 ml-12 ">
                    <label for="datetime" class="flex-grow  block font-medium text-sm text-gray-700 mb-1">Date and Time
                        <input x-ref="datetime" type="text" id="datetime" data-input
                            class="mr-2 w-9/12 block mt-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </label>
                </div> --}}

            </fieldset>

            <div class="">
                <fieldset class="pt-8 border-b-2 pb-20 mx-8">

                    <div class="space-y-6 ml-6 mr-12 ">
                        <h4 class="leading-6 text-gray-900 font-medium text-medium mb-8 ">Pilih Jenis Sampah <span
                                class="font-light block text-gray-500 text-sm">(minimal 5 kg)
                            </span>
                        </h4>


                        <div class="grid gap-x-3 border-2 p-4  rounded-lg">
                            <div class=" relative flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input id="botol" name="botol" type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="botol" class="font-medium text-black">Botol Plastik</label>
                                </div>
                            </div>
                            <div class="grid gap-6 mb-6 mt-4 md:grid-cols-2 ml-7">
                                <div>
                                    <label for="harga"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga /
                                        kg</label>

                                    <input type="text" id="harga"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Rp 5.000" readonly required>
                                </div>
                                <div>
                                    <label for="jumlah_botol"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
                                    <input type="number" id="jumlah_botol"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        min="5" max="25" value="5" required>
                                </div>
                            </div>
                        </div>

                        <div class="grid gap-x-3 border-2 p-4 border-gray-200 rounded-lg">
                            <div class=" relative flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input id="kaleng" name="kaleng" type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="kaleng" class="font-medium ">Kaleng</label>
                                </div>
                            </div>

                            <div class="grid gap-6 mb-6 mt-4 md:grid-cols-2 ml-7">
                                <div>
                                    <label for="harga"
                                        class="block mb-2 text-sm font-sm text-gray-900 dark:text-white">Harga /
                                        kg</label>

                                    <input type="text" id="harga"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 placeholder-gray-400"
                                        placeholder="Rp 5.000" readonly required>
                                </div>
                                <div>
                                    <label for="jumlah_botol"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah
                                        (kg)</label>
                                    <input type="number" id="jumlah_botol"
                                        class="bg-white border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                        min="5" max="25" value="5" required>
                                </div>
                            </div>
                        </div>

                        <div class="grid gap-x-3 border-2 p-4  rounded-lg">
                            <div class=" relative flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input id="kardus" name="kardus" type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="kardus" class="font-sm text-gray-900">Kardus</label>
                                </div>
                            </div>

                            <div class="grid gap-6 mb-6 mt-4 md:grid-cols-2 ml-7">
                                <div>
                                    <label for="harga"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga /
                                        kg</label>

                                    <input type="text" id="harga"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Rp 5.000" readonly required>
                                </div>
                                <div>
                                    <label for="jumlah_botol"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
                                    <input type="number" id="jumlah_botol"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        min="5" max="25" value="5" required>
                                </div>
                            </div>
                        </div>

                        <div class="grid gap-x-3 border-2 p-4  rounded-lg">
                            <div class=" relative flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input id="organik" name="organik" type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="organik" class="font-sm text-gray-900">Sampah Organik</label>
                                </div>
                            </div>

                            <div class="grid gap-6 mb-6 mt-4 md:grid-cols-2 ml-7">
                                <div>
                                    <label for="harga"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga /
                                        kg</label>

                                    <input type="text" id="harga"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Rp 5.000" readonly required>
                                </div>
                                <div>
                                    <label for="jumlah_botol"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
                                    <input type="number" id="jumlah_botol"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        min="5" max="25" value="5" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 
                    <div class="relative z-0 w-full mb-6 group ml-12 mt-12">
                        <input type="number" name="berat" id="berat"
                            class="block py-2.5 px-0 w-9/12 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="berat"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Total Berat Sampah</label>
                    </div> --}}

                </fieldset>

                <fieldset class="mt-8 border-b-2 pb-8">

                    <div class="space-y-6 ml-12 ">
                        <h4 class="leading-6 text-gray-900 font-medium text-sm  ">Masukkan Alamat Penjemputan</h4>
                        <label for="underline_select" class="sr-only">Underline select</label>
                        <select id="underline_select"
                            class="block py-2.5 px-0 w-9/12 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                            <option selected>Choose a country</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>

                    </div>
                </fieldset>
            </div>
        </div>
    </form>

</body>

</html>
