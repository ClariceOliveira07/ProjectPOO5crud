<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Barbearia King') }}</title>

        @fonts

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="font-sans antialiased bg-gradient-to-tr from-[#fef08a]/20 via-[#fecaca]/20 to-[#e9d5ff]/30 min-h-screen text-gray-900 flex flex-col items-center justify-center p-6">
        
        <div class="w-full sm:max-w-md bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-lg relative transition-all duration-300">
            
            <div class="w-full h-2 flex">
                <div class="w-1/3 bg-[#fef08a]"></div> 
                <div class="w-1/3 bg-[#fecaca]"></div> 
                <div class="w-1/3 bg-[#e9d5ff]"></div> 
            </div>

            <div class="p-8 flex flex-col items-center text-center">
                
                <div class="w-20 h-20 flex items-center justify-center mb-4 bg-amber-50/60 rounded-full border border-amber-100 shadow-xs relative">
                    <svg class="w-12 h-12 text-amber-500 drop-shadow-sm" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M2 19h20v2H2v-2zm1-2h18L19 7l-4 4-3-6-3 6-4-4-3 10z"/>
                    </svg>
                    <span class="absolute top-[26%] left-[46%] w-1.5 h-1.5 bg-red-500 rounded-full border border-white animate-pulse"></span>
                </div>

                <h1 class="text-2xl font-black tracking-wider text-gray-800 uppercase">
                    Barbearia King
                </h1>
                <p class="text-xs text-gray-400 mt-1 uppercase font-bold tracking-widest">
                    Gestão & Agendamento Premium
                </p>

                <div class="w-full h-px bg-gray-100 my-6"></div>

                @if (Route::has('login'))
                    <div class="w-full flex flex-col gap-3">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="w-full flex justify-center items-center py-3 px-4 rounded-xl font-bold text-xs text-purple-950 uppercase tracking-widest bg-[#e9d5ff] hover:bg-[#d8b4fe] border border-purple-200 shadow-xs transition duration-200">
                                Acessar o Painel
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="w-full flex justify-center items-center py-3 px-4 rounded-xl font-bold text-xs text-red-950 uppercase tracking-widest bg-[#fecaca] hover:bg-[#fca5a5] border border-red-200 shadow-xs transition duration-200">
                                Entrar no Sistema
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="w-full flex justify-center items-center py-3 px-4 rounded-xl font-bold text-xs text-yellow-950 uppercase tracking-widest bg-[#fef08a] hover:bg-[#fde047] border border-yellow-200 shadow-xs transition duration-200">
                                    Criar Nova Conta
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif

            </div>
        </div>

        <div class="text-center mt-6">
            <p class="text-[10px] font-bold tracking-widest text-gray-400 uppercase">
                &copy; {{ date('Y') }} - Projeto CRUD Barbearia King
            </p>
        </div>

    </body>
</html>