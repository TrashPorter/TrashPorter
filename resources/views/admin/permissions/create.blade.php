@extends('admin.layouts.admin')

@section('content')
    @include('admin.layouts.partials.topnav', ['title' => 'Create Permissions'])
    <!-- cards -->
    <div class="flex justify-center w-full px-6 py-6 mx-auto">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3 w-1/4">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
                <table class="w-1/4 text-sm text-left text-gray-500 dark:text-gray-400 mx-4 my-2">
                    <div class="">
                        <form method="POST" action="{{ route('admin.permissions.store') }}">
                            @csrf
                            <div>
                                <div class="flex justify-center">
                                    <div class="relative z-0 w-full mx-6 my-6 group">
                                        <input type="text" name="name" id="name"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " required />
                                        <label for="name"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Permission
                                            Name</label>
                                    </div>
                                    @error('name')
                                        <div class="text-red-600" role="alert">
                                            <div>
                                                {{ $message }}
                                            </div>
                                        </div>
                                    @enderror
                                </div>

                                <div class="flex justify-center">
                                    <a href="{{ route('admin.permissions.index') }}"
                                        class="bg-gray-100 text-gray-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">Back
                                        to Permissions Page</a>
                                    <button type="submit"
                                        class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                                        Create
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
