<?php

namespace App\Http\Livewire\Alumnos;

use App\Models\Alumno;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditarAlumnos extends Component
{
    use WithFileUploads;
    public Alumno $alumno;
    public $foto;
    public function render()
    {
        return view('livewire.alumnos.editar-alumnos');
    }
    public function editar()
    {
        $this->validate();
        /* if ($this->foto != null){
            if($this->alumno->foto != null){
                Storage::disk('public')->delete($this->alumno->foto);
            }
            $this->alumno->foto = Storage::disk('public')->put('images/alumnos', $this->foto);
        } */
        




        $this->alumno->save();
        return redirect(route('index.alumnos'));
    }
    protected function rules()
    {
        return RulesAlumnos::Reglas($this->alumno->id);
    }
}
