<x-guest-layout>
    <img src="{{ url('images/bg_auth.png') }}" class="object-cover max-h-full" alt="Logo" />

    <div class="absolute top-0 left-0 h-full w-4/5 bg-gradient-to-r from-gray-900 via-gray-800 to-transparent"></div>
        <div class="absolute top-52 left-56">
            <x-slot name="logo">
                <x-authentication-card-logo />
            </x-slot>

            <x-validation-errors class="mb-4" />

            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
            @endif

            <div class="w-80">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <input type="email" id="email" name="email" class="dark:bg-gray-800 dark:text-gray-200 mt-1 p-2 border rounded-3xl w-full" placeholder="Emai">
                    </div>

                    <div class="mt-4 m-">
                        <input type="password" id="password" name="password" class="dark:bg-gray-800 dark:text-gray-200 mt-1 p-2 border rounded-3xl w-full" placeholder="Password">
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <x-button class="w-full mt-4">
                        {{ __('Log in') }}
                    </x-button>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
