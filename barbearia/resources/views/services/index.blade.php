<script src="https://cdn.tailwindcss.com"></script>

<div class="flex min-h-screen bg-[#faf9f6]"> 
    <div class="w-60 bg-white border-r border-gray-200 flex flex-col justify-between">
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

            <div class="p-4 flex flex-col gap-2">
                <a href="{{ route('clients.index') }}" class="p-2 text-gray-600 hover:bg-gray-100 rounded-md">Clientes</a>
                <a href="{{ route('services.index') }}" class="p-2 font-semibold bg-gray-50 text-gray-900 rounded-md">Serviços</a>
                <a href="{{ route('appointments.index') }}" class="p-2 text-gray-600 hover:bg-gray-100 rounded-md">Agendamento</a>
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
        </div>
    </div>

    <div class="flex-1 p-6 flex flex-col justify-between">
        <div>
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h1 class="text-xl font-bold text-gray-800">Serviços</h1>
                    <p class="text-sm text-gray-500">Gerencie a lista de serviços oferecidos na barbearia.</p>
                </div>
                <a href="{{ route('services.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-md shadow-sm text-sm transition-colors">
                    + Novo Serviço
                </a>
            </div>

            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-3 mb-4 text-sm rounded-md">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white border border-gray-200 rounded-md overflow-hidden">
                <table class="w-full text-left text-sm text-gray-600">
                    <thead class="bg-[#fecaca] text-red-900 font-bold">
                        <tr>
                            <th class="p-3">Serviço</th>
                            <th class="p-3">Duração</th>
                            <th class="p-3">Preço</th>
                            <th class="p-3">Status</th>
                            <th class="p-3 text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($services as $service)
                            <tr class="border-b border-gray-200 hover:bg-gray-50/50">
                                <td class="p-3">
                                    <div class="text-gray-900 font-medium">{{ $service->nome }}</div>
                                </td>
                                <td class="p-3 text-gray-500">{{ $service->duracao_minutos }} min</td>
                                <td class="p-3 text-gray-900 font-medium">R$ {{ number_format($service->preco, 2, ',', '.') }}</td>
                                <td class="p-3">
                                    @if($service->ativo)
                                        <span class="text-xs bg-green-100 text-green-800 px-2 py-0.5 rounded">Ativo</span>
                                    @else
                                        <span class="text-xs bg-gray-100 text-gray-600 px-2 py-0.5 rounded">Inativo</span>
                                    @endif
                                </td>
                                <td class="p-3 text-center whitespace-nowrap">
                                    <a href="{{ route('services.edit', $service) }}" class="text-blue-600 hover:underline mr-2">Editar</a>
                                    <form action="{{ route('services.destroy', $service) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Excluir serviço?')" class="text-red-600 hover:underline">Remover</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center p-4 text-gray-400">Nenhum serviço cadastrado ainda.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $services->links() }}
            </div>
        </div>
    </div>
</div>
<div class="bg-white border-t border-gray-200 p-3 text-center text-xs text-gray-400">
    &copy; Clarice Oliveira - 2026 - Projeto CRUD Programação Orientada a Objetos
</div>