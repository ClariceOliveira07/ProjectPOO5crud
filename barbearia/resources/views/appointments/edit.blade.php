<script src="https://cdn.tailwindcss.com"></script>

<div class="flex min-h-screen bg-[#faf9f6]"> 
    <div class="w-60 bg-white border-r border-gray-200">
        <div class="p-4 border-b border-gray-100 font-bold text-gray-800">
            👑 Barbearia King
        </div>
        <div class="p-4 flex flex-col gap-2">
            <a href="{{ route('clients.index') }}" class="p-2 text-gray-600 hover:bg-gray-100">Clientes</a>
            <a href="{{ route('services.index') }}" class="p-2 text-gray-600 hover:bg-gray-100">Serviços</a>
            <a href="{{ route('appointments.index') }}" class="p-2 text-gray-600 hover:bg-gray-100 font-semibold bg-gray-50 text-gray-900">Agendamento</a>
        </div>
    </div>
    <div class="flex-1 p-6">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-xl font-bold text-gray-800">Agendamentos</h1>
                <p class="text-sm text-gray-500">Modificar detalhes do agendamento selecionado.</p>
            </div>
            <a href="{{ route('appointments.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-semibold px-4 py-2 rounded-md text-sm transition-colors">
                Voltar
            </a>
        </div>
        <div class="flex justify-center mt-6">
            <div class="w-full max-w-xl bg-white border border-gray-200 rounded-md overflow-hidden shadow-sm">
                <div class="bg-[#e9d5ff] p-4 border-b border-gray-200">
                    <h2 class="font-bold text-purple-900">Editar Agendamento</h2>
                </div>
                <form action="{{ route('appointments.update', $ap->id) }}" method="POST" class="p-4 flex flex-col gap-4">
                    @csrf
                    @method('PUT') <div>
                        <label for="client_id" class="block text-sm font-medium text-gray-700 mb-1">Cliente:</label>
                        <select name="client_id" id="client_id" class="w-full text-sm p-2 border border-gray-300 rounded-md bg-gray-50 focus:bg-white focus:outline-none">
                            @foreach($clients as $client)
                                <option value="{{ $client->id }}" {{ old('client_id', $ap->client_id) == $client->id ? 'selected' : '' }}>
                                    {{ $client->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('client_id') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="service_id" class="block text-sm font-medium text-gray-700 mb-1">Serviço:</label>
                        <select name="service_id" id="service_id" class="w-full text-sm p-2 border border-gray-300 rounded-md bg-gray-50 focus:bg-white focus:outline-none">
                            @foreach($services as $service)
                                <option value="{{ $service->id }}" {{ old('service_id', $ap->service_id) == $service->id ? 'selected' : '' }}>
                                    {{ $service->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('service_id') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="data_agenda" class="block text-sm font-medium text-gray-700 mb-1">Data:</label>
                            <input type="date" name="data_agenda" id="data_agenda" value="{{ old('data_agenda', $ap->data_agenda) }}" 
                                   class="w-full text-sm p-2 border border-gray-300 rounded-md bg-gray-50 focus:bg-white focus:outline-none">
                            @error('data_agenda') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="hora_agenda" class="block text-sm font-medium text-gray-700 mb-1">Horário:</label>
                            <input type="time" name="hora_agenda" id="hora_agenda" value="{{ old('hora_agenda', date('H:i', strtotime($ap->hora_agenda))) }}" 
                                   class="w-full text-sm p-2 border border-gray-300 rounded-md bg-gray-50 focus:bg-white focus:outline-none">
                            @error('hora_agenda') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status do Agendamento:</label>
                        <select name="status" id="status" class="w-full text-sm p-2 border border-gray-300 rounded-md bg-gray-50 focus:bg-white focus:outline-none">
                            <option value="Pendente" {{ old('status', $ap->status) == 'Pendente' ? 'selected' : '' }}>Pendente</option>
                            <option value="Concluído" {{ old('status', $ap->status) == 'Concluído' ? 'selected' : '' }}>Concluído</option>
                            <option value="Cancelado" {{ old('status', $ap->status) == 'Cancelado' ? 'selected' : '' }}>Cancelado</option>
                        </select>
                        @error('status') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">Observações:</label>
                        <textarea name="notes" id="notes" rows="3" class="w-full text-sm p-2 border border-gray-300 rounded-md bg-gray-50 focus:bg-white focus:outline-none">{{ old('notes', $ap->notes) }}</textarea>
                        @error('notes') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div class="flex justify-end pt-2 border-t border-gray-100 mt-2">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-md text-sm transition-colors">
                            Atualizar Agendamento
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