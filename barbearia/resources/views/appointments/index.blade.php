<x-app-layout src="https://cdn.tailwindcss.com">

    <div class="flex-1 p-6">
        
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-xl font-bold text-gray-800">Agendamentos</h1>
                <p class="text-sm text-gray-500">Gerencie os horários marcados.</p>
            </div>
            <a href="{{ route('appointments.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-md shadow-sm text-sm transition-colors">
                + Novo Agendamento
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 mb-4 text-sm rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white border border-gray-200 rounded-md overflow-hidden shadow-sm">
            <table class="w-full text-left text-sm text-gray-600">
                
                <thead class="bg-[#e9d5ff] text-purple-900 font-bold">
                    <tr>
                        <th class="p-3">Horário</th>
                        <th class="p-3">Data</th>
                        <th class="p-3">Cliente</th>
                        <th class="p-3">Serviço</th>
                        <th class="p-3">Status</th>
                        <th class="p-3 text-center">Ações</th>
                    </tr>
                </thead>
                
                <tbody>
                    @forelse($appointments as $ap)
                        <tr class="border-b border-gray-200 hover:bg-gray-50/50">
                            <td class="p-3 font-mono text-gray-900 font-medium">
                                {{ $ap->hora_agenda }}
                            </td>
                            <td class="p-3 font-mono text-gray-900 font-medium">
                                {{ $ap->data_agenda->format('d/m/Y') }}
                            </td>
                            <td class="p-3 text-gray-800">
                                {{ $ap->client->nome ?? 'Cliente não encontrado' }}
                            </td>
                            <td class="p-3 text-gray-800">
                                {{ $ap->service->nome ?? 'Serviço não encontrado' }}
                            </td>
                            <td class="p-3">
                                @if($ap->status === 'Pendente')
                                    <span class="text-xs bg-yellow-100 text-yellow-800 px-2 py-0.5 rounded font-medium">
                                        Pendente
                                    </span>
                                @elseif($ap->status === 'Concluído')
                                    <span class="text-xs bg-green-100 text-green-800 px-2 py-0.5 rounded font-medium">
                                        Concluído
                                    </span>
                                @else
                                    <span class="text-xs bg-red-100 text-red-800 px-2 py-0.5 rounded font-medium">
                                        Cancelado
                                    </span>
                                @endif
                            </td>
                            
                            <td class="p-3 text-center">
                                <a href="{{ route('appointments.edit', $ap) }}" class="text-blue-600 hover:underline mr-3">
                                    Editar
                                </a>
                                <form action="{{ route('appointments.destroy', $ap) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Cancelar agendamento?')" class="text-red-600 hover:underline">
                                        Cancelar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center p-6 text-gray-400">
                                Nenhum agendamento.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

</x-app-layout>