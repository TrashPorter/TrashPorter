@extends('layouts.main')

@section('container')
    <div class="fixed z-50 top-0">
        @include('layouts.partials.header')
    </div>

    <form action="" method="post"></form>
        <section class="flex justify-center w-full">

            <div class="w-3/6 mr-20 ">
                <h1 class="w-1/2 mt-20 ml-20 font-semibold text-2xl mb-8">
                    New Order
                </h1>
                {{-- <form action="" method="post" class="ml-4 max-sm:"> --}}
                <div class="mt-4 border-2 shadow-md block  ml-16 mb-20">

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

                    <div>
                        <fieldset class="pt-8 border-b-2 pb-20 mx-8">

                            <div class="space-y-6 ml-6 mr-12 ">
                                <h4 class="leading-6 text-gray-900 font-medium text-medium mb-8 ">Pilih Jenis Sampah <span
                                        class="font-light block text-gray-500 text-sm">(minimal 5 kg)
                                    </span>
                                </h4>


                                <div class="grid gap-x-3 border-2 p-4  rounded-lg botol">
                                    <div class=" relative flex gap-x-3">
                                        <div class="flex h-6 items-center">
                                            <input id="botol" name="jenis_sampah" value="botol" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                                                onclick="toggle();">
                                        </div>
                                        <div class="text-sm leading-6">
                                            <label for="botol" class="font-medium text-black">Botol Plastik</label>
                                        </div>
                                    </div>
                                    <div class="grid gap-6 mb-6 mt-4 md:grid-cols-2 ml-7">
                                        <div>
                                            <label for="harga_botol"
                                                class="block mb-2 text-sm font-sm text-gray-900 dark:text-white">Harga /
                                                kg</label>

                                            <input type="text" id="harga_botol"
                                                class="bg-white border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 placeholder-gray-400"
                                                placeholder="Rp 5.000" value="Rp 5.000" readonly required>
                                        </div>
                                        <div>
                                            <label for="jumlah_botol"
                                                class="block mb-2 text-sm font-sm text-gray-900 dark:text-white">Jumlah</label>
                                            <input type="number" id="jumlah_botol"
                                                class="bg-white border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-gray-400"
                                                min="5" max="25" value="5" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid gap-x-3 border-2 p-4 border-gray-200 rounded-lg kaleng">
                                    <div class=" relative flex gap-x-3">
                                        <div class="flex h-6 items-center">
                                            <input id="kaleng" name="jenis_sampah" value="kaleng" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                                                onclick="toggle();">
                                        </div>
                                        <div class="text-sm leading-6">
                                            <label for="kaleng" class="font-medium">Kaleng</label>
                                        </div>
                                    </div>

                                    <div class="grid gap-6 mb-6 mt-4 md:grid-cols-2 ml-7">
                                        <div>
                                            <label for="harga_kaleng"
                                                class="block mb-2 text-sm font-sm text-gray-900 dark:text-white">Harga /
                                                kg</label>

                                            <input type="text" id="harga_kaleng"
                                                class="bg-white border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 placeholder-gray-400"
                                                placeholder="Rp 5.000" value="Rp 5.000" value="Rp 5.000" readonly required>
                                        </div>
                                        <div>
                                            <label for="jumlah_kaleng"
                                                class="block mb-2 text-sm font-sm text-gray-900 dark:text-white">Jumlah
                                                (kg)</label>
                                            <input type="number" id="jumlah_kaleng"
                                                class="bg-white border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                                min="5" max="25" value="5" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid gap-x-3 border-2 p-4 rounded-lg kardus">
                                    <div class=" relative flex gap-x-3">
                                        <div class="flex h-6 items-center">
                                            <input id="kardus" name="jenis_sampah" value="kardus" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                                                onclick="toggle();">
                                        </div>
                                        <div class="text-sm leading-6">
                                            <label for="kardus" class="font-medium">Kardus</label>
                                        </div>
                                    </div>

                                    <div class="grid gap-6 mb-6 mt-4 md:grid-cols-2 ml-7">
                                        <div>
                                            <label for="harga_kardus"
                                                class="block mb-2 text-sm font-sm text-gray-900 dark:text-white">Harga /
                                                kg</label>

                                            <input type="text" id="harga_kardus"
                                                class="bg-white border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 placeholder-gray-400"
                                                placeholder="Rp 5.000" value="Rp 5.000" readonly required>
                                        </div>
                                        <div>
                                            <label for="jumlah_kardus"
                                                class="block mb-2 text-sm font-sm text-gray-900 dark:text-white">Jumlah</label>
                                            <input type="number" id="jumlah_kardus"
                                                class="bg-white border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                min="5" max="25" value="5" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid gap-x-3 border-2 p-4  rounded-lg organik">
                                    <div class=" relative flex gap-x-3">
                                        <div class="flex h-6 items-center">
                                            <input id="organik" name="jenis_sampah" value="organik" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                                                onclick="toggle();">
                                        </div>
                                        <div class="text-sm leading-6">
                                            <label for="organik" class="font-medium">Sampah Organik</label>
                                        </div>
                                    </div>

                                    <div class="grid gap-6 mb-6 mt-4 md:grid-cols-2 ml-7">
                                        <div>
                                            <label for="harga_so"
                                                class="block mb-2 text-sm font-sm text-gray-900 dark:text-white">Harga /
                                                kg</label>

                                            <input type="text" id="harga_so"
                                                class="bg-white border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 placeholder-gray-400"
                                                placeholder="Rp 5.000" value="Rp 5.000" readonly required>
                                        </div>
                                        <div>
                                            <label for="jumlah_so"
                                                class="block mb-2 text-sm font-sm text-gray-900 dark:text-white">Jumlah</label>
                                            <input type="number" id="jumlah_so"
                                                class="bg-white border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
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

                            <script>
                                // const bt1 = document.getElementsByName("botol");
                                // for (const btn of bt1) {
                                //     btn.onclick = changeBg;
                                // }

                                // function changeBg() {
                                //     document.body.style.background = "blue";
                                // }

                                function toggle() {
                                    if (document.getElementById("botol").checked) {
                                        document.getElementsByClassName("botol")[0].style.backgroundColor = "#EEF7FF";
                                    } else {
                                        document.getElementsByClassName("botol")[0].style.backgroundColor = "white";
                                    }

                                    if (document.getElementById("kaleng").checked) {
                                        document.getElementsByClassName("kaleng")[0].style.backgroundColor = "#EEF7FF";
                                    } else {
                                        document.getElementsByClassName("kaleng")[0].style.backgroundColor = "white";
                                    }

                                    if (document.getElementById("kardus").checked) {
                                        document.getElementsByClassName("kardus")[0].style.backgroundColor = "#EEF7FF";
                                    } else {
                                        document.getElementsByClassName("kardus")[0].style.backgroundColor = "white";
                                    }

                                    if (document.getElementById("organik").checked) {
                                        document.getElementsByClassName("organik")[0].style.backgroundColor = "#EEF7FF";
                                    } else {
                                        document.getElementsByClassName("organik")[0].style.backgroundColor = "white";
                                    }
                                }


                                (function() {
                                    const form = document.querySelector('form');
                                    const checkboxes = form.querySelectorAll('input[type=checkbox]');
                                    const checkboxLength = checkboxes.length;
                                    const firstCheckbox = checkboxLength > 0 ? checkboxes[0] : null;

                                    function init() {
                                        if (firstCheckbox) {
                                            for (let i = 0; i < checkboxLength; i++) {
                                                checkboxes[i].addEventListener('change', checkValidity);
                                            }

                                            checkValidity();
                                        }
                                    }

                                    function isChecked() {
                                        for (let i = 0; i < checkboxLength; i++) {
                                            if (checkboxes[i].checked) return true;
                                        }

                                        return false;
                                    }

                                    function checkValidity() {
                                        const errorMessage = !isChecked() ? 'At least one checkbox must be selected.' : '';
                                        firstCheckbox.setCustomValidity(errorMessage);
                                    }

                                    init();
                                })();
                            </script>
                        </fieldset>
                    </div>

                    <div>
                        <fieldset class="pt-8 border-b-2 pb-8">

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
                {{-- </form> --}}
            </div>

            <div class="w-3/12">
                <div id="summary" class="px-8 py-10 mt-36  mr-16 shadow-lg border-2">
                    <h1 class="font-semibold text-2xl border-b pb-8">Order Summary</h1>
                    <div class="flex justify-between mt-10 mb-5">
                        <span class="font-semibold text-sm uppercase">Items 3</span>
                        <span class="font-semibold text-sm">590$</span>
                    </div>
                    <div>
                        <label class="font-medium inline-block mb-3 text-sm uppercase">Shipping</label>
                        <select class="block p-2 text-gray-600 w-full text-sm">
                            <option>Standard shipping - $10.00</option>
                        </select>
                    </div>
                    <div class="py-10">
                        <label for="promo" class="font-semibold inline-block mb-3 text-sm uppercase">Promo Code</label>
                        <input type="text" id="promo" placeholder="Enter your code" class="p-2 text-sm w-full">
                    </div>
                    <x-primary-button class="bg-green-400">
                        {{ __('Apply') }}
                    </x-primary-button>
                    <div class="border-t mt-8">
                        <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                            <span>Total cost</span>
                            <span>$600</span>
                        </div>
                        <x-primary-button class="flex justify-center w-full">
                            {{ __('Pesan') }}
                        </x-primary-button>
                    </div>
                </div>
            </div>
        </section>
    </form>

    @include('layouts.partials.footer')
@endsection
