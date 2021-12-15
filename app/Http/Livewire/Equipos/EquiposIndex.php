<?php

namespace App\Http\Livewire\Equipos;

use App\Models\Equipo;
use Livewire\Component;
use Livewire\WithPagination;

class EquiposIndex extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $search;
    public $cargado = false;

    public function render()
    {
        $equipos = ($this->cargado == true) ? Equipo::where('nombre', 'LIKE', '%' . $this->search . '%')
            ->orwhere('codigo', 'LIKE', '%' . $this->search . '%')
            ->orwhere('cantidad', 'LIKE', '%' . $this->search . '%')
            ->paginate(5) : [];
        return view('livewire.equipos.equipos-index', compact('equipos'));
    }
    public function updatingSearch(){
        $this->resetPage();
    }

    public function cargando(){
        $this->cargado = true;
    }
}
