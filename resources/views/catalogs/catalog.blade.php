@extends('layouts.main')

@section('container')
    @include('layouts.partials.header')
    
    <section class="p-10 px-80 bg-gray-100">
        <h1 class="pt-20 pb-16 text-center text-2xl font-bold uppercase">Price Catalog</h1>
        <div class="tab-pane fade show active" id="ex2-pills-2" role="tabpanel" aria-labelledby="ex2-tab-2">
            <div class="pb-8 grid md:grid-cols-3 gap-6 lg:gap-x-16 lg:gap-y-16">
                <div class="mb-6 lg:mb-0">
                    <div class="block rounded-lg shadow-lg bg-white h-full">
                        <div class=" p-6 text-center py-8">
                            <p class="uppercase mb-4 text-sm">
                                <strong>Kaleng</strong>
                            </p>
                            <div class="flex justify-center py-5">
                                <img class="w-20 justify-center" src="assets/img/catalog/kaleng.png" alt="">
                            </div>       
                            <h3 class="text-2xl mb-6">
                                <strong>Rp 500</strong>
                                <small class="text-gray-500 text-sm">/Kg</small>
                            </h3>

                            {{-- <button type="button"
                                class="inline-block px-6 py-2.5 bg-transparent text-sky-600 font-medium text-xs leading-tight uppercase rounded hover:text-sky-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out w-full"
                                style="background-color: hsl(0, 0%, 95%)" data-mdb-ripple="true"
                                data-ripple-color="primary">
                                Buy
                            </button> --}}
                        </div>
                    </div>
                </div>

                <div class="mb-6 lg:mb-0">
                    <div class="block rounded-lg shadow-lg bg-white h-full">
                        <div class="p-6 text-center py-4">
                            <p class="uppercase mb-4 text-sm">
                                <strong>Kresek</strong>
                            </p>
                            <div class="flex justify-center py-5">
                                <img class="w-28 justify-center" src="assets/img/catalog/kresek.png" alt="">
                            </div> 
                            <h3 class="text-2xl mb-6">
                                <strong>Rp 500</strong>
                                <small class="text-gray-500 text-sm">/Kg</small>
                            </h3>

                            {{-- <button type="button"
                                class="inline-block px-6 py-2.5 bg-transparent text-sky-600 font-medium text-xs leading-tight uppercase rounded hover:text-sky-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out w-full"
                                style="background-color: hsl(0, 0%, 95%)" data-mdb-ripple="true"
                                data-ripple-color="primary">
                                Buy
                            </button> --}}
                        </div>
                    </div>
                </div>

                <div class="mb-6 lg:mb-0">
                    <div class="block rounded-lg shadow-lg bg-white h-full">
                        <div class="p-6 text-center py-4">
                            <p class="uppercase mb-4 text-sm">
                                <strong>Buku Tulis</strong>
                            </p>
                            <div class="flex justify-center py-7">
                                <img class="w-32 justify-center" src="assets/img/catalog/buku2.jpg" alt="">
                            </div> 
                            <h3 class="text-2xl mb-6">
                                <strong>Rp 500</strong>
                                <small class="text-gray-500 text-sm">/Kg</small>
                            </h3>

                            {{-- <button type="button"
                                class="inline-block px-6 py-2.5 bg-transparent text-sky-600 font-medium text-xs leading-tight uppercase rounded hover:text-sky-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out w-full"
                                style="background-color: hsl(0, 0%, 95%)" data-mdb-ripple="true"
                                data-ripple-color="primary">
                                Buy
                            </button> --}}
                        </div>
                    </div>
                </div>

                <div class="mb-6 lg:mb-0">
                    <div class="block rounded-lg shadow-lg bg-white h-full">
                        <div class="p-6 text-center py-4">
                            <p class="uppercase mb-4 text-sm">
                                <strong>Kardus</strong>
                            </p>
                            <div class="flex justify-center py-5">
                                <img class="w-40 justify-center" src="assets/img/catalog/kardus.webp" alt="">
                            </div>  
                            <h3 class="text-2xl mb-6">
                                <strong>Rp 500</strong>
                                <small class="text-gray-500 text-sm">/Kg</small>
                            </h3>

                            {{-- <button type="button"
                                class="inline-block px-6 py-2.5 bg-transparent text-sky-600 font-medium text-xs leading-tight uppercase rounded hover:text-sky-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out w-full"
                                style="background-color: hsl(0, 0%, 95%)" data-mdb-ripple="true"
                                data-ripple-color="primary">
                                Buy
                            </button> --}}
                        </div>
                    </div>
                </div>

                <div class="mb-6 lg:mb-0">
                    <div class="block rounded-lg shadow-lg bg-white h-full">
                        <div class="p-6 text-center py-4">
                            <p class="uppercase mb-4 text-sm">
                                <strong>Minyak Jelantah</strong>
                            </p>
                            <div class="flex justify-center py-5">
                                <img class="w-24 justify-center" src="assets/img/catalog/minyak.jpeg" alt="">
                            </div> 
                            <h3 class="text-2xl mb-6">
                                <strong>Rp 1.500</strong>
                                <small class="text-gray-500 text-sm">/Kg</small>
                            </h3>

                            {{-- <button type="button"
                                class="inline-block px-6 py-2.5 bg-transparent text-sky-600 font-medium text-xs leading-tight uppercase rounded hover:text-sky-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out w-full"
                                style="background-color: hsl(0, 0%, 95%)" data-mdb-ripple="true"
                                data-ripple-color="primary">
                                Buy
                            </button> --}}
                        </div>
                    </div>
                </div>

                <div class="mb-6 lg:mb-0">
                    <div class="block rounded-lg shadow-lg bg-white h-full">
                        <div class="p-6 text-center py-4">
                            <p class="uppercase mb-4 text-sm">
                                <strong>Baja</strong>
                            </p>
                            <div class="flex justify-center pt-12 pb-6">
                                <img class="w-44 justify-center" src="assets/img/catalog/baja.png" alt="">
                            </div> 
                            <h3 class="text-2xl mb-6">
                                <strong>Rp 1.500</strong>
                                <small class="text-gray-500 text-sm">/Kg</small>
                            </h3>

                            {{-- <button type="button"
                                class="inline-block px-6 py-2.5 mb-4 bg-transparent text-sky-600 font-medium text-xs leading-tight uppercase rounded hover:text-sky-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out w-full"
                                style="background-color: hsl(0, 0%, 95%)" data-mdb-ripple="true"
                                data-ripple-color="primary">
                                Buy
                            </button> --}}
                        </div>
                    </div>
                </div>

                <div class="mb-6 lg:mb-0">
                    <div class="block rounded-lg shadow-lg bg-white h-full">
                        <div class="p-6 text-center py-4">
                            <p class="uppercase mb-4 text-sm">
                                <strong>Aqua Gelas</strong>
                            </p>
                            <div class="flex justify-center py-4">
                                <img class="w-40 justify-center" src="assets/img/catalog/aquagelas.jpg" alt="">
                            </div>
                            <h3 class="text-2xl mb-6">
                                <strong>Rp 2.000</strong>
                                <small class="text-gray-500 text-sm">/Kg</small>
                            </h3>

                            {{-- <button type="button"
                                class="mb-4 inline-block px-6 py-2.5 bg-transparent text-sky-600 font-medium text-xs leading-tight uppercase rounded hover:text-sky-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out w-full"
                                style="background-color: hsl(0, 0%, 95%)" data-mdb-ripple="true"
                                data-ripple-color="primary">
                                Buy
                            </button> --}}
                        </div>
                    </div>
                </div>

                <div class="mb-6 lg:mb-0">
                    <div class="block rounded-lg shadow-lg bg-white h-full">
                        <div class="p-6 text-center py-4">
                            <p class="uppercase mb-4 text-sm">
                                <strong>Ember Plastik</strong>
                            </p>
                            <div class="flex justify-center py-5">
                                <img class="w-36 justify-center" src="assets/img/catalog/ember.png" alt="">
                            </div>  
                            <h3 class="text-2xl mb-6">
                                <strong>Rp 2.500</strong>
                                <small class="text-gray-500 text-sm">/Kg</small>
                            </h3>

                            {{-- <button type="button"
                                class="inline-block px-6 py-2.5 bg-transparent text-sky-600 font-medium text-xs leading-tight uppercase rounded hover:text-sky-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out w-full"
                                style="background-color: hsl(0, 0%, 95%)" data-mdb-ripple="true"
                                data-ripple-color="primary">
                                Buy
                            </button> --}}
                        </div>
                    </div>
                </div>

                <div class="mb-6 lg:mb-0">
                    <div class="block rounded-lg shadow-lg bg-white h-full">
                        <div class="p-6 text-center py-4">
                            <p class="uppercase mb-4 text-sm">
                                <strong>Botol Plastik</strong>
                            </p>
                            <div class="flex justify-center py-5">
                                <img class="w-12 justify-center" src="assets/img/catalog/aquabtl.png" alt="">
                            </div>  
                            <h3 class="text-2xl mb-6">
                                <strong>Rp 3.000</strong>
                                <small class="text-gray-500 text-sm">/Kg</small>
                            </h3>

                            {{-- <button type="button"
                                class="inline-block px-6 py-2.5 bg-transparent text-sky-600 font-medium text-xs leading-tight uppercase rounded hover:text-sky-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out w-full"
                                style="background-color: hsl(0, 0%, 95%)" data-mdb-ripple="true"
                                data-ripple-color="primary">
                                Buy
                            </button> --}}
                        </div>
                    </div>
                </div>

                <div class="mb-6 lg:mb-0">
                    <div class="block rounded-lg shadow-lg bg-white h-full">
                        <div class="p-6 text-center py-4">
                            <p class="uppercase mb-4 text-sm">
                                <strong>Aki</strong>
                            </p>
                            <div class="flex justify-center py-6">
                                <img class="w-48 justify-center" src="assets/img/catalog/aki.png" alt="">
                            </div>
                            <h3 class="text-2xl mb-6">
                                <strong>Rp 5.000</strong>
                                <small class="text-gray-500 text-sm">/Kg</small>
                            </h3>

                            {{-- <button type="button"
                                class="mb-4 inline-block px-6 py-2.5 bg-transparent text-sky-600 font-medium text-xs leading-tight uppercase rounded hover:text-sky-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out w-full"
                                style="background-color: hsl(0, 0%, 95%)" data-mdb-ripple="true"
                                data-ripple-color="primary">
                                Buy
                            </button> --}}
                        </div>
                    </div>
                </div>

                <div class="mb-6 lg:mb-0">
                    <div class="block rounded-lg shadow-lg bg-white h-full">
                        <div class="p-6 text-center py-4">
                            <p class="uppercase mb-4 text-sm">
                                <strong>Aluminium</strong>
                            </p>
                            <div class="flex justify-center pt-4">
                                <img class="w-44 justify-center" src="assets/img/catalog/aluminium.png" alt="">
                            </div>  
                            <h3 class="text-2xl mb-6">
                                <strong>Rp 7.000</strong>
                                <small class="text-gray-500 text-sm">/Kg</small>
                            </h3>

                            {{-- <button type="button"
                                class="inline-block px-6 py-2.5 bg-transparent text-sky-600 font-medium text-xs leading-tight uppercase rounded hover:text-sky-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out w-full"
                                style="background-color: hsl(0, 0%, 95%)" data-mdb-ripple="true"
                                data-ripple-color="primary">
                                Buy
                            </button> --}}
                        </div>
                    </div>
                </div>

                <div class="mb-6 lg:mb-0">
                    <div class="block rounded-lg shadow-lg bg-white h-full">
                        <div class="p-6 text-center py-4">
                            <p class="uppercase mb-4 text-sm">
                                <strong>Tembaga</strong>
                            </p>
                            <div class="flex justify-center py-4">
                                <img class="w-40 justify-center" src="assets/img/catalog/tembaga.png" alt="">
                            </div> 
                            <h3 class="text-2xl mb-6">
                                <strong>Rp 45.000</strong>
                                <small class="text-gray-500 text-sm">/Kg</small>
                            </h3>

                            {{-- <button type="button"
                                class="inline-block px-6 py-2.5 bg-transparent text-sky-600 font-medium text-xs leading-tight uppercase rounded hover:text-sky-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out w-full"
                                style="background-color: hsl(0, 0%, 95%)" data-mdb-ripple="true"
                                data-ripple-color="primary">
                                Buy
                            </button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    @include('layouts.partials.footer')
@endsection
