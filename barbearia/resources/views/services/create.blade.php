<x-app-layout src="https://cdn.tailwindcss.com">

    <div class="flex-1 p-6">
        
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-xl font-bold text-gray-800">Serviços</h1>
                <p class="text-sm text-gray-500">Cadastrar um novo serviço no sistema.</p>
            </div>
            <a href="{{ route('services.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-semibold px-4 py-2 rounded-md shadow-sm text-sm transition-colors">
                Voltar
            </a>
        </div>

        <div class="flex justify-center mt-8">
            
            <div class="w-full max-w-xl bg-white border border-gray-200 rounded-md overflow-hidden shadow-sm">
                <div class="bg-[#fecaca] p-4 border-b border-gray-200">
                    <h2 class="font-bold text-red-900">Novo Serviço</h2>
                </div>

                <form action="{{ route('services.store') }}" method="POST" class="p-4 flex flex-col gap-4">
                    @csrf

                    <div>
                        <label for="nome" class="block text-sm font-medium text-gray-700 mb-1">Nome do Serviço:</label>
                        <input type="text" name="nome" id="nome" value="{{ old('nome') }}" 
                               class="w-full text-sm p-2 border rounded-md bg-gray-50 focus:bg-white focus:outline-none @error('nome') border-red-500 @else border-gray-300 @enderror">
                        @error('nome') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="preco" class="block text-sm font-medium text-gray-700 mb-1">Preço (R$):</label>
                            <input type="number" step="0.01" name="preco" id="preco" value="{{ old('preco') }}" 
                                   class="w-full text-sm p-2 border rounded-md bg-gray-50 focus:bg-white focus:outline-none @error('preco') border-red-500 @else border-gray-300 @enderror">
                            @error('preco') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="duracao_minutos" class="block text-sm font-medium text-gray-700 mb-1">Duração (minutos):</label>
                            <input type="number" name="duracao_minutos" id="duracao_minutos" value="{{ old('duracao_minutos', 30) }}" 
                                   class="w-full text-sm p-2 border rounded-md bg-gray-50 focus:bg-white focus:outline-none @error('duracao_minutos') border-red-500 @else border-gray-300 @enderror">
                            @error('duracao_minutos') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div>
                        <label for="ativo" class="block text-sm font-medium text-gray-700 mb-1">Status do Serviço:</label>
                        <select name="ativo" id="ativo" class="w-full text-sm p-2 border rounded-md bg-gray-50 focus:bg-white focus:outline-none border-gray-300">
                            <option value="1" {{ old('ativo', '1') == '1' ? 'selected' : '' }}>Ativo</option>
                            <option value="0" {{ old('ativo') == '0' ? 'selected' : '' }}>Inativo</option>
                        </select>
                    </div>

                    <div class="flex justify-end pt-2 border-t border-gray-100 mt-2">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-md text-sm transition-colors">
                            Salvar Serviço
                        </button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>

</x-app-layout>