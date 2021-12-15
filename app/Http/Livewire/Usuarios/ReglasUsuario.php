<?php

namespace App\Http\Livewire\Usuarios;

class ReglasUsuario
{
    public static function reglas($id = null)
    {
        $validarPassword = ($id) ? 'nullable|min:8' : 'required|min:8';
        return [
            'foto' => 'nullable|image',
            'usuario.nombre_usuario' => 'required|string',
            'usuario.email' => 'required|email|unique:usuarios,email,' . $id,
            'password' => $validarPassword,
            'c_password' => 'same:password'
        ];
    }
}
