<x-app-layout src="https://cdn.tailwindcss.com">

    <div class="flex-1 p-6">
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

</x-app-layout>