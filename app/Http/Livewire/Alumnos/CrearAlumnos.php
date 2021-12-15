<?php

namespace App\Http\Livewire\Alumnos;

use App\Models\Alumno;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearAlumnos extends Component
{
    use WithFileUploads;
    public Alumno $alumno;
    public $foto;

    public function mount()
    {
        $this->alumno = new Alumno();
    }
    public function render()
    {
        return view('livewire.alumnos.crear-alumnos');
    }
    public function crear()
    {
        $this->validate();
        

        /* if ($this->foto != null) {
            $this->alumno->foto = Storage::disk('public')->put('images/alumnos', $this->foto);
        } */

        $this->alumno->save();
        return redirect(route('index.alumnos'));
    }
    public function rules()
    {
        return RulesAlumnos::Reglas();
    }
}
