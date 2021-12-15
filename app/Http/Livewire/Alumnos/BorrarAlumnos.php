<?php

namespace App\Http\Livewire\Alumnos;

use App\Models\Alumno;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class BorrarAlumnos extends Component
{
    public Alumno $alumno;
    public function render()
    {
        return view('livewire.alumnos.borrar-alumnos');
    }
    public function eliminar()
    {
        $this->alumno->delete();
        /* Storage::disk('public')->delete($this->alumno->foto); */
        return redirect(route('index.alumnos'));
    }
}
