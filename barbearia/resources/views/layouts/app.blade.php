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
    <body class="font-sans antialiased bg-gray-50 text-gray-800">
        <div class="min-h-screen flex">
            
            <aside class="w-64 bg-white border-r border-gray-100 flex flex-col fixed h-full z-10">
                <div class="p-6 flex flex-col items-center border-b border-gray-50">
                    <div class="flex flex-col items-center gap-2">
                        <svg class="w-12 h-12 text-amber-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M2 22h20v-2H2v2zm1-4h18v-3l-3.5 2.5L12 11l-5.5 6.5L3 15v3zM12 2l2.5 4.5L19 5l-2 5.5L21 14H3l4-3.5-2-5.5 4.5 1.5L12 2z"/>
                        </svg>
                        <span class="text-sm font-bold tracking-wider text-slate-800 uppercase mt-1">Barbearia King</span>
                    </div>
                </div>

                <nav class="flex-1 p-4 space-y-1 mt-4">
                    <a href="/clients" class="flex items-center px-4 py-3 rounded-lg font-medium text-sm transition-all {{ request()->is('clients*') ? 'bg-gray-100 text-gray-900 font-bold' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-900' }}">
                        Clientes
                    </a>
                    
                    <a href="/services" class="flex items-center px-4 py-3 rounded-lg font-medium text-sm transition-all {{ request()->is('services*') ? 'bg-gray-100 text-gray-900 font-bold' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-900' }}">
                        Serviços
                    </a>

                    <a href="/appointments" class="flex items-center px-4 py-3 rounded-lg font-medium text-sm transition-all {{ request()->is('appointments*') ? 'bg-gray-100 text-gray-900 font-bold' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-900' }}">
                        Agendamento
                    </a>
                </nav>

                <div class="p-4 border-t border-gray-50 text-xs text-gray-400 text-center">
                    &copy; {{ date('Y') }} Barbearia King
                </div>
            </aside>

            <div class="flex-1 flex flex-col pl-64">
                
                @include('layouts.navigation')

                @isset($header)
                    <header class="bg-white border-b border-gray-100 py-6 px-8">
                        <div class="max-w-7xl mx-auto">
                            {{ $header }}
                        </div>
                    </header>
                @endisset

                <main class="p-8 flex-1 bg-gray-50">
                    <div class="max-w-7xl mx-auto">
                        {{ $slot }}
                    </div>
                </main>
            </div>

        </div>
    </body>
</html>
