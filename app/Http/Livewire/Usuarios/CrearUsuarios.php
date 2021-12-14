<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Http\Livewire\Usuarios\RulesUsuarios;
use Illuminate\Support\Facades\Hash;

class CrearUsuarios extends Component
{
    use WithFileUploads;
    public Usuario $agregar;
    public $foto;
    public $password;
    public $confirmar_password;

    public function mount(){
        $this->agregar = new Usuario();   
     }
    public function render()
    {
        return view('livewire.usuarios.crear-usuarios');
    }
    public function crear()
    {
        $this->validate();
        $this->agregar->password = Hash::make($this->password);

        if ($this->foto != null) {
            $this->agregar->foto = Storage::disk('public')->put('images/usuarios', $this->foto);
        }

        $this->agregar->save();
        return redirect(route('index.usuarios'));
    }

    public function rules()
    {
        return RulesUsuarios::Reglas();
    }
}
