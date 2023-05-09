@extends('admin.layouts.admin')

@section('content')
    @include('admin.layouts.partials.topnav', ['title' => 'Add Product'])
    <!-- cards -->
    <div class="flex justify-center w-full px-6 py-6 mx-auto">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3 w-2/3">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full bg-white">
                <table class="w-1/4 text-sm text-left text-gray-500 dark:text-gray-400 mx-4 my-2">
                    <div class="">
                        <form method="POST" action="{{ route('admin.permissions.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <div class="flex justify-center">
                                    <div class="relative z-0 w-full mx-6 my-6 group">
                                        <input type="text" name="nama" id="nama"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " required />
                                        <label for="nama"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Product
                                            Name
                                        </label>
                                    </div>
                                    @error('nama')
                                        <div class="text-red-600" role="alert">
                                            <div>
                                                {{ $message }}
                                            </div>
                                        </div>
                                    @enderror

                                </div>

                                <div class="flex justify-center">
                                    <div class="relative z-0 w-full mx-6 my-6 group">
                                        <label for="kategori" class="sr-only">Pilih Kategori</label>
                                        <select id="kategori" name="kategori"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                            <option selected>Select Category</option>
                                            <option value="US">United States</option>
                                            <option value="CA">Canada</option>
                                            <option value="FR">France</option>
                                            <option value="DE">Germany</option>
                                        </select>
                                    </div>
                                    @error('kategori')
                                        <div class="text-red-600" role="alert">
                                            <div>
                                                {{ $message }}
                                            </div>
                                        </div>
                                    @enderror

                                </div>
                                <div class="flex justify-center">
                                    <div class="relative z-0 w-full mx-6 my-6 group">
                                        <label
                                            class="text-medium text-gray-500 dark:text-gray-400 duration-300 transform scale-90  -z-10 origin-[0] mb-2"
                                            for="gambar">Picture</label>
                                        <input type="file" name="gambar" id="gambar"
                                            class="block w-full text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                            placeholder=" " required />

                                    </div>
                                    @error('gambar')
                                        <div class="text-red-600" role="alert">
                                            <div>
                                                {{ $message }}
                                            </div>
                                        </div>
                                    @enderror

                                </div>
                                <div class="flex justify-center">
                                    <div class="relative z-0 w-full mx-6 my-6 group">
                                        <input type="text" name="harga" id="harga"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " required />
                                        <label for="harga"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Price
                                        </label>
                                    </div>
                                    @error('harga')
                                        <div class="text-red-600" role="alert">
                                            <div>
                                                {{ $message }}
                                            </div>
                                        </div>
                                    @enderror

                                </div>
                                <div class="flex justify-center mb-4">
                                    <div class="relative z-0 w-full mx-6 my-6 group">
                                        <input type="text" name="stok" id="stok"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " required />
                                        <label for="stok"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Stock
                                        </label>
                                    </div>
                                    @error('stok')
                                        <div class="text-red-600" role="alert">
                                            <div>
                                                {{ $message }}
                                            </div>
                                        </div>
                                    @enderror

                                </div>

                                <div class="flex justify-center">
                                    <div class="relative z-0 w-full mx-6 my-6 group">
                                        <textarea name="deskripsi" id="deskripsi"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " required rows="4"> </textarea>
                                        <label for="deskripsi"
                                            class="peer-focus:font-medium absolute text-medium text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-90 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Product
                                            Description
                                        </label>

                                    </div>
                                    @error('deskripsi')
                                        <div class="text-red-600" role="alert">
                                            <div>
                                                {{ $message }}
                                            </div>
                                        </div>
                                    @enderror

                                </div>


                                <div class="flex justify-center mt-10">
                                    <a href="{{ route('admin.produks.index') }}"
                                        class="bg-gray-100 text-gray-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">Back
                                        to Product Page</a>
                                    <button type="submit"
                                        class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                                        Add Product
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </table>
            </div>
        </div>


        <footer class="fixed bottom-0 pt-4">
            <div class="w-full px-6 mx-auto">
                <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                    <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0   ">
                        <div class="leading-normal text-center text-sm text-slate-500 lg:text-left">
                            ©
                            <script>
                                document.write(new Date().getFullYear() + ",");
                            </script>
                            {{--  <i class="fa fa-heart"></i> by --}}made by
                            <a href="https://www.creative-tim.com" class="font-semibold text-slate-700"
                                target="_blank">TrashPorter Tim</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end cards -->
@endsection
