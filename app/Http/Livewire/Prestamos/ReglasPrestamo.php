<?php

namespace App\Http\Livewire\Prestamos;

class ReglasPrestamo
{
    public static function reglas(){
        return [
            'prestamo.id_usuario' => 'required',
            'prestamo.id_equipo' => 'required'
        ];
    }
}
