<?php

namespace App\Http\Livewire\Alumnos;

use App\Models\Alumno;
use Livewire\Component;

class MostrarAlumnos extends Component
{
    public Alumno $alumno;
    public $foto;
    public function render()
    {
        return view('livewire.alumnos.mostrar-alumnos');
    }
}
