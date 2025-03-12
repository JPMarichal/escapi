<div class="max-w-4xl mx-auto px-4 py-8 bg-white relative">
    <!-- Navegación fija -->
    <div class="fixed top-1/2 -translate-y-1/2 left-0 md:left-4 z-50">
        @if($capituloAnterior)
            <a href="/escrituras/{{ strtolower($capituloAnterior['libro']) }}/{{ $capituloAnterior['capitulo'] }}"
               class="flex items-center justify-center w-8 h-8 md:w-10 md:h-10 rounded-r-lg bg-white/95 shadow-md hover:bg-white hover:shadow-lg transition-all group"
               title="{{ $capituloAnterior['libro'] }} {{ $capituloAnterior['capitulo'] }}">
                <i class="fa-solid fa-chevron-left text-xl md:text-2xl text-gray-400 group-hover:text-gray-800"></i>
            </a>
        @endif
    </div>

    <div class="fixed top-1/2 -translate-y-1/2 right-0 md:right-4 z-50">
        @if($capituloSiguiente)
            <a href="/escrituras/{{ strtolower($capituloSiguiente['libro']) }}/{{ $capituloSiguiente['capitulo'] }}"
               class="flex items-center justify-center w-8 h-8 md:w-10 md:h-10 rounded-l-lg bg-white/95 shadow-md hover:bg-white hover:shadow-lg transition-all group"
               title="{{ $capituloSiguiente['libro'] }} {{ $capituloSiguiente['capitulo'] }}">
                <i class="fa-solid fa-chevron-right text-xl md:text-2xl text-gray-400 group-hover:text-gray-800"></i>
            </a>
        @endif
    </div>
    <header class="mb-8 text-center">
        <h1 class="text-3xl md:text-4xl font-['Verdana'] text-gray-900">
            {{ $referencia }}
        </h1>
    </header>

    @if($error)
        <div class="text-center text-red-600 mb-8 font-['Verdana']">
            <i class="fa-solid fa-exclamation-circle text-4xl mb-4"></i>
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
            <i class="fa-solid fa-book-open text-4xl mb-4"></i>
            <p>No se encontraron versículos para esta referencia.</p>
        </div>
    @endif
</div>
