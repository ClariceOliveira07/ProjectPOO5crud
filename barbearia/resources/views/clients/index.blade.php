<script src="https://cdn.tailwindcss.com"></script>

<div class="container mx-auto p-6 max-w-7xl">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-800 tracking-tight">Clientes</h1>
            <p class="text-sm text-slate-500 mt-1">Gerencie a lista de clientes cadastrados no sistema.</p>
        </div>
        <a href="{{ route('clients.create') }}" 
           class="inline-flex items-center bg-slate-900 hover:bg-slate-800 text-white font-medium px-5 py-2.5 rounded-lg transition-colors duration-200 shadow-sm text-sm">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Novo Cliente
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
                        <th scope="col" class="px-6 py-4">Nome</th>
                        <th scope="col" class="px-6 py-4">Telefone</th>
                        <th scope="col" class="px-6 py-4">E-mail</th>
                        <th scope="col" class="px-6 py-4 text-center">Ações</th>
                    </tr>
                </thead>
                
                <tbody class="divide-y divide-slate-100">
                    @forelse($clients as $client)
                        <tr class="hover:bg-slate-50/70 transition-colors duration-150">
                            <td class="px-6 py-4 font-medium text-slate-900">{{ $client->nome }}</td>
                            <td class="px-6 py-4 text-slate-500">{{ $client->telefone ?? '-' }}</td>
                            <td class="px-6 py-4 text-slate-500">{{ $client->email ?? '-' }}</td>
                            <td class="px-6 py-4 text-center whitespace-nowrap text-sm font-medium">
                                <a href="{{ route('clients.edit', $client) }}" 
                                   class="text-indigo-600 hover:text-indigo-900 mr-4 transition-colors duration-150">
                                    Editar
                                </a>
                                
                                <form action="{{ route('clients.destroy', $client) }}" 
                                      method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Tem certeza que deseja remover este cliente?')" 
                                            class="text-rose-600 hover:text-rose-900 transition-colors duration-150">
                                        Remover
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center px-6 py-12 text-slate-400 bg-slate-50/30">
                                <svg class="w-12 h-12 mx-auto text-slate-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                                <span class="text-base font-medium">Nenhum cliente cadastrado ainda.</span>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-6 px-2">
        {{ $clients->links() }}
    </div>
</div>