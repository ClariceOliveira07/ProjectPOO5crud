<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="space-y-6 p-6 max-w-7xl mx-auto">
    
    <div class="bg-white border border-gray-200 rounded-md p-6 shadow-sm">
        <h2 class="text-xl font-bold text-gray-800 tracking-tight flex items-center gap-2">
            Olá, {{ Auth::user()->name }}! Bem-vindo de volta.
        </h2>
        <p class="mt-2 text-sm text-gray-600 leading-relaxed max-w-3xl">
            Este é o painel de controle administrativo da <strong class="text-amber-600 font-semibold">Barbearia King</strong>. 
            Aqui você gerencia o fluxo de atendimentos da sua equipe, mantém o catálogo de serviços atualizado e acompanha o crescimento da sua base de clientes fiéis com máxima agilidade e eficiência.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <div class="bg-white border border-gray-200 rounded-md overflow-hidden shadow-sm flex flex-col">
            <div class="bg-[#fef08a] p-3 border-b border-gray-200 flex justify-between items-center">
                <span class="font-bold text-yellow-950 text-xs tracking-wider uppercase">Clientes Cadastrados</span>
                <svg class="w-4 h-4 text-yellow-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
            </div>
            <div class="p-5 flex items-baseline gap-2">
                <span class="text-3xl font-extrabold text-gray-800 tracking-tight">{{ $totalClientes }}</span>
                <span class="text-xs text-gray-400 font-medium">pessoas na base</span>
            </div>
        </div>

        <div class="bg-white border border-gray-200 rounded-md overflow-hidden shadow-sm flex flex-col">
            <div class="bg-[#fecaca] p-3 border-b border-gray-200 flex justify-between items-center">
                <span class="font-bold text-red-950 text-xs tracking-wider uppercase">Serviços no Catálogo</span>
                <svg class="w-4 h-4 text-red-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
            </div>
            <div class="p-5 flex items-baseline gap-2">
                <span class="text-3xl font-extrabold text-gray-800 tracking-tight">{{ $totalServicos }}</span>
                <span class="text-xs text-gray-400 font-medium">opções no total</span>
            </div>
        </div>

        <div class="bg-white border border-gray-200 rounded-md overflow-hidden shadow-sm flex flex-col">
            <div class="bg-[#e9d5ff] p-3 border-b border-gray-200 flex justify-between items-center">
                <span class="font-bold text-purple-950 text-xs tracking-wider uppercase">Total de Agendamentos</span>
                <svg class="w-4 h-4 text-purple-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 002-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
            </div>
            <div class="p-5 flex items-baseline gap-2">
                <span class="text-3xl font-extrabold text-gray-800 tracking-tight">{{ $totalAgendamentos }}</span>
                <span class="text-xs text-gray-400 font-medium">horários marcados</span>
            </div>
        </div>

    </div>
</div>
    </div>
</x-app-layout>
