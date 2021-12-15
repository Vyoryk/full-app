<?php

namespace App\Http\Livewire\Prestamos;

use App\Models\Prestamo;
use Livewire\Component;

class PrestamosShow extends Component
{
    public Prestamo $prestamo;

    public function render()
    {
        $datos =
            Prestamo::join('usuarios', 'prestamos.id_usuario', '=', 'usuarios.id')
            ->where('usuarios.id', '=', $this->prestamo->id_usuario)
            ->join('equipos', 'prestamos.id_equipo', '=', 'equipos.id')
            ->where('equipos.id', '=', $this->prestamo->id_equipo)
            ->select(
                'usuarios.*',
                'equipos.*',
            )->paginate(10);
        $datos = $datos[0];

        return view('livewire.prestamos.prestamos-show', compact('datos'));
    }
}
