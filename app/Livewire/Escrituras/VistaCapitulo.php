<?php

namespace App\Livewire\Escrituras;

use Livewire\Component;
use App\Models\Versiculos;
use App\Models\Capitulos;
use App\Models\Libros;
use App\Traits\ScriptureReferences;
use App\Traits\TextNormalization;

class VistaCapitulo extends Component
{
    use ScriptureReferences, TextNormalization;

    public $libro;
    public $capitulo;
    public $versiculos;
    public $referencia;
    public $error;

    public function mount($libro = null, $capitulo = null)
    {
        $this->libro = $libro;
        $this->capitulo = $capitulo;
        $this->cargarVersiculos();
    }

    public function cargarVersiculos()
    {
        if ($this->libro && $this->capitulo) {
            try {
                // Normalizar el nombre del libro para la búsqueda
                $libroNormalizado = $this->normalizarTexto($this->libro);

                // Buscar el libro primero
                $libro = Libros::whereRaw('LOWER(nombre) = ? OR LOWER(abreviatura) = ?', 
                    [strtolower($libroNormalizado), strtolower($libroNormalizado)])
                    ->first();

                if ($libro) {
                    // Buscar el capítulo dentro del libro encontrado
                    $capitulo = Capitulos::where('libro_id', $libro->id)
                        ->where('num_capitulo', $this->capitulo)
                        ->first();

                    if ($capitulo) {
                        // Obtener los versículos del capítulo
                        $this->versiculos = Versiculos::where('capitulo_id', $capitulo->id)
                            ->orderBy('num_versiculo', 'asc')
                            ->get();

                        $this->referencia = $this->formatearReferencia($libro->nombre, $capitulo->num_capitulo);
                        $this->error = null;
                        return;
                    }
                }

                // Si llegamos aquí, no se encontró el libro o capítulo
                $this->versiculos = collect();
                $this->error = 'No se encontró el capítulo especificado';
                $this->referencia = $this->formatearReferencia($this->libro, $this->capitulo);
            } catch (\Exception $e) {
                $this->versiculos = collect();
                $this->error = 'Ocurrió un error al cargar los versículos';
                $this->referencia = $this->formatearReferencia($this->libro, $this->capitulo);
            }
        }
    }

    public function render()
    {
        return view('livewire.escrituras.vista-capitulo');
    }
}
