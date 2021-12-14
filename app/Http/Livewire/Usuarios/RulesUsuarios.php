<?php
namespace App\Http\Livewire\Usuarios;

class RulesUsuarios{
    public static function Reglas($id = null)
    {
        $validarPassword = ($id) ? 'nullable|min:8' : 'required|min:8';
        return[
            'agregar.username' => 'required|string',
            'agregar.email' => 'required|email|unique:usuarios,email,' .$id,
            'foto' => 'nullable|image',
            'password' => $validarPassword,
            'confirmar_password' => 'same:password'


        ];
    }
}