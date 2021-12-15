<?php
namespace App\Http\Livewire\Alumnos;

class RulesAlumnos{
    public static function Reglas($id = null)
    {
        
        return[
            'alumno.matricula' => 'nullable|string',
            'alumno.nombre' => 'required|string',
            'alumno.apellidoPaterno' => 'required|string',
            'alumno.apellidoMaterno' => 'nullable|string',
            'alumno.domicilio' => 'required|string',
            'alumno.colonia' => 'required|string'
            


        ];
    }
}