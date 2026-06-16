<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Name')" class="text-xs font-bold uppercase tracking-wider text-gray-600 mb-1" />
            <x-text-input id="name" class="block mt-1 w-full rounded-md bg-[#faf9f6] border-gray-200 text-gray-800 focus:border-red-300 focus:ring focus:ring-red-100 text-sm p-2.5 transition" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-xs text-red-600" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="text-xs font-bold uppercase tracking-wider text-gray-600 mb-1" />
            <x-text-input id="email" class="block mt-1 w-full rounded-md bg-[#faf9f6] border-gray-200 text-gray-800 focus:border-yellow-400 focus:ring focus:ring-yellow-100 text-sm p-2.5 transition" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-xs text-red-600" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-xs font-bold uppercase tracking-wider text-gray-600 mb-1" />

            <x-text-input id="password" class="block mt-1 w-full rounded-md bg-[#faf9f6] border-gray-200 text-gray-800 focus:border-red-300 focus:ring focus:ring-red-100 text-sm p-2.5 transition"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2 text-xs text-red-600" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-xs font-bold uppercase tracking-wider text-gray-600 mb-1" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full rounded-md bg-[#faf9f6] border-gray-200 text-gray-800 focus:border-red-300 focus:ring focus:ring-red-100 text-sm p-2.5 transition"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-xs text-red-600" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-xs text-gray-400 hover:text-purple-600 rounded-md focus:outline-none transition" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4 inline-flex items-center py-2.5 px-4 border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest bg-purple-600 hover:bg-purple-700 active:bg-purple-800 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow-sm">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>