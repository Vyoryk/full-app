<?php

namespace App\Http\Livewire\Prestamos;

use App\Models\Prestamo;
use Livewire\Component;
use Livewire\WithPagination;

class PrestamosIndex extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $search;
    public $cargado = false;

    public function render()
    {
        $prestamos = ($this->cargado == true) ?
            Prestamo::join('usuarios', 'prestamos.id_usuario', '=', 'usuarios.id')
            ->join('equipos', 'prestamos.id_equipo', '=', 'equipos.id')
            ->select(
                'prestamos.*',
                'usuarios.nombre_usuario',
                'equipos.nombre',
                'equipos.codigo',
                'equipos.cantidad',
            )->paginate(10) : [];
        return view('livewire.prestamos.prestamos-index', compact('prestamos'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function cargando()
    {
        $this->cargado = true;
    }
}
