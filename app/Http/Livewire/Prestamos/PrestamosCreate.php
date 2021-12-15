<?php

namespace App\Http\Livewire\Prestamos;

use App\Models\Equipo;
use App\Models\Prestamo;
use App\Models\Usuario;
use Livewire\Component;

class PrestamosCreate extends Component
{
    public Prestamo $prestamo;

    public function mount()
    {
        $this->prestamo = new Prestamo();
    }

    public function render()
    {
        $equipos = Equipo::all();
        $usuarios = Usuario::all();
        return view('livewire.prestamos.prestamos-create', compact('equipos', 'usuarios'));
    }

    public function crear()
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
