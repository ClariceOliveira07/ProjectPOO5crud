<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Barbearia King') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased bg-[#faf9f6]">
        
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#faf9f6]">
            
            <div class="mb-4 flex flex-col items-center gap-1">
                <a href="/" class="relative w-14 h-14 flex items-center justify-center">
                    <svg class="w-14 h-14 text-black drop-shadow-sm" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M2 19h20v2H2v-2zm1-2h18L19 7l-4 4-3-6-3 6-4-4-3 10z"/>
                    </svg>
                </a>
                <div class="font-bold text-gray-800 tracking-wide text-xs uppercase mt-1">
                    Barbearia King
                </div>
            </div>

            <div class="w-full sm:max-w-md bg-white border border-gray-200 rounded-md overflow-hidden shadow-sm">
                
                <div class="bg-[#e9d5ff] p-4 border-b border-gray-200 text-center">
                     <span class="font-bold text-purple-950 text-sm tracking-wider uppercase">Área de Acesso</span>
                </div>

                <div class="p-6 bg-white">
                    {{ $slot }}
                </div>
                
            </div>
        </div>
    </body>
</html>