<div class="relative">
    <!-- Barra de herramientas -->
    <div class="flex justify-between items-center py-1.5 px-4 border-t border-b border-green-600/30 mb-6">
        <!-- Espacio izquierdo -->
        <div></div>
        
        <!-- Botones centrales -->
        <div class="flex items-center space-x-6">
            <button 
                wire:click="toggleEstructura"
                class="text-gray-500 hover:text-gray-700 transition-colors"
                title="Ver estructura del capítulo"
            >
                <i class="fa-solid fa-sitemap text-xs"></i>
            </button>
        </div>

        <!-- Control de perícopas -->
        <button 
            wire:click="togglePericopas"
            class="text-xs text-gray-500 hover:text-gray-700 cursor-pointer transition-colors"
        >
            Perícopas {{ $mostrarPericopas ? 'off' : 'on' }}
        </button>
    </div>

    <!-- Popup de estructura -->
    @if($mostrarEstructura)
        <div 
            class="absolute z-50 top-full left-1/2 -translate-x-1/2 mt-1 w-80 bg-white rounded-lg shadow-lg border border-gray-200"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 transform scale-95"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-95"
        >
            <!-- Cabecera del popup -->
            <div class="flex justify-between items-center p-2 border-b border-gray-100">
                <h3 class="text-xs font-semibold text-gray-700">Estructura de {{ $referencia }}</h3>
                <button 
                    wire:click="toggleEstructura"
                    class="text-gray-400 hover:text-gray-600 transition-colors"
                >
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <!-- Lista de perícopas -->
            <div class="p-2 max-h-64 overflow-y-auto">
                @if(count($pericopas) > 0)
                    <ol class="space-y-1 list-none">
                        @foreach($pericopas as $pericopa)
                            <li class="flex items-baseline">
                                <span class="text-xs text-gray-400 w-5 shrink-0">{{ $loop->iteration }})</span>
                                @if($mostrarPericopas)
                                    <a 
                                        href="#pericopa-{{ $pericopa->id }}"
                                        class="text-xs text-gray-600 hover:text-green-700 transition-colors block py-0.5"
                                        wire:click="toggleEstructura"
                                    >
                                        {{ $pericopa->titulo }}
                                    </a>
                                @else
                                    <span class="text-xs text-gray-600 block py-0.5">
                                        {{ $pericopa->titulo }}
                                    </span>
                                @endif
                            </li>
                        @endforeach
                    </ol>
                @else
                    <p class="text-xs text-gray-500 text-center">Este capítulo no tiene perícopas</p>
                @endif
            </div>

            <!-- Flecha del popup -->
            <div class="absolute -top-2 left-1/2 -translate-x-1/2 w-3 h-3 rotate-45 bg-white border-t border-l border-gray-200"></div>
        </div>
    @endif
</div>
