<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Barbearia King') }} - Cadastro</title>

        <script src="https://cdn.tailwindcss.com"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-50 min-h-screen flex flex-col items-center justify-center p-6 antialiased text-gray-900">
        
        <div class="w-full max-w-md bg-white border border-gray-200 rounded-2xl shadow-xl overflow-hidden relative my-6">
            
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
                    Criar Nova Conta
                </p>

                <div class="w-full h-px bg-gray-100 my-8"></div>

                <div class="w-full">
                    <form method="POST" action="{{ route('register') }}" class="space-y-5">
                        @csrf

                        <div>
                            <x-input-label for="name" :value="__('Name')" class="text-xs font-bold uppercase tracking-wider text-gray-600 mb-1" />
                            <x-text-input id="name" class="block w-full rounded-xl bg-[#faf9f6] border border-gray-200 text-gray-800 focus:border-amber-400 focus:ring focus:ring-amber-100 text-sm p-3.5 transition" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Seu nome completo" />
                            <x-input-error :messages="$errors->get('name')" class="mt-1 text-xs text-red-600" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" class="text-xs font-bold uppercase tracking-wider text-gray-600 mb-1" />
                            <x-text-input id="email" class="block w-full rounded-xl bg-[#faf9f6] border border-gray-200 text-gray-800 focus:border-amber-400 focus:ring focus:ring-amber-100 text-sm p-3.5 transition" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="seu@email.com" />
                            <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs text-red-600" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" class="text-xs font-bold uppercase tracking-wider text-gray-600 mb-1" />
                            <x-text-input id="password" class="block w-full rounded-xl bg-[#faf9f6] border border-gray-200 text-gray-800 focus:border-amber-400 focus:ring focus:ring-amber-100 text-sm p-3.5 transition" type="password" name="password" required autocomplete="new-password" placeholder="••••••••" />
                            <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs text-red-600" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-xs font-bold uppercase tracking-wider text-gray-600 mb-1" />
                            <x-text-input id="password_confirmation" class="block w-full rounded-xl bg-[#faf9f6] border border-gray-200 text-gray-800 focus:border-amber-400 focus:ring focus:ring-amber-100 text-sm p-3.5 transition" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="••••••••" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-xs text-red-600" />
                        </div>

                        <div class="flex flex-col gap-4 pt-4">
                            <button type="submit" class="w-full block text-center py-4 px-6 rounded-xl font-bold text-xs text-yellow-950 uppercase tracking-widest bg-[#fef08a] hover:bg-[#fde047] transition duration-200 border border-yellow-200 shadow-xs cursor-pointer">
                                {{ __('Register') }}
                            </button>

                            <a class="text-xs text-gray-400 hover:text-purple-600 text-center transition block w-full" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="text-center mt-4">
            <p class="text-[10px] font-bold tracking-widest text-gray-400 uppercase">
                &copy; {{ date('Y') }} - Clarice Oliveira - Projeto CRUD POO
            </p>
        </div>

    </body>
</html>