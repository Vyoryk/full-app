<?php

namespace App\Http\Livewire\Equipos;

use App\Models\Equipo;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EquiposCreate extends Component
{
    use WithFileUploads;
    public Equipo $equipo;
    public $foto;

    public function mount(){
        $this->equipo = new Equipo();
    }

    public function render()
    {
        return view('livewire.equipos.equipos-create');
    }

    public function crear(){
        $this->validate();

        if($this->foto != null){
            $this->equipo->foto = Storage::disk('public')->put('images/equipos', $this->foto);
        }
        $this->equipo->save();
        return redirect(route('equipos.index'));
    }

    protected function rules()
    {
        return ReglasEquipo::reglas();
    }
}
