<div class="min-h-screen bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 py-8 bg-white relative border-l border-green-600/30 border-r">
        <!-- Migas de pan -->
        <livewire:escrituras.breadcrumbs 
            :libro="$capitulo->libro->nombre" 
            :capitulo="$capitulo->num_capitulo" 
            :referencia="$capitulo->libro->nombre . ' ' . $capitulo->num_capitulo"
            tipo="capitulo" />

        <div class="flex items-center justify-between mb-8">
            <h1 class="text-xl font-semibold text-green-700">
                Comentarios a {{ $capitulo->libro->nombre }} {{ $capitulo->num_capitulo }}
            </h1>
            <a href="{{ route('escrituras.capitulo', ['libro' => strtolower($capitulo->libro->nombre), 'capitulo' => $capitulo->num_capitulo]) }}" 
               class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-600 hover:text-gray-900">
                <i class="fa-solid fa-arrow-left mr-2"></i>
                Volver al capítulo
            </a>
        </div>

        <!-- Contenido -->
        <div class="space-y-8">
            @forelse($versiculos as $versiculo)
                @if($versiculo->comentarios->isNotEmpty())
                    <section class="bg-white rounded-lg shadow-sm border border-gray-200">
                        <div class="px-4 py-3 border-b border-gray-200">
                            <div class="flex items-center justify-between">
                                <h2 class="text-lg font-medium text-green-700">
                                    {{ $capitulo->libro->nombre }} {{ $capitulo->num_capitulo }}:{{ $versiculo->num_versiculo }}
                                </h2>
                                <button 
                                    x-data="{ open: false }"
                                    @click="open = !open"
                                    class="text-gray-500 hover:text-gray-700"
                                >
                                    <i class="fa-solid fa-chevron-down text-xs" x-show="!open"></i>
                                    <i class="fa-solid fa-chevron-up text-xs" x-show="open" style="display: none;"></i>
                                </button>
                            </div>
                            <div x-data="{ open: false }" x-show="open" style="display: none;">
                                <p class="mt-2 text-gray-600">{{ $versiculo->contenido }}</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="space-y-6">
                                @foreach($versiculo->comentarios as $comentario)
                                    <article class="rounded-lg border border-gray-200 p-4 hover:border-gray-300 transition-colors">
                                        @if($comentario->titulo)
                                            <h3 class="font-semibold text-green-700 mb-3 pb-2 border-b border-gray-200">
                                                {{ $comentario->titulo }}
                                            </h3>
                                        @endif
                                        
                                        <div class="prose prose-sm max-w-none text-gray-600 prose-p:mt-0 prose-p:mb-2 last:prose-p:mb-0">
                                            {!! $comentario->comentario !!}
                                        </div>

                                        @if($comentario->url_imagen)
                                            <figure class="mt-3">
                                                <img src="{{ $comentario->url_imagen }}" 
                                                     alt="Imagen del comentario" 
                                                     class="rounded-lg max-h-64 mx-auto"
                                                     loading="lazy">
                                            </figure>
                                        @endif

                                        @if($comentario->url_video)
                                            <div class="mt-3 aspect-w-16 aspect-h-9">
                                                <iframe src="{{ $comentario->url_video }}" 
                                                        frameborder="0" 
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                                        allowfullscreen 
                                                        class="rounded-lg w-full h-full"
                                                        loading="lazy">
                                                </iframe>
                                            </div>
                                        @endif
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    </section>
                @endif
            @empty
                <div class="text-center py-12">
                    <p class="text-gray-500">No hay comentarios en este capítulo.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
