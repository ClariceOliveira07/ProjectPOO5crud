<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Barbearia King') }} - Login</title>

        <script src="https://cdn.tailwindcss.com"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-50 min-h-screen flex flex-col items-center justify-center p-6 antialiased text-gray-900">
        
        <div class="w-full max-w-md bg-white border border-gray-200 rounded-2xl shadow-xl overflow-hidden relative">
            
            <div class="w-full h-2 flex">
                <div class="w-1/3 bg-[#fef08a]"></div> 
                <div class="w-1/3 bg-[#fecaca]"></div> 
                <div class="w-1/3 bg-[#e9d5ff]"></div> 
            </div>

            <div class="p-10 flex flex-col items-center">
                
                <div class="w-16 h-16 flex items-center justify-center mb-4 bg-amber-50 rounded-full border border-amber-100 mx-auto text-center">
                    <svg class="w-10 h-10 text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M2 19h20v2H2v-2zm1-2h18L19 7l-4 4-3-6-3 6-4-4-3 10z"/>
                    </svg>
                </div>

                <h1 class="text-2xl font-black tracking-wider text-gray-800 uppercase text-center w-full">
                    Barbearia King
                </h1>
                <p class="text-xs text-gray-400 mt-1 uppercase font-bold tracking-widest text-center w-full">
                    Área de Acesso
                </p>

                <div class="w-full h-px bg-gray-100 my-8"></div>

                <div class="w-full">
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}" class="space-y-5">
                        @csrf

                        <div>
                            <x-input-label for="email" :value="__('Email')" class="text-xs font-bold uppercase tracking-wider text-gray-600 mb-1" />
                            <x-text-input id="email" class="block w-full rounded-xl bg-[#faf9f6] border border-gray-200 text-gray-800 focus:border-amber-400 focus:ring focus:ring-amber-100 text-sm p-3.5 transition" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="seu@email.com" />
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

                            <x-text-input id="password" class="block w-full rounded-xl bg-[#faf9f6] border border-gray-200 text-gray-800 focus:border-amber-400 focus:ring focus:ring-amber-100 text-sm p-3.5 transition"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" placeholder="••••••••" />

                            <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs text-red-600" />
                        </div>

                        <div class="block mt-2">
                            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                                <input id="remember_me" type="checkbox" class="w-4 h-4 rounded border-gray-300 text-purple-600 focus:ring-purple-400" name="remember">
                                <span class="ms-2 text-xs text-gray-500 select-none">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="pt-2">
                            <button type="submit" class="w-full block text-center py-4 px-6 rounded-xl font-bold text-xs text-purple-950 uppercase tracking-widest bg-[#e9d5ff] hover:bg-[#d8b4fe] transition duration-200 border border-purple-200 shadow-xs cursor-pointer">
                                {{ __('Log in') }}
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="text-center mt-8">
            <p class="text-[10px] font-bold tracking-widest text-gray-400 uppercase">
                &copy; {{ date('Y') }} - Clarice Oliveira - Projeto CRUD POO
            </p>
        </div>

    </body>
</html>