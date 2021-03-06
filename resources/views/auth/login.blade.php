<head>
    <title>Oturum Aç</title>
    <link rel="icon" type="image/x-icon" href="https://seeklogo.com/images/K/karabuk-universitesi-logo-DD8F91ACB1-seeklogo.com.png">
</head>
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img style="weight:200px; height:200px;" src="https://www.karabuk.edu.tr/wp-content/uploads/2018/10/a.png" alt="">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('E-Posta') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Parola') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Beni hatırla') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Şifremi unuttum') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Giriş Yap') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
