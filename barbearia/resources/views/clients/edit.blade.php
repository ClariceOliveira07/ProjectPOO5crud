<script src="https://cdn.tailwindcss.com"></script>

<div class="max-w-2xl mx-auto p-6 my-8">
    <div class="mb-6">
        <a href="{{ route('clients.index') }}" class="inline-flex items-center text-sm font-medium text-slate-500 hover:text-slate-800 transition-colors duration-150">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Voltar
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="bg-slate-900 px-6 py-5">
            <h1 class="text-xl font-bold text-slate-100 tracking-tight">Editar Cliente</h1>
        </div>

        <form action="{{ route('clients.update', $client) }}" method="POST" class="p-6 space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label for="nome" class="block text-sm font-semibold text-slate-700 mb-2">Nome:</label>
                <input type="text" name="nome" id="nome" value="{{ old('nome', $client->nome) }}" 
                       class="w-full text-sm px-4 py-2.5 rounded-lg border @error('nome') border-rose-500 ring-2 ring-rose-500/10 @else border-slate-200 @enderror text-slate-800 bg-slate-50/50 focus:bg-white focus:border-slate-900 focus:ring-4 focus:ring-slate-900/10 focus:outline-none transition-all duration-150">
                @error('nome')
                    <p class="text-rose-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="telefone" class="block text-sm font-semibold text-slate-700 mb-2">Telefone:</label>
                <input type="text" name="telefone" id="telefone" value="{{ old('telefone', $client->telefone) }}" 
                       class="w-full text-sm px-4 py-2.5 rounded-lg border @error('telefone') border-rose-500 ring-2 ring-rose-500/10 @else border-slate-200 @enderror text-slate-800 bg-slate-50/50 focus:bg-white focus:border-slate-900 focus:ring-4 focus:ring-slate-900/10 focus:outline-none transition-all duration-150">
                @error('telefone')
                    <p class="text-rose-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">E-mail:</label>
                <input type="email" name="email" id="email" value="{{ old('email', $client->email) }}" 
                       class="w-full text-sm px-4 py-2.5 rounded-lg border @error('email') border-rose-500 ring-2 ring-rose-500/10 @else border-slate-200 @enderror text-slate-800 bg-slate-50/50 focus:bg-white focus:border-slate-900 focus:ring-4 focus:ring-slate-900/10 focus:outline-none transition-all duration-150">
                @error('email')
                    <p class="text-rose-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-between items-center pt-4 border-t border-slate-100">
                <a href="{{ route('clients.index') }}" class="text-slate-600 hover:underline">Voltar</a>
                <button type="submit" class="bg-slate-900 hover:bg-slate-800 text-white font-medium px-5 py-2.5 rounded-lg transition-colors duration-150 shadow-sm text-sm">
                    Atualizar Cliente
                </button>
            </div>
        </form>
    </div>
</div>