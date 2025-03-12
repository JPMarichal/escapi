<div class="max-w-4xl mx-auto px-4 py-8 bg-white dark:bg-gray-900">
    <header class="mb-8 text-center">
        <h1 class="text-3xl md:text-4xl font-serif text-gray-900 dark:text-gray-100">
            {{ $referencia }}
        </h1>
    </header>

    @if($error)
        <div class="text-center text-red-600 dark:text-red-400 mb-8">
            <i class="fas fa-exclamation-circle text-4xl mb-4"></i>
            <p>{{ $error }}</p>
        </div>
    @endif

    @if($versiculos && count($versiculos) > 0)
        <div class="space-y-4 font-serif text-lg text-gray-800 dark:text-gray-200">
            @foreach($versiculos as $versiculo)
                <div class="group flex" id="v{{ $versiculo->num_versiculo }}">
                    <span class="w-8 text-sm font-bold text-gray-500 dark:text-gray-400 pt-1 select-none">
                        {{ $versiculo->num_versiculo }}
                    </span>
                    <div class="flex-1">
                        <p class="inline group-hover:bg-yellow-50 dark:group-hover:bg-gray-800 transition-colors duration-200">
                            {{ $versiculo->contenido }}
                        </p>
                    </div>
                    <div class="hidden group-hover:flex items-start ml-2 space-x-2">
                        <button title="Copiar versículo" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                            <i class="fas fa-copy"></i>
                        </button>
                        <button title="Compartir versículo" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                            <i class="fas fa-share"></i>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    @elseif(!$error)
        <div class="text-center text-gray-600 dark:text-gray-400">
            <i class="fas fa-book-open text-4xl mb-4"></i>
            <p>No se encontraron versículos para esta referencia.</p>
        </div>
    @endif
</div>
