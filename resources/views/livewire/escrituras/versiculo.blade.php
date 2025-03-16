@php
    $claseBase = 'relative group';
    $claseVersiculo = $esPar ? 'bg-gray-50' : 'bg-white';
@endphp

<div class="{{ $claseBase }} {{ $claseVersiculo }} px-4 py-2">
    <div class="flex items-start">
        <span class="text-sm font-medium text-gray-600 mr-2">{{ $versiculo->num_versiculo }}</span>
        <div class="flex-1">
            <p class="text-gray-600">{{ $versiculo->contenido }}</p>
            
            @if($versiculo->imagen)
                <figure class="mt-2">
                    <img src="{{ $versiculo->imagen }}" 
                         alt="Imagen del versículo" 
                         class="rounded-lg max-h-64 mx-auto"
                         loading="lazy">
                    @if($versiculo->pie_imagen)
                        <figcaption class="text-sm text-gray-600 text-center mt-1">
                            {{ $versiculo->pie_imagen }}
                        </figcaption>
                    @endif
                </figure>
            @endif

            @if($versiculo->video)
                <div class="mt-2 aspect-w-16 aspect-h-9">
                    <iframe src="{{ $versiculo->video }}" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen 
                            class="rounded-lg w-full h-full"
                            loading="lazy">
                    </iframe>
                </div>
            @endif
        </div>

        <!-- Comentarios -->
        @if($tieneComentarios)
            <button wire:click="showComentarios" 
                    type="button"
                    class="ml-2 p-1 text-gray-400 hover:text-green-700 transition-colors flex items-center"
                    title="Ver {{ $numComentarios }} {{ $numComentarios === 1 ? 'comentario' : 'comentarios' }}">
                <span class="sr-only">Ver comentarios</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd" />
                </svg>
                <span class="text-xs ml-1">{{ $numComentarios }}</span>
            </button>
        @endif
    </div>
</div>
