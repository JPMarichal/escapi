<div class="p-4 {{ $esPar ? 'bg-[#F5F5DC]/20' : 'bg-white' }} font-['Verdana']">
    <div class="flex items-start gap-4">
        <span class="text-sm font-semibold text-gray-500">{{ $versiculo->num_versiculo }}</span>
        <div class="flex-1">
            <p class="text-gray-900">{{ $versiculo->contenido }}</p>
        </div>
    </div>
</div>
