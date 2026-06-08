<script src="https://cdn.tailwindcss.com"></script>

<form action="{{ route('clients.destroy', $client) }}" method="POST" class="inline-block">
    @csrf
    @method('DELETE')
    <button type="submit" 
            onclick="return confirm('Tem certeza que deseja remover este cliente?')" 
            class="text-rose-600 hover:text-rose-900 transition-colors duration-150">
        Remover
    </button>
</form>