<?php

namespace App\Livewire\Escrituras;

use Livewire\Component;
use App\Models\Pericopas;
use Illuminate\Support\Facades\Log;

class Pericopa extends Component
{
    public $pericopa;
    public $versiculos;

    public function mount(Pericopas $pericopa, $versiculos)
    {
        $this->pericopa = $pericopa;
        
        // Filtramos los versículos por pericopa_id
        $this->versiculos = $versiculos->filter(function($versiculo) {
            return $versiculo->pericopa_id === $this->pericopa->id;
        })->sortBy('num_versiculo');

        Log::debug('Versículos filtrados para perícopa:', [
            'pericopa_id' => $this->pericopa->id,
            'titulo' => $this->pericopa->titulo,
            'versiculos_encontrados' => $this->versiculos->count(),
            'versiculos' => $this->versiculos->map(fn($v) => [
                'id' => $v->id,
                'num' => $v->num_versiculo,
                'pericopa_id' => $v->pericopa_id
            ])
        ]);
    }

    public function render()
    {
        return view('livewire.escrituras.pericopa');
    }
}
