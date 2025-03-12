<?php

namespace App\Livewire\Escrituras;

use Livewire\Component;
use App\Models\Versiculos;
use App\Models\Capitulos;
use App\Models\Libros;
use App\Traits\ScriptureReferences;
use App\Traits\TextNormalization;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class VistaCapitulo extends Component
{
    use ScriptureReferences, TextNormalization;

    public $libro;
    public $capitulo;
    public $versiculos;
    public $referencia;
    public $error;
    public $capituloAnterior;
    public $capituloSiguiente;
    public $url_audio;

    public function mount($libro = null, $capitulo = null)
    {
        $this->libro = $libro;
        $this->capitulo = $capitulo;
        $this->cargarCapitulo();
    }

    protected function cargarCapitulo()
    {
        if (!$this->libro || !$this->capitulo) {
            $this->error = 'No se ha especificado un libro y capítulo válidos.';
            return;
        }

        try {
            // Primero obtener el libro
            $libro = Libros::where(function($query) {
                $query->whereRaw('LOWER(nombre) = ?', [strtolower($this->libro)])
                    ->orWhereRaw('LOWER(abreviatura) = ?', [strtolower($this->libro)]);
            })->first();

            if (!$libro) {
                $this->error = 'No se encontró el libro especificado.';
                return;
            }

            // Luego obtener el capítulo con todos los campos necesarios
            $capitulo = Capitulos::where('libro_id', $libro->id)
                ->where('num_capitulo', $this->capitulo)
                ->select(['id', 'num_capitulo', 'url_audio'])
                ->first();

            if (!$capitulo) {
                $this->error = 'No se encontró el capítulo especificado.';
                return;
            }

            $this->referencia = "{$libro->nombre} {$capitulo->num_capitulo}";
            $this->url_audio = $capitulo->url_audio;

            // Debug
            Log::debug('Datos del capítulo:', [
                'libro_id' => $libro->id,
                'libro_nombre' => $libro->nombre,
                'capitulo_id' => $capitulo->id,
                'num_capitulo' => $capitulo->num_capitulo,
                'url_audio' => $this->url_audio
            ]);

            $this->cargarVersiculos();
            $this->cargarNavegacion();

        } catch (\Exception $e) {
            $this->error = 'Ocurrió un error al cargar el capítulo.';
            Log::error('Error cargando capítulo: ' . $e->getMessage());
        }
    }

    protected function cargarNavegacion()
    {
        if (!$this->libro || !$this->capitulo) {
            return;
        }

        // Obtener el libro actual
        $libroActual = Libros::where(function($query) {
            $query->whereRaw('LOWER(nombre) = ?', [strtolower($this->libro)])
                  ->orWhereRaw('LOWER(abreviatura) = ?', [strtolower($this->libro)]);
        })->first();

        if (!$libroActual) {
            return;
        }

        // Obtener el capítulo actual
        $capituloActual = Capitulos::where('libro_id', $libroActual->id)
            ->where('num_capitulo', $this->capitulo)
            ->first();

        if (!$capituloActual) {
            return;
        }

        // Buscar el capítulo anterior
        if ($capituloActual->num_capitulo > 1) {
            // Si no es el primer capítulo del libro, ir al anterior
            $capituloAnterior = Capitulos::where('libro_id', $libroActual->id)
                ->where('num_capitulo', $capituloActual->num_capitulo - 1)
                ->first();
            
            if ($capituloAnterior) {
                $this->capituloAnterior = [
                    'libro' => $libroActual->nombre,
                    'capitulo' => $capituloAnterior->num_capitulo
                ];
            }
        } else {
            // Si es el primer capítulo, buscar el último capítulo del libro anterior
            $libroAnterior = Libros::where('id', '<', $libroActual->id)
                ->orderBy('id', 'desc')
                ->first();

            if (!$libroAnterior) {
                // Si no hay libro anterior, ir al último libro
                $libroAnterior = Libros::orderBy('id', 'desc')->first();
            }

            if ($libroAnterior) {
                $capituloAnterior = Capitulos::where('libro_id', $libroAnterior->id)
                    ->orderBy('num_capitulo', 'desc')
                    ->first();

                if ($capituloAnterior) {
                    $this->capituloAnterior = [
                        'libro' => $libroAnterior->nombre,
                        'capitulo' => $capituloAnterior->num_capitulo
                    ];
                }
            }
        }

        // Buscar el capítulo siguiente
        $ultimoCapitulo = Capitulos::where('libro_id', $libroActual->id)
            ->orderBy('num_capitulo', 'desc')
            ->first();

        if ($capituloActual->num_capitulo < $ultimoCapitulo->num_capitulo) {
            // Si no es el último capítulo del libro, ir al siguiente
            $capituloSiguiente = Capitulos::where('libro_id', $libroActual->id)
                ->where('num_capitulo', $capituloActual->num_capitulo + 1)
                ->first();

            if ($capituloSiguiente) {
                $this->capituloSiguiente = [
                    'libro' => $libroActual->nombre,
                    'capitulo' => $capituloSiguiente->num_capitulo
                ];
            }
        } else {
            // Si es el último capítulo, buscar el primer capítulo del libro siguiente
            $libroSiguiente = Libros::where('id', '>', $libroActual->id)
                ->orderBy('id')
                ->first();

            if (!$libroSiguiente) {
                // Si no hay libro siguiente, ir al primer libro
                $libroSiguiente = Libros::orderBy('id')->first();
            }

            if ($libroSiguiente) {
                $capituloSiguiente = Capitulos::where('libro_id', $libroSiguiente->id)
                    ->orderBy('num_capitulo')
                    ->first();

                if ($capituloSiguiente) {
                    $this->capituloSiguiente = [
                        'libro' => $libroSiguiente->nombre,
                        'capitulo' => $capituloSiguiente->num_capitulo
                    ];
                }
            }
        }
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
