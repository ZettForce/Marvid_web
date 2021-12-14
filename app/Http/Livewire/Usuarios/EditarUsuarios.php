<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditarUsuarios extends Component
{
    use WithFileUploads;
    public Usuario $agregar;
    public $foto;
    public $password;
    public $confirmar_password;
    public function render()
    {
        return view('livewire.usuarios.editar-usuarios');
    }
    public function editar()
    {
        $this->validate();
        if ($this->foto != null){
            if($this->agregar->foto != null){
                Storage::disk('public')->delete($this->agregar->foto);
            }
            $this->agregar->foto = Storage::disk('public')->put('images/usuarios', $this->foto);
        }
        /* validar si esta cambiando password */
        if ($this->password) {
            $this->agregar->password = Hash::make($this->password);
        }




        $this->agregar->save();
        return redirect(route('index.usuarios'));
    }
    protected function rules()
    {
        return RulesUsuarios::Reglas($this->agregar->id);
    }
}
