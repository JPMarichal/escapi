<div class="max-w-4xl mx-auto px-4 py-8 bg-white">
    <header class="mb-8 text-center">
        <h1 class="text-3xl md:text-4xl font-['Verdana'] text-gray-900">
            {{ $referencia }}
        </h1>
    </header>

    @if($error)
        <div class="text-center text-red-600 mb-8 font-['Verdana']">
            <i class="fas fa-exclamation-circle text-4xl mb-4"></i>
            <p>{{ $error }}</p>
        </div>
    @endif

    @if($versiculos && count($versiculos) > 0)
        <div class="divide-y divide-gray-100">
            @foreach($versiculos as $versiculo)
                <livewire:escrituras.versiculo :versiculo="$versiculo" :esPar="$loop->even" :wire:key="$versiculo->id" />
            @endforeach
        </div>
    @elseif(!$error)
        <div class="text-center text-gray-600 font-['Verdana']">
            <i class="fas fa-book-open text-4xl mb-4"></i>
            <p>No se encontraron versículos para esta referencia.</p>
        </div>
    @endif
</div>
