<div class="relative">
    @if($show)
    <div class="fixed inset-0 bg-gray-500/40 backdrop-blur-sm transition-opacity"></div>

    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-2xl">
                <!-- Encabezado -->
                <div class="border-b border-gray-200 px-4 py-3 sm:px-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-medium leading-6 text-green-700">
                            Comentarios a {{ $referencia }}
                        </h3>
                        <button wire:click="closeModal" type="button" class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Cerrar</span>
                            <i class="fa-solid fa-times"></i>
                        </button>
                    </div>
                </div>

                <!-- Contenido -->
                <div class="bg-white px-4 py-4 sm:px-6 max-h-[calc(100vh-16rem)] overflow-y-auto">
                    @if($comentarios->isEmpty())
                        <p class="text-center text-gray-500 py-4">No hay comentarios para este versículo.</p>
                    @else
                        <div class="space-y-6">
                            @foreach($comentarios as $comentario)
                                <article class="rounded-lg border border-gray-200 p-4 hover:border-gray-300 transition-colors">
                                    @if($comentario->titulo)
                                        <h4 class="font-semibold text-green-700 mb-3 pb-2 border-b border-gray-200">
                                            {{ $comentario->titulo }}
                                        </h4>
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
                    @endif
                </div>

                <!-- Pie del modal -->
                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button wire:click="closeModal" 
                            type="button" 
                            class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
