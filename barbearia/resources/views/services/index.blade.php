<script src="https://cdn.tailwindcss.com"></script>

<div class="container mx-auto p-6 max-w-7xl">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-800 tracking-tight">Serviços</h1>
            <p class="text-sm text-slate-500 mt-1">Gerencie a lista de serviços oferecidos na barbearia.</p>
        </div>
        <a href="{{ route('services.create') }}" 
           class="inline-flex items-center bg-slate-900 hover:bg-slate-800 text-white font-medium px-5 py-2.5 rounded-lg transition-colors duration-200 shadow-sm text-sm">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Novo Serviço
        </a>
    </div>

    @if(session('success'))
        <div class="bg-emerald-50 border-l-4 border-emerald-500 text-emerald-800 p-4 rounded-r-lg mb-6 shadow-sm flex items-center text-sm">
            <svg class="w-5 h-5 text-emerald-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <div>{{ session('success') }}</div>
        </div>
    @endif

    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full border-collapse text-left text-sm text-slate-600">
                <thead class="bg-slate-900 text-slate-200 uppercase text-xs font-semibold tracking-wider">
                    <tr>
                        <th scope="col" class="px-6 py-4">Serviço</th>
                        <th scope="col" class="px-6 py-4">Duração</th>
                        <th scope="col" class="px-6 py-4">Preço</th>
                        <th scope="col" class="px-6 py-4">Status</th>
                        <th scope="col" class="px-6 py-4 text-center">Ações</th>
                    </tr>
                </thead>
                
                <tbody class="divide-y divide-slate-100">
                    @forelse($services as $service)
                        <tr class="hover:bg-slate-50/70 transition-colors duration-150">
                            <td class="px-6 py-4">
                                <div class="font-medium text-slate-900">{{ $service->nome }}</div>
                                @if($service->descrição)
                                    <div class="text-xs text-slate-400 mt-0.5 line-clamp-1">{{ $service->descrição }}</div>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-slate-500 whitespace-nowrap">
                                {{ $service->duracao_minutos }} min
                            </td>
                            <td class="px-6 py-4 text-slate-900 font-medium whitespace-nowrap">
                                R$ {{ number_format($service->preco, 2, ',', '.') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($service->ativo)
                                    <span class="inline-flex items-center bg-emerald-50 text-emerald-700 text-xs font-semibold px-2.5 py-1 rounded-full border border-emerald-200/60">
                                        Ativo
                                    </span>
                                @else
                                    <span class="inline-flex items-center bg-slate-100 text-slate-600 text-xs font-semibold px-2.5 py-1 rounded-full border border-slate-200">
                                        Inativo
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-center whitespace-nowrap text-sm font-medium">
                                <a href="{{ route('services.edit', $service) }}" 
                                   class="text-indigo-600 hover:text-indigo-900 mr-4 transition-colors duration-150">
                                    Editar
                                </a>
                                
                                <form action="{{ route('services.destroy', $service) }}" 
                                      method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Tem certeza que deseja remover este serviço?')" 
                                            class="text-rose-600 hover:text-rose-900 transition-colors duration-150">
                                        Remover
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center px-6 py-12 text-slate-400 bg-slate-50/30">
                                <svg class="w-12 h-12 mx-auto text-slate-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span class="text-base font-medium">Nenhum serviço cadastrado ainda.</span>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-6 px-2">
        {{ $services->links() }}
    </div>
</div>