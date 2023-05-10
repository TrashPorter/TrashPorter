@extends('layouts.main')

@section('container')
    @include('layouts.partials.header')
    <main class="w-full">
        <div class="px-8 py-8 mx-auto">
            <div class="pt-8">
                <nav class="flex flex-wrap items-center justify-between px-6 py-8" aria-label="Breadcrumb">
                    <ol class="flex mr-12 sm:mr-16 breadcrumb">
                        <li class="breadcrumb-item leading-normal mr-2">
                            <a href="/" class="flex items-center">
                                <svg class="w-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                    </path>
                                </svg>
                                <span class="text-md font-light ml-3">Home</span>
                            </a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            <div class="flex items-center text-md">
                                <svg class="w-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-md ml-1" aria-current="page">User</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="my-4 mx-6 font-bold text-3xl capitalize">Pengaturan Akun</h1>
            </div>
            <div class="px-8 py-8 flex">
                <!-- Right Content -->
                <div class="flex flex-wrap w-1/3 ">
                    <div
                        class="flex w-full mb-4 bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        {{-- <form action="{{ route('bio.update', $bio->id) }}" method="post">
                            @csrf
                            @method('patch') --}}

                        <div class="flex-auto p-4">
                            <div class="flex -mx-3 pt-2">
                                <div class="max-w-full px-5">
                                    <img class="w-36 rounded-lg" src="{{ url('assets/img/profile.jpg') }}"
                                        alt="Profil Picture">
                                </div>
                                <div class="px-3 my-auto">
                                    <h5
                                        class=" mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                        {{ $user->name }}</h5>
                                    <p class="mb-6 font-bold dark:text-white capitalize">{{ $user->role }}</p>
                                    <x-primary-button
                                        class="flex justify-center w-full bg-sky-600 hover:bg-sky-200 hover:text-sky-600">
                                        {{ __('Change Picture') }}
                                    </x-primary-button>
                                </div>
                            </div>
                            <div class="mt-8 flex flex-col ml-4 xl:w-4/5 lg:w-1/2 md:w-1/2 w-full">
                                <label for="biodata"
                                    class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Bio</label>
                                <textarea id="biodata" name="biodata"
                                     class="{{--form-control @error('biodata') is-invalid @enderror --}} bg-transparent border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-indigo-700 resize-none placeholder-gray-500 text-gray-600 dark:text-gray-400" 
                                    placeholder="Let the world know who you are" rows="6" autocomplete="biodata">{{-- {{ $bio->biodata }} --}}</textarea>
                                <p class="w-full text-right text-xs pt-1 text-gray-600 dark:text-gray-400">Character Limit:
                                    200</p>

                                {{-- @error('biodata')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                            <div class="flex justify-end mr-12 mb-5">
                                <x-primary-button
                                    class="flex justify-end  bg-sky-600 hover:bg-sky-200 hover:text-sky-600 mt-12">
                                    {{ __('Save') }}
                                </x-primary-button>
                            </div>
                        {{-- </form> --}}
                        </div>

                    </div>
                    <div class="w-full mb-4">
                        <div
                            class="border-black/12.5 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                            <div class="p-4 pb-5 rounded-t-4">
                                <h3 class="mb-0 dark:text-white uppercase font-medium">Media Sosial</h3>
                            </div>
                            <div class="flex-auto p-4 pl-6">
                                <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                                    <li
                                        class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                                        <div class="flex items-center">
                                            <div class="inline-block w-8 h-8 mr-4 text-center text-black rounded-xl">
                                                <svg class="w-8 h-6" aria-hidden="true" focusable="false" data-prefix="fab"
                                                    data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 320 512">
                                                    <path fill="currentColor"
                                                        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="flex flex-col">
                                                <h6
                                                    class="mb-1 text-sm leading-normal text-slate-700 font-semibold dark:text-white">
                                                    Facebook</h6>
                                                <span class="text-xs leading-tight dark:text-white/80">Tidak
                                                    Terhubung</span>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            {{-- <button class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"><i class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200" aria-hidden="true"></i></button> --}}
                                            <button
                                                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                                Connect
                                            </button>
                                        </div>
                                    </li>
                                    <li
                                        class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-xl text-inherit">
                                        <div class="flex items-center">
                                            <div class="inline-block w-8 h-8 mr-4 text-center text-black rounded-xl">
                                                <svg class="w-8" aria-hidden="true" focusable="false" data-prefix="fab"
                                                    data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path fill="currentColor"
                                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="flex flex-col">
                                                <h6
                                                    class="mb-1 text-sm leading-normal text-slate-700 font-semibold dark:text-white">
                                                    Twitter</h6>
                                                <span class="text-xs leading-tight dark:text-white/80">Tidak
                                                    Terhubung</span>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            {{-- <button class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"><i class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200" aria-hidden="true"></i></button> --}}
                                            <button
                                                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                                Connect
                                            </button>
                                        </div>
                                    </li>
                                    <li
                                        class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-b-lg rounded-xl text-inherit">
                                        <div class="flex items-center">
                                            <div class="inline-block w-8 h-8 mr-4 text-center text-black rounded-xl">
                                                <svg class="w-8" aria-hidden="true" focusable="false" data-prefix="fab"
                                                    data-icon="github" role="img" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 496 512">
                                                    <path fill="currentColor"
                                                        d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="flex flex-col">
                                                <h6
                                                    class="mb-1 text-sm leading-normal text-slate-700 font-semibold dark:text-white">
                                                    GitHub</h6>
                                                <span class="text-xs leading-tight dark:text-white/80">Tidak
                                                    Terhubung</span>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            {{-- <button class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"><i class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200" aria-hidden="true"></i></button> --}}
                                            <button
                                                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                                Connect
                                            </button>
                                        </div>
                                    </li>
                                    <li
                                        class="relative flex justify-between py-2 pr-4 border-0 rounded-b-lg rounded-xl text-inherit">
                                        <div class="flex items-center">
                                            <div class="inline-block w-8 h-8 mr-4 text-center text-black rounded-xl">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                                    stroke-linejoin="round" stroke-miterlimit="2" clip-rule="evenodd"
                                                    viewBox="0 0 24 24" id="instagram">
                                                    <g transform="translate(-40 -40)">
                                                        <rect width="24" height="24" x="40"
                                                            y="40" fill="none"></rect>
                                                        <path fill="#2c2c2c"
                                                            d="M110.9,199C110.9,195.744 108.256,193.1 105,193.1C105,193.1 95,193.1 95,193.1C91.744,193.1 89.1,195.744 89.1,199C89.1,199 89.1,209 89.1,209C89.1,212.256 91.744,214.9 95,214.9C95,214.9 105,214.9 105,214.9C108.256,214.9 110.9,212.256 110.9,209L110.9,199ZM109.1,199L109.1,209C109.1,211.263 107.263,213.1 105,213.1L95,213.1C92.737,213.1 90.9,211.263 90.9,209L90.9,199C90.9,196.737 92.737,194.9 95,194.9L105,194.9C107.263,194.9 109.1,196.737 109.1,199ZM104.89,203.238C104.575,201.109 102.891,199.425 100.762,199.11C100.524,199.074 100.284,199.057 100.043,199.057C97.355,199.057 95.143,201.269 95.143,203.957C95.143,206.645 97.355,208.857 100.043,208.857C102.731,208.857 104.943,206.645 104.943,203.957C104.943,203.716 104.926,203.476 104.89,203.238ZM103.11,203.502C103.132,203.653 103.143,203.805 103.143,203.957C103.143,205.657 101.744,207.057 100.043,207.057C98.343,207.057 96.943,205.657 96.943,203.957C96.943,202.256 98.343,200.857 100.043,200.857C100.195,200.857 100.347,200.868 100.498,200.89C101.845,201.09 102.91,202.155 103.11,203.502ZM105.5,197.6C105.997,197.6 106.4,198.003 106.4,198.5C106.4,198.997 105.997,199.4 105.5,199.4C105.003,199.4 104.6,198.997 104.6,198.5C104.6,198.003 105.003,197.6 105.5,197.6Z"
                                                            transform="translate(-48 -152)"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="flex flex-col">
                                                <h6
                                                    class="mb-1 text-sm leading-normal text-slate-700 font-semibold dark:text-white">
                                                    Instagram</h6>
                                                <span class="text-xs leading-tight dark:text-white/80">Tidak
                                                    Terhubung</span>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            {{-- <button class="bg-sky-500 group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"><i class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200" aria-hidden="true"></i></button> --}}
                                            <button
                                                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                                Connect
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                                <div class="flex justify-center">
                                    <x-primary-button
                                        class="flex justify-center w-1/3  bg-sky-600 hover:bg-sky-200 hover:text-sky-600 mt-12 mb-5">
                                        {{ __('Save All') }}
                                    </x-primary-button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Left Content -->
                <div class="w-full">
                    <div class="px-4 mt-0 mb-4">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white border-1 border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl dark:bg-gray-950 border-black-125 rounded-2xl bg-clip-border pb-4">
                            <div class="p-4 pb-0 mb-0 rounded-t-4">
                                <div class="flex justify-between">
                                    <h6 class="mb-2 dark:text-white uppercase font-medium">Informasi Akun</h6>
                                </div>
                            </div>
                            <form class="pt-4 px-4" action="{{ route('profile.update', $alamat->id) }}" method="post">
                                @csrf
                                @method('patch')

                                <div class="bg-white grid grid-cols-2">
                                    <div class="mx-auto pt-4 ml-6 bg-white w-full">
                                        <div class="container mx-auto">
                                            <div class="xl:w-1/2 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                                <label for="name"
                                                    class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Nama
                                                    Lengkap</label>
                                                <input tabindex="0" type="text" id="name" name="name"
                                                    required
                                                    class="form-control @error('name') is-invalid @enderror border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                                    value="{{ $user->name }}" autocomplete="name" />

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="xl:w-1/2 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                                <label for="username"
                                                    class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Nama
                                                    Panggilan</label>
                                                <input tabindex="0" type="text" id="username" name="username"
                                                    required
                                                    class="form-control @error('username') is-invalid @enderror border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                                    value="{{ $user->username }}" autocomplete="username" />

                                                @error('username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="xl:w-1/2 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                                <label for="phone"
                                                    class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Nomor
                                                    HP</label>
                                                <input tabindex="0" type="text" id="phone" name="phone"
                                                    required
                                                    class="form-control @error('phone') is-invalid @enderror border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                                    value="{{ $user->phone }}" autocomplete="phone" />

                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="xl:w-1/2 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                                <label for="email"
                                                    class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Email</label>
                                                <div class="border shadow-sm rounded flex">
                                                    <div tabindex="0"
                                                        class="focus:outline-none px-4 py-3 dark:text-gray-100 flex items-center border-r ">
                                                        <img class="dark:hidden"
                                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg2.svg"
                                                            alt="mail">
                                                        <img class="dark:block hidden"
                                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg2dark.svg"
                                                            alt="mail">
                                                    </div>
                                                    <input tabindex="0" type="text" id="email" name="email"
                                                        required
                                                        class="form-control @error('email') is-invalid @enderror pl-3 py-3 w-full text-sm focus:outline-none placeholder-gray-500 border-gray-300 dark:border-gray-700 rounded bg-transparent text-gray-600 dark:text-gray-400 "
                                                        value="{{ $user->email }}" autocomplete="email" />

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="xl:w-1/2 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                                <label for="address"
                                                    class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Alamat</label>
                                                <textarea id="address" name="address" required {{-- class="form-control @error('address') is-invalid @enderror --}}
                                                    class="bg-transparent border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-indigo-700 resize-none placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                                    placeholder="Jl. Nasional No.5" rows="3" autofocus>
                                                    
                                                    @if (!empty($alamat->address))
                                                    {{ $alamat->address }}
                                                    @endif
                                                </textarea>

                                                {{-- @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mx-auto mt-[20px] pt-4 ml-6 bg-white w-full">

                                        {{-- <div class="xl:w-1/2 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                            <label for="City"
                                                class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">City</label>
                                            <div class="border border-gray-300 dark:border-gray-700 shadow-sm rounded flex">
                                                <input tabindex="0" type="text" id="City" name="city" required
                                                    class="pl-3 py-3 w-full text-sm focus:outline-none border border-transparent focus:border-indigo-700 bg-transparent rounded placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                                    placeholder="Los Angeles" />
                                                <div
                                                    class="px-4 flex items-center border-l border-gray-300 dark:border-gray-700 flex-col justify-center text-gray-600 dark:text-gray-400">
                                                    <img class="dark:hidden"
                                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg5.svg"
                                                        alt="up">
                                                    <img class="dark:hidden transform rotate-180"
                                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg5.svg"
                                                        alt="down">
                                                    <img class="dark:block hidden"
                                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg5dark.svg"
                                                        alt="up">
                                                    <img class="dark:block hidden transform rotate-180"
                                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg5dark.svg"
                                                        alt="down">
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="xl:w-1/2 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                            <label for="provinsi"
                                                class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Provinsi</label>
                                            <select id="provinsi" name="provinsi"
                                                class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400">
                                                @if ($alamat->province == null)
                                                    @foreach ($provinces as $provinsi)
                                                        <option value="{{ $provinsi->id }}">{{ $provinsi->name }}
                                                        </option>
                                                    @endforeach
                                                @else
                                                    <option value="{{ $alamat->province_id }}">{{ $alamat->province }}
                                                    </option>
                                                    @foreach ($provinces as $provinsi)
                                                        <option value="{{ $provinsi->id }}">{{ $provinsi->name }}
                                                        </option>
                                                    @endforeach
                                                @endif

                                            </select>
                                        </div>
                                        <div class="xl:w-1/2 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                            <label for="kota"
                                                class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Kabupaten/Kota</label>
                                            <select id="kota" name="kota"
                                                class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400">
                                                @if ($alamat->regency == null)
                                                    @foreach ($kotas as $kota)
                                                        <option value="{{ $kota->id }}">{{ $kota->name }}</option>
                                                    @endforeach
                                                @else
                                                    <option value="{{ $alamat->regency_id }}">{{ $alamat->regency }}
                                                    </option>
                                                    @foreach ($kotas as $kota)
                                                        <option value="{{ $kota->id }}">{{ $kota->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="xl:w-1/2 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                            <label for="kecamatan"
                                                class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Kecamatan</label>
                                            <select id="kecamatan" name="kecamatan"
                                                class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400">
                                                @if ($alamat->district == null)
                                                    @foreach ($kecamatans as $kecamatan)
                                                        <option value="{{ $kecamatan->id }}">{{ $kecamatan->name }}
                                                        </option>
                                                    @endforeach
                                                @else
                                                    <option value="{{ $alamat->district_id }}">{{ $alamat->district }}
                                                    </option>
                                                    @foreach ($kecamatans as $kecamatan)
                                                        <option value="{{ $kecamatan->id }}">{{ $kecamatan->name }}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="xl:w-1/2 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                            <label for="desa"
                                                class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Desa</label>
                                            <select id="desa" name="desa"
                                                class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400">
                                                @if ($alamat->village == null)
                                                    @foreach ($desas as $desa)
                                                        <option value="{{ $desa->id }}">{{ $desa->name }}</option>
                                                    @endforeach
                                                @else
                                                    <option value="{{ $alamat->district_id }}">{{ $alamat->district }}
                                                    </option>
                                                    @foreach ($desas as $desa)
                                                        <option value="{{ $desa->id }}">{{ $desa->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="xl:w-1/2 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                            <div class="flex items-center pb-2">
                                                <label for="postalcode"
                                                    class="text-sm font-bold text-gray-800 dark:text-gray-100">Kode
                                                    Pos</label>
                                                {{-- <div class="ml-2 cursor-pointer text-gray-600 dark:text-gray-400">
                                                    <img class="dark:hidden"
                                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4.svg"
                                                        alt="info">
                                                    <img class="dark:block hidden"
                                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4dark.svg"
                                                        alt="info">
                                                </div> --}}
                                            </div>
                                            <input tabindex="0" type="tel" name="postalcode" required
                                                id="postalcode" pattern="[0-9]{5}"
                                                class="bg-transparent border border-gray-300 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                                @if ($alamat->postalcode == null) placeholder="23127"
                                                @else
                                                    value="{{ $alamat->postalcode }}" @endif />
                                            {{-- class="border-red-400" 
                                                <div class="flex justify-between items-center pt-1 text-red-700">
                                                <p class="text-xs">Incorrect Zip Code</p>
                                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg6.svg"
                                                    alt="cancel">
                                            </div> --}}
                                            <div class="flex justify-end">
                                                <x-primary-button
                                                    class="bg-sky-600 mt-12 hover:bg-sky-200 hover:text-sky-600 mt-12">
                                                    {{ __('Save All') }}
                                                </x-primary-button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    </form>
                    <div class="px-4 mt-0 mb-6">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white border-1 border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl dark:bg-gray-950 border-black-125 rounded-2xl bg-clip-border pb-4 ">
                            <div class="p-4 pb-0 mb-0 rounded-t-4">
                                <div class="flex justify-between">
                                    <h6 class="mb-2 dark:text-white uppercase font-medium">Pengaturan Password</h6>
                                </div>
                            </div>
                            <div class="bg-white grid grid-cols-2">
                                <div class="mx-auto pt-4 px-4 ml-6 bg-white w-full">
                                    <div class="container mx-auto">
                                        <form method="post" action="{{ route('password.update') }}"
                                            class="my-6 w-11/12 mx-auto xl:w-full xl:mx-0">
                                            @csrf
                                            @method('put')
                                            <div class="xl:w-1/2 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                                <label for="current_password"
                                                    class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Password
                                                    Sekarang</label>
                                                <input tabindex="0" type="password" id="current_password"
                                                    name="current_password" required
                                                    class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                                    placeholder="••••••••" />
                                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                            </div>
                                            <div class="xl:w-1/2 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                                <label for="password"
                                                    class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">
                                                    Password Baru</label>
                                                <input tabindex="0" type="password" id="password" name="password"
                                                    required
                                                    class="border border-gray-300 dark:border-gray-700 pl-3 pt-3 shadow-sm bg-transparent rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                                    placeholder="••••••••" />
                                                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />

                                            </div>
                                    </div>
                                </div>
                                <div class="mx-auto mt-[20px] pt-4  ml-6 bg-white w-full">
                                    <div class="xl:w-1/2 lg:w-1/2 md:w-1/2 flex flex-col mb-3">
                                        <label for="password_confirmation"
                                            class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Konfirmasi
                                            Password</label>
                                        <input tabindex="0" type="password" id="password_confirmation"
                                            name="password_confirmation" required
                                            class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                            placeholder="••••••••" />
                                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                    </div>
                                    <div class="xl:w-1/2 lg:w-1/2 md:w-1/2 flex flex-col mb-4 ml-3">
                                    </div>
                                    <div class="flex justify-center">
                                        <x-primary-button
                                            class="flex justify-end mr-16 bg-sky-600 hover:bg-sky-200 hover:text-sky-600 mt-12 mb-5">
                                            {{ __('Save All') }}
                                        </x-primary-button>

                                        @if (session('status') === 'password-updated')
                                            <p x-data="{ show: true }" x-show="show" x-transition
                                                x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600 dark:text-gray-400">
                                                {{ __('Saved.') }}</p>
                                        @endif
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- <div class="">
                        <span class="">
                            Facebook account
                        </span>
                        <a href="#" class="">
                            www.facebook.com/themesberg
                        </a>
                    </div>
                    <div class="">
                        <a href="#" class="">Disconnect</a>
                    </div> --}}
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#provinsi").on('change', function() {
                let id_provinsi = $('#provinsi').val();

                $.ajax({
                    type: "POST",
                    url: "{{ route('kota') }}",
                    data: {
                        "id_prov": id_provinsi,
                        '_token': '{{ csrf_token() }}'
                    },
                    cache: false,

                    success: function(msg) {
                        $('#kota').html(msg);
                        $('#kecamatan').html(
                            '<option selected disabled>Pilih Kecamatan</option>');
                        $('#desa').html('<option selected disabled>Pilih Desa</option>');
                    },

                    error: function(data) {
                        console.log('error', data);
                    },
                })
            });

            $("#kota").on('change', function() {
                let id_kota = $('#kota').val();

                $.ajax({
                    type: "POST",
                    url: "{{ route('kecamatan') }}",
                    data: {
                        "id_kota": id_kota,
                        '_token': '{{ csrf_token() }}'
                    },
                    cache: false,

                    success: function(msg) {
                        $('#kecamatan').html(msg);
                        $('#desa').html('<option selected disabled>Pilih Desa</option>');
                    },

                    error: function(data) {
                        console.log('error', data);
                    },
                })
            });

            $("#kecamatan").on('change', function() {
                let id_kecamatan = $('#kecamatan').val();

                $.ajax({
                    type: "POST",
                    url: "{{ route('desa') }}",
                    data: {
                        "id_kecamatan": id_kecamatan,
                        '_token': '{{ csrf_token() }}'
                    },
                    cache: false,

                    success: function(msg) {
                        $('#desa').html(msg);
                    },

                    error: function(data) {
                        console.log('error', data);
                    },
                })
            });
        });
    </script>
    @include('layouts.partials.footer')
@endsection
