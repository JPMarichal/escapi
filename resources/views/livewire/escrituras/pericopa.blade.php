<div id="pericopa-{{ $pericopa->id }}" class="mb-12">
    <div class="py-4 border-t-2 border-b-2 border-green-600/30">
        <div class="flex items-center justify-center gap-2">
            <h2 class="text-2xl text-green-700 text-center font-semibold tracking-wide">{{ $pericopa->titulo }}</h2>
            @if($enVistaCapitulo)
                <a href="#top" class="text-gray-400 hover:text-gray-600 transition-colors" title="Volver arriba">
                    <i class="fa-solid fa-circle-chevron-up"></i>
                </a>
            @endif
        </div>
    </div>
    <div class="mt-4 space-y-0">
        @foreach($versiculos as $versiculo)
            <livewire:escrituras.versiculo :versiculo="$versiculo" :esPar="$loop->even" :wire:key="$versiculo->id" />
        @endforeach
    </div>
</div>
