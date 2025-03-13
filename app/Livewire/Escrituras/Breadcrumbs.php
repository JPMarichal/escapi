<?php

namespace App\Livewire\Escrituras;

use Livewire\Component;
use App\Models\Libros;
use Illuminate\Support\Facades\Log;

class Breadcrumbs extends Component
{
    public $libro;
    public $capitulo;
    public $tipo = 'capitulo';
    public $volumenNombre;
    public $libroNombre;
    public $referencia;

    public function mount($libro = null, $capitulo = null, $tipo = 'capitulo', $referencia = null)
    {
        $this->libro = $libro;
        $this->capitulo = $capitulo;
        $this->tipo = $tipo;
        $this->referencia = $referencia;
        $this->cargarInformacion();
    }

    protected function cargarInformacion()
    {
        if (!$this->libro) return;

        try {
            $libro = Libros::with('volumen')
                ->where(function($query) {
                    $query->whereRaw('LOWER(nombre) = ?', [strtolower($this->libro)])
                        ->orWhereRaw('LOWER(abreviatura) = ?', [strtolower($this->libro)]);
                })->first();

            if ($libro && $libro->volumen) {
                $this->volumenNombre = $libro->volumen->nombre;
                $this->libroNombre = $libro->nombre;
                
                // Debug info
                Log::debug('Breadcrumb info:', [
                    'volumen' => $this->volumenNombre,
                    'libro' => $this->libroNombre,
                    'referencia' => $this->referencia
                ]);
            }
        } catch (\Exception $e) {
            Log::error('Error cargando breadcrumb: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.escrituras.breadcrumbs');
    }
}
