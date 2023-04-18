@extends('layouts.main')

@section('container')
    <div class="fixed z-50 top-0">
        @include('layouts.partials.header')
    </div>

    <form action="" method="post"></form>
    <section class="xl:flex xl:justify-center xl:w-full md:grid-1">

        <div class="xl:w-3/6 mr-20 pt-20 flex flex-col">
            <div class="w-1/2 mt-10 ml-24 mb-8">
                <h1 class="font-semibold text-2xl ">
                    Form Pemesanan
                </h1>
                <p class="font-base text-sm text-neutral-400 mt-2">
                    Silahkan isi form dibawah ini untuk melakukan pemesanan
                </p>
            </div>
            {{-- <form action="" method="post" class="ml-4 max-sm:"> --}}
            <div class="mt-4 block ml-16 mb-20">

                {{-- <div class="border-b-1 border-gray-300 leading-8 font-light text-center">
                <h2 class="font-medium text-3xl pt-4">Form Pemesanan
                </h2>
                <p>Isi form dibawah untuk melakukan pemesanan</p>
            </div> --}}

                <fieldset class="pb-8 border-b-2 mx-8 border-2 rounded-lg">

                    <h4 class="ml-6 mt-6 leading-6 text-gray-900 font-medium text-lg mb-8 ">Keterangan
                    </h4>
                    <div class="relative z-0 w-full mb-6 group ml-6 mt-10">
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
                    <fieldset class="pt-8 border-b-2 pb-20 mx-8 border-2 rounded-lg mt-10">

                        <div class="space-y-6 ml-6 mr-12 ">
                            <h4 class="leading-6 text-gray-900 font-medium text-lg mb-8 ml-2">Pilih Jenis Sampah <span
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
                                            placeholder="Rp 8.000" value="Rp 8.000" readonly required>
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
                                            placeholder="Rp 6.000" value="Rp 6.000" readonly required>
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
                    <fieldset class="pb-8 border-b-2 mx-8 border-2 rounded-lg mt-10">

                        <h4 class="ml-12 mt-6 leading-6 text-gray-900 font-medium text-lg mb-8 ">Alamat
                        </h4>

                        <div class="space-y-6 ml-12 mt-10">
                            {{-- <h4 class="leading-6 text-gray-900 font-medium text-sm  ">Masukkan Alamat Penjemputan</h4> --}}
                            <label for="underline_select" class="sr-only"></label>
                            <select id="underline_select"
                                class="block py-2.5 px-0 w-9/12 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                <option selected>Pilih Kota</option>
                            </select>
                        </div>

                        <div class="space-y-14 ml-12 ">
                            {{-- <h4 class="leading-6 text-gray-900 font-medium text-sm  ">Masukkan Alamat Penjemputan</h4> --}}
                            <label for="underline_select" class="sr-only"></label>
                            <select id="underline_select"
                                class="block py-2.5 px-0 w-9/12 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                <option selected>Pilih Kecamatan</option>
                            </select>
                        </div>

                        <div class="space-y-14 ml-12 ">
                            {{-- <h4 class="leading-6 text-gray-900 font-medium text-sm  ">Masukkan Alamat Penjemputan</h4> --}}
                            <label for="underline_select" class="sr-only"></label>
                            <select id="underline_select"
                                class="block py-2.5 px-0 w-9/12 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                <option selected>Pilih No Pos</option>
                            </select>
                        </div>

                        <div class="mt-14 ml-10 ">
                            {{-- <h4 class="leading-6 text-gray-900 font-medium text-sm  ">Masukkan Alamat Penjemputan</h4> --}}

                            <label for="message"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
                            <textarea id="message" rows="5"
                                class="block p-2.5 w-9/12 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 bg"
                                placeholder="Detail Alamat..."></textarea>

                        </div>
                    </fieldset>
                </div>


            </div>
            {{-- </form> --}}
        </div>

        <div class="xl:w-3/12 md:full md:mt-[-240px] md:mb-32 xl:m-0  ">
            <div id="summary"
                class="md:w-7/12 md:mx-auto xl:w-full px-8 py-10 mt-60  mr-16 shadow-lg border-2 border-slate-100 bg-slate-100 rounded-lg">
                <h1 class="font-semibold text-2xl border-b pb-8">Rincian</h1>
                <div class="flex justify-between mt-10">
                    <span class="font-medium text-sm uppercase">Botol Plastik</span>
                    <span class="font-medium text-sm">Rp. 25.000</span>
                </div>
                <span class="font-light text-sm ">5 kg</span>

                <div class="flex justify-between mt-10">
                    <span class="font-medium text-sm uppercase">Kaleng</span>
                    <span class="font-medium text-sm">Rp. 48.000</span>
                </div>
                <span class="font-light text-sm ">5 kg</span>

                <div class="mt-8 border-t pt-6">
                    {{-- <label class="font-medium inline-block mb-3 text-sm uppercase">Ongkir</label>
                    <select class="block p-2 text-gray-600 w-full text-sm rounded-lg">
                        <option>Standard shipping - $10.00</option>
                    </select> --}}

                    <div>
                        <label for="ongkir"
                            class="block mb-2 text-sm font-semibold uppercase text-gray-900 dark:text-white">Ongkir</label>

                        <select type="text" id="ongkir"
                            class="bg-white border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 placeholder-gray-400"
                            required>
                            <option>Standard shipping - $10.00</option>
                        </select>
                    </div>
                </div>
                <div class="py-10">
                    <label for="promo" class="font-semibold inline-block mb-3 text-sm uppercase">Promo Code</label>
                    <input type="text" id="promo" placeholder="Enter your code"
                        class="bg-white border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 placeholder-gray-400">
                </div>

                <x-primary-button class="bg-sky-600 hover:bg-sky-200 hover:text-sky-600">
                    {{ __('Apply') }}
                </x-primary-button>

                <div class="border-t mt-8">
                    <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                        <span>Total cost</span>
                        <span>$600</span>
                    </div>
                    <x-primary-button class="flex justify-center w-full bg-sky-600 hover:bg-sky-200 hover:text-sky-600">
                        {{ __('Pesan') }}
                    </x-primary-button>
                </div>
            </div>
        </div>
    </section>
    </form>

    @include('layouts.partials.footer')
@endsection
