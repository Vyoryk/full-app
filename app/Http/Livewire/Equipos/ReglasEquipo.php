<?php

namespace App\Http\Livewire\Equipos;

class ReglasEquipo
{
    public static function reglas(){
        return [
            'foto' => 'nullable|image',
            'equipo.nombre' => 'required|string',
            'equipo.codigo' => 'nullable|string',
            'equipo.cantidad' => 'required|integer',
            'equipo.descripcion' => 'nullable|string'
        ];
    }
}
