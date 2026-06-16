<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased bg-[#faf9f6]">
        
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            
            <div class="mb-4">
                <a href="/">
                    <x-application-logo class="w-16 h-16 fill-current text-purple-950" />
                </a>
            </div>

            <div class="w-full sm:max-w-md bg-white border border-gray-200 rounded-md overflow-hidden shadow-sm">
                
                <div class="bg-[#e9d5ff] p-4 border-b border-gray-200 text-center">
                    <span class="font-bold text-purple-900 text-sm tracking-wider uppercase">Área de Acesso</span>
                </div>

                <div class="p-6">
                    {{ $slot }}
                </div>
                
            </div>
        </div>
    </body>
</html>