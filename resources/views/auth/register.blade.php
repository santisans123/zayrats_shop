<x-guest-layout>
    <img src="{{ url('images/bg_auth.png') }}" class="object-cover h-full" alt="Logo" />

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
            <form method="POST" action="{{ route('doRegister') }}">
                @csrf

                <div>
                    <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="dark:bg-gray-800 dark:text-gray-200 mt-1 p-2 border rounded-3xl w-full" placeholder="Nama Lengkap">
                </div>

                <div class="mt-4 m-">
                    <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" class="dark:bg-gray-800 dark:text-gray-200 mt-1 p-2 border rounded-3xl w-full" placeholder="Email">
                </div>

                <div class="mt-4 m-">
                    <input id="password" type="password" name="password" required autocomplete="new-password" class="dark:bg-gray-800 dark:text-gray-200 mt-1 p-2 border rounded-3xl w-full" placeholder="Password Baru">
                </div>

                <div class="mt-4 m-">
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="dark:bg-gray-800 dark:text-gray-200 mt-1 p-2 border rounded-3xl w-full" placeholder="Konfirmasi Password">
                </div>

                {{-- @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
                @endif --}}

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>
                <x-button class="mt-4 w-full">
                    {{ __('Register') }}
                </x-button>

            </form>
        </div>
    </div>
    </div>

</x-guest-layout>
