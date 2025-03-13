<nav class="mb-6 bg-gray-50/50 py-2 px-4 rounded-lg border border-green-600/10">
    <ol class="flex items-center text-sm">
        @if($tipo === 'capitulo' && $volumenNombre)
            <li class="flex items-center min-w-0">
                <span class="flex items-center text-green-700 whitespace-nowrap">
                    <i class="fa-solid fa-home text-base"></i>
                    <span class="ml-1.5 font-medium">{{ $volumenNombre }}</span>
                </span>
            </li>
            @if($libroNombre)
                <li class="flex items-center min-w-0">
                    <i class="fa-solid fa-chevron-right text-xs text-gray-400 mx-2"></i>
                    <span class="text-gray-600 font-medium whitespace-nowrap">{{ $libroNombre }}</span>
                </li>
                @if($referencia)
                    <li class="flex items-center min-w-0">
                        <i class="fa-solid fa-chevron-right text-xs text-gray-400 mx-2"></i>
                        <span class="text-gray-600 whitespace-nowrap">{{ $referencia }}</span>
                    </li>
                @endif
            @endif
        @endif
    </ol>
</nav>
