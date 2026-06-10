<script src="https://cdn.tailwindcss.com"></script>

<div class="max-w-2xl mx-auto p-6 my-8">
    <div class="mb-6">
        <a href="{{ route('services.index') }}" class="inline-flex items-center text-sm font-medium text-slate-500 hover:text-slate-800 transition-colors duration-150">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Voltar
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="bg-slate-900 px-6 py-5">
            <h1 class="text-xl font-bold text-slate-100 tracking-tight">Editar Serviço</h1>
        </div>

        <form action="{{ route('services.update', $service) }}" method="POST" class="p-6 space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label for="nome" class="block text-sm font-semibold text-slate-700 mb-2">Nome do Serviço:</label>
                <input type="text" name="nome" id="nome" value="{{ old('nome', $service->nome) }}" 
                       class="w-full text-sm px-4 py-2.5 rounded-lg border @error('nome') border-rose-500 ring-2 ring-rose-500/10 @else border-slate-200 @enderror text-slate-800 bg-slate-50/50 focus:bg-white focus:border-slate-900 focus:ring-4 focus:ring-slate-900/10 focus:outline-none transition-all duration-150">
                @error('nome')
                    <p class="text-rose-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="descrição" class="block text-sm font-semibold text-slate-700 mb-2">Descrição:</label>
                <textarea name="descrição" id="descrição" rows="3" 
                          class="w-full text-sm px-4 py-2.5 rounded-lg border @error('descrição') border-rose-500 ring-2 ring-rose-500/10 @else border-slate-200 @enderror text-slate-800 bg-slate-50/50 focus:bg-white focus:border-slate-900 focus:ring-4 focus:ring-slate-900/10 focus:outline-none transition-all duration-150">{{ old('descrição', $service->descrição) }}</textarea>
                @error('descrição')
                    <p class="text-rose-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="preco" class="block text-sm font-semibold text-slate-700 mb-2">Preço (R$):</label>
                    <input type="number" step="0.01" name="preco" id="preco" value="{{ old('preco', $service->preco) }}" 
                           class="w-full text-sm px-4 py-2.5 rounded-lg border @error('preco') border-rose-500 ring-2 ring-rose-500/10 @else border-slate-200 @enderror text-slate-800 bg-slate-50/50 focus:bg-white focus:border-slate-900 focus:ring-4 focus:ring-slate-900/10 focus:outline-none transition-all duration-150">
                    @error('preco')
                        <p class="text-rose-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="duracao_minutos" class="block text-sm font-semibold text-slate-700 mb-2">Duração (minutos):</label>
                    <input type="number" name="duracao_minutos" id="duracao_minutos" value="{{ old('duracao_minutos', $service->duracao_minutos) }}" 
                           class="w-full text-sm px-4 py-2.5 rounded-lg border @error('duracao_minutos') border-rose-500 ring-2 ring-rose-500/10 @else border-slate-200 @enderror text-slate-800 bg-slate-50/50 focus:bg-white focus:border-slate-900 focus:ring-4 focus:ring-slate-900/10 focus:outline-none transition-all duration-150">
                    @error('duracao_minutos')
                        <p class="text-rose-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="ativo" class="block text-sm font-semibold text-slate-700 mb-2">Status do Serviço:</label>
                <select name="ativo" id="ativo" 
                        class="w-full text-sm px-4 py-2.5 rounded-lg border @error('ativo') border-rose-500 ring-2 ring-rose-500/10 @else border-slate-200 @enderror text-slate-800 bg-slate-50/50 focus:bg-white focus:border-slate-900 focus:ring-4 focus:ring-slate-900/10 focus:outline-none transition-all duration-150">
                    <option value="1" {{ old('ativo', $service->ativo) == '1' ? 'selected' : '' }}>Ativo</option>
                    <option value="0" {{ old('ativo', $service->ativo) == '0' ? 'selected' : '' }}>Inativo</option>
                </select>
                @error('ativo')
                    <p class="text-rose-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-between items-center pt-4 border-t border-slate-100">
                <a href="{{ route('services.index') }}" class="text-slate-600 hover:underline">Voltar</a>
                <button type="submit" class="bg-slate-900 hover:bg-slate-800 text-white font-medium px-5 py-2.5 rounded-lg transition-colors duration-150 shadow-sm text-sm">
                    Atualizar Serviço
                </button>
            </div>
        </form>
    </div>
</div>