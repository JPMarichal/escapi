<?php

declare(strict_types=1);

namespace App\Livewire\Escrituras;

use Livewire\Component;
use App\Services\SitePreferences;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\View\View;

class ToolbarCapitulo extends Component
{
    public bool $mostrarEstructura = false;
    public bool $mostrarPericopas = true;
    public Collection $pericopas;
    public string $referencia;
    public int $capituloId;

    public function mount(Collection $pericopas, string $referencia, int $capituloId): void
    {
        // Cargar preferencia desde el servicio centralizado
        $this->mostrarPericopas = SitePreferences::get('mostrar_pericopas', true);
        $this->pericopas = $pericopas;
        $this->referencia = $referencia;
        $this->capituloId = $capituloId;
        
        Log::debug('ToolbarCapitulo mount:', [
            'mostrarPericopas' => $this->mostrarPericopas,
            'referencia' => $this->referencia,
            'num_pericopas' => count($this->pericopas),
            'capituloId' => $this->capituloId
        ]);
    }

    public function toggleEstructura(): void
    {
        $this->mostrarEstructura = !$this->mostrarEstructura;
        Log::debug('Toggle estructura:', [
            'estado' => $this->mostrarEstructura
        ]);
    }

    public function togglePericopas(): void
    {
        $this->mostrarPericopas = !$this->mostrarPericopas;
        
        // Guardar preferencia en el servicio centralizado
        SitePreferences::set('mostrar_pericopas', $this->mostrarPericopas);
        
        $this->dispatch('pericopasToggled', $this->mostrarPericopas);
        
        Log::debug('Toggle perícopas:', [
            'estado' => $this->mostrarPericopas
        ]);
    }

    public function render(): View
    {
        return view('livewire.escrituras.toolbar-capitulo');
    }
}
