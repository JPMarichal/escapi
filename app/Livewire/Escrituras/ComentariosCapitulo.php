<?php

declare(strict_types=1);

namespace App\Livewire\Escrituras;

use Livewire\Component;
use App\Models\Capitulos;
use App\Models\Versiculos;
use App\Models\Comentarios;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

class ComentariosCapitulo extends Component
{
    public ?Capitulos $capitulo = null;
    /** @var Collection<int, Versiculos> */
    public Collection $versiculos;

    public function mount(int $id): void
    {
        $this->capitulo = Capitulos::with([
            'libro.volumen',
            'versiculos' => function ($query) {
                $query->orderBy('num_versiculo', 'asc');
            },
            'versiculos.comentarios' => function ($query) {
                $query->orderBy('orden', 'asc');
            }
        ])->findOrFail($id);

        $this->versiculos = $this->capitulo->versiculos;
    }

    public function render(): View
    {
        return view('livewire.escrituras.comentarios-capitulo');
    }
}
