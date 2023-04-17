<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h2 class="font-bold text-3xl w-full tracking-tight text-center px-5">
        Login
    </h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mt-4 pt-4">
            <x-input-label for="email" :value="__('')" />
            <x-text-input id="email" class="block mt-1 w-full" placeholder="Enter Email" type="email" name="email"
                :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-6">
            <x-input-label for="password" :value="__('')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" placeholder="Enter Password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex mt-2 mb-4 justify-between">
            <div>
                <label for="remember_me" class="">
                    <input id="remember_me" type="checkbox"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>


        </div>

        <div class="flex items-center justify-center mt-6">
            <x-primary-button class="flex justify-center w-full">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
        <div class="text-sm font-medium text-gray-300 dark:text-gray-100 text-center border-t-2 mt-3 pt-1">
            @if (Route::has('register'))
                Not registered? <a href="{{ route('register') }}"
                    class="text-blue-700 hover:underline dark:text-blue-500 ">Create
                    account</a>
            @endif
        </div>
    </form>
</x-guest-layout>
