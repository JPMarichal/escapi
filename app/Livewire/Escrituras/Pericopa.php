<?php

namespace App\Livewire\Escrituras;

use Livewire\Component;
use App\Models\Pericopas;

class Pericopa extends Component
{
    public $pericopa;
    public $versiculos;

    public function mount(Pericopas $pericopa, $versiculos)
    {
        $this->pericopa = $pericopa;
        // Filtramos los versículos que pertenecen a esta perícopa
        $this->versiculos = $versiculos->filter(function($versiculo) {
            return $versiculo->num_versiculo >= $this->pericopa->versiculo_inicial 
                && $versiculo->num_versiculo <= $this->pericopa->versiculo_final;
        })->sortBy('num_versiculo');
    }

    public function render()
    {
        return view('livewire.escrituras.pericopa');
    }
}
