<?php

namespace App\Livewire\Escrituras;

use Livewire\Component;
use App\Models\Versiculos;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Log;

class Versiculo extends Component
{
    public Versiculos $versiculo;
    public bool $esPar = false;
    public bool $tieneComentarios = false;
    public int $numComentarios = 0;

    public function mount(Versiculos $versiculo, bool $esPar): void
    {
        $this->versiculo = $versiculo;
        $this->esPar = $esPar;

        // Cargar los comentarios de manera eficiente
        $this->versiculo->loadCount('comentarios');
        $this->tieneComentarios = $this->versiculo->comentarios_count > 0;
        $this->numComentarios = $this->versiculo->comentarios_count;

        Log::debug('Versiculo montado:', [
            'id' => $this->versiculo->id,
            'num_versiculo' => $this->versiculo->num_versiculo,
            'comentarios_count' => $this->versiculo->comentarios_count,
            'tieneComentarios' => $this->tieneComentarios,
            'numComentarios' => $this->numComentarios
        ]);
    }

    public function showComentarios(): void
    {
        // Asegurarnos de cargar las relaciones necesarias para la referencia
        $this->versiculo->load(['capitulo.libro']);
        
        $referencia = sprintf(
            '%s %d:%d',
            $this->versiculo->capitulo->libro->nombre,
            $this->versiculo->capitulo->num_capitulo,
            $this->versiculo->num_versiculo
        );

        $this->dispatch('showComentarios', versiculoId: $this->versiculo->id, referencia: $referencia);
    }

    public function render()
    {
        return view('livewire.escrituras.versiculo');
    }
}
