<?php

namespace App\Http\Livewire\Equipos;

use App\Models\Equipo;
use Livewire\Component;

class EquiposShow extends Component
{
    public Equipo $equipo;
    public function render()
    {
        return view('livewire.equipos.equipos-show');
    }
}
