<?php

namespace App\Livewire\Escrituras;

use Livewire\Component;
use App\Models\Libros;

class VistaLibro extends Component
{
    public $libro;

    public function mount($libro)
    {
        $this->libro = Libros::where('nombre', $libro)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.escrituras.vista-libro', [
            'versiculos' => $this->libro->versiculos,
        ]);
    }
}
