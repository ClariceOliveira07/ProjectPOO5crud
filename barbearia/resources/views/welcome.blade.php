<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Barbearia King') }}</title>

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

            <div class="p-10 flex flex-col items-center text-center">
                
                <div class="w-16 h-16 flex items-center justify-center mb-4 bg-amber-50 rounded-full border border-amber-100 mx-auto">
                    <svg class="w-10 h-10 text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M2 19h20v2H2v-2zm1-2h18L19 7l-4 4-3-6-3 6-4-4-3 10z"/>
                    </svg>
                </div>

                <h1 class="text-2xl font-black tracking-wider text-gray-800 uppercase">
                    Barbearia King
                </h1>
                <p class="text-xs text-gray-400 mt-1 uppercase font-bold tracking-widest">
                    Gestão & Agendamento Premium
                </p>

                <div class="w-full h-px bg-gray-100 my-8"></div>

                @if (Route::has('login'))
                    <div class="w-full flex flex-col gap-6">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="w-full block text-center py-4 px-6 rounded-xl font-bold text-xs text-purple-950 uppercase tracking-widest bg-[#e9d5ff] hover:bg-[#d8b4fe] transition duration-200 decoration-none">
                                Acessar o Painel
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="w-full block text-center py-4 px-6 rounded-xl font-bold text-xs text-red-950 uppercase tracking-widest bg-[#fecaca] hover:bg-[#fca5a5] transition duration-200 decoration-none">
                                Entrar no Sistema
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="w-full block text-center py-4 px-6 rounded-xl font-bold text-xs text-yellow-950 uppercase tracking-widest bg-[#fef08a] hover:bg-[#fde047] transition duration-200 decoration-none">
                                    Criar Nova Conta
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif

            </div>
        </div>

        <div class="text-center mt-8">
            <p class="text-[10px] font-bold tracking-widest text-gray-400 uppercase">
                &copy; {{ date('Y') }} - Clarice Oliveira - Projeto CRUD POO
            </p>
        </div>

    </body>
</html>