<?php

namespace App\Livewire\Escrituras;

use Livewire\Component;
use App\Services\SitePreferences;
use Illuminate\Support\Facades\Log;

class ToolBarCapitulo extends Component
{
    public $mostrarPericopas = true;
    public $mostrarEstructura = false;
    public $pericopas = [];
    public $referencia = '';

    public function mount($pericopas = [], $referencia = '')
    {
        // Cargar preferencia desde el servicio centralizado
        $this->mostrarPericopas = SitePreferences::get('mostrar_pericopas', true);
        $this->pericopas = $pericopas;
        $this->referencia = $referencia;
        
        Log::debug('ToolBarCapitulo mount:', [
            'mostrarPericopas' => $this->mostrarPericopas,
            'referencia' => $this->referencia,
            'num_pericopas' => count($this->pericopas)
        ]);
    }

    public function togglePericopas()
    {
        $this->mostrarPericopas = !$this->mostrarPericopas;
        
        // Guardar en el servicio centralizado
        SitePreferences::set('mostrar_pericopas', $this->mostrarPericopas);
        
        // Emitir evento para que otros componentes se actualicen
        $this->dispatch('pericopasToggled', $this->mostrarPericopas);
        
        Log::debug('Toggle perícopas:', [
            'estado' => $this->mostrarPericopas
        ]);
    }

    public function toggleEstructura()
    {
        $this->mostrarEstructura = !$this->mostrarEstructura;
        Log::debug('Toggle estructura:', [
            'estado' => $this->mostrarEstructura
        ]);
    }

    public function render()
    {
        return view('livewire.escrituras.toolbar-capitulo');
    }
}
