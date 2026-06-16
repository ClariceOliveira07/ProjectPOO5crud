<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" class="text-xs font-bold uppercase tracking-wider text-gray-600 mb-1" />
            <x-text-input id="email" class="block mt-1 w-full rounded-md bg-[#faf9f6] border-gray-200 text-gray-800 focus:border-yellow-400 focus:ring focus:ring-yellow-100 text-sm p-2.5 transition" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="seu@email.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs text-red-600" />
        </div>

        <div>
            <div class="flex justify-between items-center mb-1">
                <x-input-label for="password" :value="__('Password')" class="text-xs font-bold uppercase tracking-wider text-gray-600" />
                @if (Route::has('password.request'))
                    <a class="text-xs text-gray-400 hover:text-purple-600 transition" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <x-text-input id="password" class="block mt-1 w-full rounded-md bg-[#faf9f6] border-gray-200 text-gray-800 focus:border-red-300 focus:ring focus:ring-red-100 text-sm p-2.5 transition"
                            type="password"
                            name="password"
                            required autocomplete="current-password" placeholder="••••••••" />

            <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs text-red-600" />
        </div>

        <div class="block mt-2">
            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-gray-800 shadow-sm focus:ring-purple-400" name="remember">
                <span class="ms-2 text-xs text-gray-500 select-none">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex flex-col gap-3 pt-2">
            <x-primary-button class="w-full flex justify-center items-center py-2.5 px-4 border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest bg-purple-600 hover:bg-purple-700 active:bg-purple-800 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow-sm">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>