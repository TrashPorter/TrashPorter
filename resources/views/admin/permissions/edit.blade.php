@extends('admin.layouts.admin')

@section('content')
    @include('admin.layouts.partials.topnav', ['title' => 'Edit Permissions'])
    <!-- cards -->
    <div class="flex justify-center w-full px-6 py-6 mx-auto">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3 w-1/4">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
                <table class="w-1/4 text-sm text-left text-gray-500 dark:text-gray-400 mx-4 my-2">
                    <div class="">
                        <form method="POST" action="{{ route('admin.permissions.update', $permission) }}">
                            @csrf
                            @method('PUT')
                            <div class="bg-slate-200 pb-2">
                                <div class="flex justify-center ">
                                    <div class="relative z-0 w-full mx-6 my-6 group">
                                        <input type="text" name="name" id="name"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " required value="{{ $permission->name }}" />
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
                                <div class="flex justify-center mb-3">
                                    <button type="submit"
                                        class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                                        Update
                                    </button>
                                </div>


                            </div>

                        </form>

                        <div class="mt-2 px-4 py-4">
                            <h2>Roles</h2>
                            <div class="mt-2">
                                @if ($permission->roles)
                                    @foreach ($permission->roles as $permission_role)
                                        <div>
                                            <span>{{ $permission_role->name }}</span>
                                            <form method="POST"
                                                action="{{ route('admin.permissions.roles.remove', [$permission->id, $permission_role->id]) }}"
                                                onsubmit="return confirm('Apakah Anda Yakin?')" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">-</button>
                                            </form>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <form method="POST" action="{{ route('admin.permissions.roles', $permission->id) }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="role"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role
                                        Name</label>
                                    <select name="role" id="role"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('role')
                                    <div class="text-red-600" role="alert">
                                        <div>
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                                <div class="flex justify-center">
                                    <a href="{{ route('admin.permissions.index') }}"
                                        class="bg-gray-100 text-gray-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">Back
                                        to Permissions Page</a>
                                    <button type="submit"
                                        class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                                        Assign
                                    </button>
                                </div>
                            </form>
                        </div>

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
