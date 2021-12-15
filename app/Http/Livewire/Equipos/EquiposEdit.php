<?php

namespace App\Http\Livewire\Equipos;

use App\Models\Equipo;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EquiposEdit extends Component
{
    //Para imagenes
    use WithFileUploads;
    public Equipo $equipo;
    public $foto;

    public function render()
    {
        return view('livewire.equipos.equipos-edit');
    }

    public function editar(){
        $this->validate();

        if($this->foto != null){
            if($this->equipo->foto != null){
                Storage::disk('public')->delete($this->equipo->foto);
            }
            $this->equipo->foto = Storage::disk('public')->put('images/equipos',$this->foto);
        }
        $this->equipo->save();

        return redirect(route('equipos.index'));
    }

    protected function rules(){
        return ReglasEquipo::reglas();
    }

}
