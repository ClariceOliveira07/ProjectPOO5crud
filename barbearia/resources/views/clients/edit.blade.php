<script src="https://cdn.tailwindcss.com"></script>

<div class="flex min-h-screen bg-[#faf9f6]"> 
    <div class="w-60 bg-white border-r border-gray-200">
        <div class="p-4 border-b border-gray-100 font-bold text-gray-800">
            👑 Barbearia King
        </div>
        <div class="p-4 flex flex-col gap-2">
            <a href="{{ route('clients.index') }}" class="p-2 text-gray-600 hover:bg-gray-100">Clientes</a>
            <a href="{{ route('services.index') }}" class="p-2 text-gray-600 hover:bg-gray-100">Serviços</a>
            <a href="#" class="p-2 text-gray-600 hover:bg-gray-100">Agenda</a>
        </div>
    </div>
    <div class="flex-1 p-6">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-xl font-bold text-gray-800">Clientes</h1>
                <p class="text-sm text-gray-500">Cadastrar um novo cliente no sistema.</p>
            </div>
            <a href="{{ route('clients.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-semibold px-4 py-2 rounded-md shadow-sm text-sm transition-colors">
                Voltar
            </a>
        </div>
        <div class="flex justify-center mt-8">
            <div class="w-full max-w-xl bg-white border border-gray-200 rounded-md overflow-hidden shadow-sm">
                <div class="bg-[#fef08a] p-4 border-b border-gray-200">
                    <h2 class="font-bold text-yellow-900">Novo Cliente</h2>
                </div>
                <form action="{{ route('clients.store') }}" method="POST" class="p-4 flex flex-col gap-4">
                    @csrf
                    <div>
                        <label for="nome" class="block text-sm font-medium text-gray-700 mb-1">Nome:</label>
                        <input type="text" name="nome" id="nome" value="{{ old('nome') }}" 
                               class="w-full text-sm p-2 border rounded-md bg-gray-50 focus:bg-white focus:outline-none @error('nome') border-red-500 @else border-gray-300 @enderror">
                        @error('nome')
                            <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="telefone" class="block text-sm font-medium text-gray-700 mb-1">Telefone:</label>
                        <input type="text" name="telefone" id="telefone" value="{{ old('telefone') }}" 
                               class="w-full text-sm p-2 border rounded-md bg-gray-50 focus:bg-white focus:outline-none @error('telefone') border-red-500 @else border-gray-300 @enderror">
                        @error('telefone')
                            <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">E-mail:</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" 
                               class="w-full text-sm p-2 border rounded-md bg-gray-50 focus:bg-white focus:outline-none @error('email') border-red-500 @else border-gray-300 @enderror">
                        @error('email')
                            <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex justify-end gap-3 pt-2 border-t border-gray-100 mt-2">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-md text-sm transition-colors">
                            Salvar Cliente
                        </button>
                    </div>
                </form>
            </div>
        </div> 
    </div>
</div>
<div class="bg-white border-t border-gray-200 p-3 text-center text-xs text-gray-400">
    &copy; 2026 - Barbearia King
</div>