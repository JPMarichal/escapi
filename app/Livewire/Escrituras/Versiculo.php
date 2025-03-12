<?php

namespace App\Livewire\Escrituras;

use Livewire\Component;

class Versiculo extends Component
{
    public $versiculo;
    public $esPar;

    public function mount($versiculo, $esPar)
    {
        $this->versiculo = $versiculo;
        $this->esPar = $esPar;
    }

    public function render()
    {
        return view('livewire.escrituras.versiculo');
    }
}
