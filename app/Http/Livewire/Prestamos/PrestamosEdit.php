<?php

namespace App\Http\Livewire\Prestamos;

use App\Models\Equipo;
use App\Models\Prestamo;
use App\Models\Usuario;
use Livewire\Component;

class PrestamosEdit extends Component
{
    public Prestamo $prestamo;

    public function render()
    {
        $equipos = Equipo::all();
        $usuarios = Usuario::all();
        return view('livewire.prestamos.prestamos-edit', compact('equipos', 'usuarios'));
    }

    public function editar()
    {
        $this->validate();

        $this->prestamo->save();
        return redirect(route('prestamos.index'));
    }

    protected function rules()
    {
        return ReglasPrestamo::reglas();
    }
}
