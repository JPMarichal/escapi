<?php

declare(strict_types=1);

namespace App\Livewire\Escrituras;

use Livewire\Component;
use App\Models\Versiculos;
use App\Models\Comentarios;
use Livewire\Attributes\On;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class ModalComentarios extends Component
{
    public bool $show = false;
    public ?Versiculos $versiculo = null;
    public string $referencia = '';
    /** @var Collection<int, Comentarios> */
    public Collection $comentarios;

    public function mount(): void
    {
        $this->resetState();
    }

    #[On('showComentarios')] 
    public function showModal(int $versiculoId, string $referencia): void
    {
        // Cargar el versículo y sus comentarios
        $this->versiculo = Versiculos::findOrFail($versiculoId);
        $this->referencia = $referencia;

        // Obtener los comentarios (ya están ordenados por la relación)
        $this->comentarios = $this->versiculo->comentarios;
        $this->show = true;
    }

    public function closeModal(): void
    {
        $this->resetState();
    }

    /**
     * Reinicia el estado del componente.
     */
    protected function resetState(): void
    {
        $this->show = false;
        $this->versiculo = null;
        $this->referencia = '';
        $this->comentarios = new Collection();
    }

    public function render(): View
    {
        return view('livewire.escrituras.modal-comentarios');
    }
}
