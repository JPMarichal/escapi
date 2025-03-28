<?php

namespace App\Livewire\Escrituras;

use Livewire\Component;
use App\Models\Versiculos;
use App\Models\Capitulos;
use App\Models\Libros;
use App\Traits\ScriptureReferences;
use App\Traits\TextNormalization;
use App\Services\SitePreferences;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class VistaCapitulo extends Component
{
    use ScriptureReferences, TextNormalization;

    public $libro;
    public $capitulo;
    public $versiculos;
    public $pericopas;
    public $referencia;
    public $error;
    public $capituloAnterior;
    public $capituloSiguiente;
    public $url_audio;
    public $mostrarPericopas = true;

    protected $listeners = ['pericopasToggled'];

    public function mount($libro = null, $capitulo = null)
    {
        // No reemplazar guiones para los libros de José Smith, ya que son parte del nombre oficial
        if (str_starts_with($libro, 'jose-smith-')) {
            $this->libro = str_replace('jose-smith-', 'José Smith-', $libro);
        } else {
            // Para el resto de libros, convertir guiones a espacios
            $this->libro = ucwords(str_replace('-', ' ', $libro));
        }
        
        $this->capitulo = $capitulo;
        $this->mostrarPericopas = SitePreferences::get('mostrar_pericopas', true);
        
        Log::debug('VistaCapitulo mount:', [
            'libro_original' => $libro,
            'libro_procesado' => $this->libro,
            'capitulo' => $this->capitulo,
            'mostrarPericopas' => $this->mostrarPericopas
        ]);
        
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
                // Para libros de José Smith, buscar el nombre exacto incluyendo el guión
                if (str_contains($this->libro, 'José Smith-')) {
                    $nombreNormalizado = $this->normalizarTexto($this->libro);
                    Log::debug('Buscando libro JS:', [
                        'original' => $this->libro,
                        'normalizado' => $nombreNormalizado
                    ]);
                    $query->whereRaw('LOWER(nombre) = ?', [$nombreNormalizado]);
                } else {
                    // Para otros libros, normalizar y buscar sin guiones
                    $nombreNormalizado = $this->normalizarTexto(str_replace('-', ' ', $this->libro));
                    Log::debug('Buscando libro normal:', [
                        'original' => $this->libro,
                        'normalizado' => $nombreNormalizado,
                        'sql' => "SELECT * FROM libros WHERE LOWER(nombre) = '{$nombreNormalizado}' OR LOWER(abreviatura) = '{$nombreNormalizado}'"
                    ]);
                    $query->whereRaw('LOWER(nombre) = ?', [$nombreNormalizado])
                        ->orWhereRaw('LOWER(abreviatura) = ?', [$nombreNormalizado]);
                }
            })->first();

            Log::debug('Libro encontrado:', [
                'busqueda' => $this->libro,
                'encontrado' => $libro ? $libro->toArray() : 'no encontrado'
            ]);

            if (!$libro) {
                $this->error = 'No se encontró el libro especificado.';
                return;
            }

            // Luego obtener el capítulo con sus perícopas
            $capitulo = Capitulos::where('libro_id', $libro->id)
                ->where('num_capitulo', $this->capitulo)
                ->with(['pericopas' => function($query) {
                    $query->orderBy('versiculo_inicial');
                }])
                ->first();

            Log::debug('Capítulo encontrado:', [
                'libro_id' => $libro->id,
                'num_capitulo' => $this->capitulo,
                'encontrado' => $capitulo ? $capitulo->toArray() : 'no',
                'pericopas' => $capitulo ? $capitulo->pericopas->count() : 0
            ]);

            if (!$capitulo) {
                $this->error = 'No se encontró el capítulo especificado.';
                return;
            }

            $this->referencia = "{$libro->nombre} {$capitulo->num_capitulo}";
            $this->url_audio = $capitulo->url_audio;
            $this->pericopas = $capitulo->pericopas;

            // Cargar todos los versículos del capítulo ordenados, con sus comentarios
            $this->versiculos = Versiculos::where('capitulo_id', $capitulo->id)
                ->withCount('comentarios')
                ->orderBy('num_versiculo')
                ->get();

            Log::debug('Cargando versículos con comentarios:', [
                'capitulo_id' => $capitulo->id,
                'total_versiculos' => $this->versiculos->count(),
                'detalles' => $this->versiculos->map(fn($v) => [
                    'id' => $v->id,
                    'num' => $v->num_versiculo,
                    'comentarios_count' => $v->comentarios_count
                ])
            ]);

            // Precalcular si cada versículo tiene comentarios para evitar N+1 queries
            $this->versiculos->each(function($versiculo) {
                $versiculo->tieneComentarios = $versiculo->comentarios_count > 0;
                $versiculo->numComentarios = $versiculo->comentarios_count;
                
                Log::debug("Versículo {$versiculo->num_versiculo} procesado:", [
                    'id' => $versiculo->id,
                    'comentarios_count' => $versiculo->comentarios_count,
                    'tieneComentarios' => $versiculo->tieneComentarios,
                    'numComentarios' => $versiculo->numComentarios
                ]);
            });

            Log::debug('Versículos cargados:', [
                'capitulo_id' => $capitulo->id,
                'cantidad' => $this->versiculos->count(),
                'versiculos' => $this->versiculos->map(fn($v) => [
                    'id' => $v->id,
                    'num' => $v->num_versiculo,
                    'contenido' => substr($v->contenido, 0, 50) . '...',
                    'numComentarios' => $v->comentarios_count,
                    'tieneComentarios' => $v->tieneComentarios
                ])
            ]);

            $this->cargarNavegacion();

        } catch (\Exception $e) {
            $this->error = 'Ocurrió un error al cargar el capítulo.';
            Log::error('Error cargando capítulo: ' . $e->getMessage());
            Log::error($e->getTraceAsString());
        }
    }

    public function pericopasToggled($estado)
    {
        $this->mostrarPericopas = $estado;
        Log::debug('Perícopas toggled en VistaCapitulo:', [
            'estado' => $estado
        ]);
    }

    protected function cargarNavegacion()
    {
        if (!$this->libro || !$this->capitulo) {
            return;
        }

        try {
            // Obtener el libro actual
            $libroActual = Libros::where(function($query) {
                $nombreNormalizado = $this->normalizarTexto($this->libro);
                $query->whereRaw('LOWER(nombre) = ?', [$nombreNormalizado])
                      ->orWhereRaw('LOWER(abreviatura) = ?', [$nombreNormalizado]);
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

            // Generar URLs usando guiones para espacios
            $libroUrl = Str::slug($libroActual->nombre);

            // Buscar el capítulo anterior
            if ($capituloActual->num_capitulo > 1) {
                $capituloAnterior = Capitulos::where('libro_id', $libroActual->id)
                    ->where('num_capitulo', $capituloActual->num_capitulo - 1)
                    ->first();
                
                if ($capituloAnterior) {
                    $this->capituloAnterior = [
                        'libro' => $libroUrl,
                        'capitulo' => $capituloAnterior->num_capitulo
                    ];
                }
            } else {
                $libroAnterior = Libros::where('id', '<', $libroActual->id)
                    ->orderBy('id', 'desc')
                    ->first();

                if (!$libroAnterior) {
                    $libroAnterior = Libros::orderBy('id', 'desc')->first();
                }

                if ($libroAnterior) {
                    $capituloAnterior = Capitulos::where('libro_id', $libroAnterior->id)
                        ->orderBy('num_capitulo', 'desc')
                        ->first();

                    if ($capituloAnterior) {
                        $this->capituloAnterior = [
                            'libro' => Str::slug($libroAnterior->nombre),
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
                $capituloSiguiente = Capitulos::where('libro_id', $libroActual->id)
                    ->where('num_capitulo', $capituloActual->num_capitulo + 1)
                    ->first();

                if ($capituloSiguiente) {
                    $this->capituloSiguiente = [
                        'libro' => $libroUrl,
                        'capitulo' => $capituloSiguiente->num_capitulo
                    ];
                }
            } else {
                $libroSiguiente = Libros::where('id', '>', $libroActual->id)
                    ->orderBy('id')
                    ->first();

                if (!$libroSiguiente) {
                    $libroSiguiente = Libros::orderBy('id')->first();
                }

                if ($libroSiguiente) {
                    $capituloSiguiente = Capitulos::where('libro_id', $libroSiguiente->id)
                        ->orderBy('num_capitulo')
                        ->first();

                    if ($capituloSiguiente) {
                        $this->capituloSiguiente = [
                            'libro' => Str::slug($libroSiguiente->nombre),
                            'capitulo' => $capituloSiguiente->num_capitulo
                        ];
                    }
                }
            }
        } catch (\Exception $e) {
            Log::error('Error cargando navegación: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.escrituras.vista-capitulo');
    }
}
