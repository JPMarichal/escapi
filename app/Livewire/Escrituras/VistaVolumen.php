<?php

namespace App\Livewire\Escrituras;

use Livewire\Component;
use App\Models\Volumenes;

class VistaVolumen extends Component
{
    public $volumen;

    public function mount($volumen)
    {
        $this->volumen = Volumenes::where('nombre', $volumen)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.escrituras.vista-volumen', [
            'versiculos' => $this->volumen->versiculos,
        ]);
    }
}
