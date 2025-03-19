<div class="max-w-4xl mx-auto px-4 py-8 bg-white relative border-l border-green-600/30 border-r">
    <!-- Migas de pan -->
    <livewire:escrituras.breadcrumbs 
        :libro="$libro" 
        tipo="libro" />

    <!-- Navegación fija -->
    <div class="fixed top-1/2 -translate-y-1/2 left-0 md:left-4 z-50">
        @if($libroAnterior)
            <a href="/escrituras/{{ strtolower($libroAnterior['libro']) }}"
               class="flex items-center justify-center w-8 h-8 md:w-10 md:h-10 rounded-r-lg bg-white/95 shadow-md hover:bg-white hover:shadow-lg transition-all group"
               title="{{ $libroAnterior['libro'] }}">
                <i class="fa-solid fa-chevron-left text-xl md:text-2xl text-gray-400 group-hover:text-gray-800"></i>
            </a>
        @endif
    </div>

    <div class="fixed top-1/2 -translate-y-1/2 right-0 md:right-4 z-50">
        @if($libroSiguiente)
            <a href="/escrituras/{{ strtolower($libroSiguiente['libro']) }}"
               class="flex items-center justify-center w-8 h-8 md:w-10 md:h-10 rounded-l-lg bg-white/95 shadow-md hover:bg-white hover:shadow-lg transition-all group"
               title="{{ $libroSiguiente['libro'] }}">
                <i class="fa-solid fa-chevron-right text-xl md:text-2xl text-gray-400 group-hover:text-gray-800"></i>
            </a>
        @endif
    </div>

    <header class="mb-12 text-center">
        <h1 class="text-3xl md:text-4xl font-['Verdana'] text-gray-900">
            {{ $libro->nombre }}
        </h1>
    </header>

    <!-- Contenido -->
    @if($versiculos && $versiculos->count() > 0)
        <div class="space-y-2">
            @foreach($versiculos as $versiculo)
                <livewire:escrituras.versiculo :versiculo="$versiculo" :esPar="$loop->even" :wire:key="$versiculo->id" />
            @endforeach
        </div>
    @else
        <div class="text-center text-gray-600 font-['Verdana']">
            <i class="fa-solid fa-book-open text-4xl mb-4"></i>
            <p>No se encontraron versículos para este libro.</p>
        </div>
    @endif
</div>
