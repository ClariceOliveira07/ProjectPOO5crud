<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Barbearia King') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-[#faf9f6] text-gray-800">
        <div class="min-h-screen flex bg-[#faf9f6]">
            
            <aside class="w-60 bg-white border-r border-gray-200 flex flex-col justify-between fixed h-screen z-20">
                <div>
                    <div class="p-4 border-b border-gray-100 flex flex-col items-center gap-2">
                        <div class="relative w-12 h-12 flex items-center justify-center">
                            <svg class="w-12 h-12 text-amber-500 drop-shadow-sm" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M2 19h20v2H2v-2zm1-2h18L19 7l-4 4-3-6-3 6-4-4-3 10z"/>
                            </svg>
                            <span class="absolute top-[18%] left-[47%] w-1.5 h-1.5 bg-red-600 rounded-full border border-amber-400 shadow-sm animate-pulse"></span>
                            <span class="absolute top-[32%] left-[17%] w-1 h-1 bg-red-600 rounded-full border border-amber-400 shadow-sm"></span>
                            <span class="absolute top-[32%] right-[17%] w-1 h-1 bg-red-600 rounded-full border border-amber-400 shadow-sm"></span>
                        </div>
                        <div class="font-bold text-gray-800 tracking-wide text-sm uppercase mt-1">
                            Barbearia King
                        </div>
                    </div>

                    <nav class="p-4 flex flex-col gap-2">
                        <a href="/clients" class="p-2 rounded-md text-sm transition-colors {{ request()->is('clients*') ? 'font-semibold bg-gray-50 text-gray-900' : 'text-gray-600 hover:bg-gray-100' }}">
                            Clientes
                        </a>
                        
                        <a href="/services" class="p-2 rounded-md text-sm transition-colors {{ request()->is('services*') ? 'font-semibold bg-gray-50 text-gray-900' : 'text-gray-600 hover:bg-gray-100' }}">
                            Serviços
                        </a>

                        <a href="/appointments" class="p-2 rounded-md text-sm transition-colors {{ request()->is('appointments*') ? 'font-semibold bg-gray-50 text-gray-900' : 'text-gray-600 hover:bg-gray-100' }}">
                            Agendamento
                        </a>
                    </nav>
                </div>

                <div class="p-4 border-t border-gray-100 bg-gray-50/50">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full flex items-center justify-center gap-2 px-3 py-2 text-xs font-semibold text-red-600 hover:bg-red-50 rounded-md transition-all border border-transparent hover:border-red-100">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            Sair do Sistema
                        </button>
                    </form>
                </div>
            </aside>

            <div class="flex-1 flex flex-col justify-between pl-60 min-h-screen">
                
                <div class="w-full">
                    @include('layouts.navigation')

                    @isset($header)
                        <header class="bg-white border-b border-gray-200 py-4 px-6">
                            <div class="max-w-7xl mx-auto">
                                {{ $header }}
                            </div>
                        </header>
                    @endisset
                </div>

                <main class="p-6 flex-1 bg-[#faf9f6]">
                    <div class="max-w-7xl mx-auto">
                        {{ $slot }}
                    </div>
                </main>
                
                <footer class="bg-white border-t border-gray-200 p-3 text-center text-xs text-gray-400 w-full col-span-2">
                    &copy; Clarice Oliveira - {{ date('Y') }} - Projeto CRUD Programação Orientada a Objetos
                </footer>
            </div>

        </div>
    </body>
</html>