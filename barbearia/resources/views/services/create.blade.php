<script src="https://cdn.tailwindcss.com"></script>

<div class="flex min-h-screen bg-[#faf9f6]"> 
    <div class="w-60 bg-white border-r border-gray-200">
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
            <a href="{{ route('clients.index') }}" class="p-2 text-gray-600 hover:bg-gray-100">Clientes</a>
            <a href="{{ route('services.index') }}" class="p-2 text-gray-600 hover:bg-gray-100 font-semibold bg-gray-50 text-gray-900">Serviços</a>
            <a href="{{ route('appointments.index') }}" class="p-2 text-gray-600 hover:bg-gray-100">Agendamento</a>
        </div>
    </div>

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

<div class="bg-white border-t border-gray-200 p-3 text-center text-xs text-gray-400">
    &copy; Clarice Oliveira - 2026 - Projeto CRUD Programação Orientada a Objetos
</div>