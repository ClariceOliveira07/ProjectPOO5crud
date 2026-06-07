@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-6">Cadastrar Novo Cliente</h1>

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="nome" class="block text-gray-700 font-semibold mb-2">Nome:</label>
            <input type="text" name="nome" id="nome" value="{{ old('nome') }}" 
                   class="w-full border p-2 rounded @error('nome') border-red-500 @enderror">
            @error('nome')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="telefone" class="block text-gray-700 font-semibold mb-2">Telefone:</label>
            <input type="text" name="telefone" id="telefone" value="{{ old('telefone') }}" 
                   class="w-full border p-2 rounded @error('telefone') border-red-500 @enderror">
            @error('telefone')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="block text-gray-700 font-semibold mb-2">E-mail:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" 
                   class="w-full border p-2 rounded @error('email') border-red-500 @enderror">
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-between items-center">
            <a href="{{ route('clients.index') }}" class="text-gray-600 hover:underline">Voltar</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Salvar Cliente
            </button>
        </div>
    </form>
</div>
@endsection