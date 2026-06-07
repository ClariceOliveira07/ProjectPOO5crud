@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Clientes</h1>
        <a href="{{ route('clients.create') }}" 
           class="bg-green-600 text-white px-4 py-2 rounded">
           + Novo Cliente
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border-collapse border">
        <thead class="bg-gray-100">
            <tr>
                <th class="border p-3 text-left">Nome</th>
                <th class="border p-3 text-left">Telefone</th>
                <th class="border p-3 text-left">E-mail</th>
                <th class="border p-3 text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($clients as $client)
                <tr class="hover:bg-gray-50">
                    <td class="border p-3">{{ $client->nome }}</td>
                    <td class="border p-3">{{ $client->telefone ?? '-' }}</td>
                    <td class="border p-3">{{ $client->email ?? '-' }}</td>
                    <td class="border p-3 text-center">
                        <a href="{{ route('clients.edit', $client) }}" 
                           class="text-blue-600 mr-3">Editar</a>
                        
                        <form action="{{ route('clients.destroy', $client) }}" 
                              method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Remover cliente?')" 
                                    class="text-red-600">Remover</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center p-6 text-gray-500">
                        Nenhum cliente cadastrado ainda.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">
        {{ $clients->links() }}
    </div>
</div>
@endsection