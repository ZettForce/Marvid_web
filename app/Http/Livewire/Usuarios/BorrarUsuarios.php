<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class BorrarUsuarios extends Component
{
    public Usuario $agregar;
    public $foto;
    public function render()
    {
        return view('livewire.usuarios.borrar-usuarios');
    }

    public function eliminar()
    {
        $this->agregar->delete();
        Storage::disk('public')->delete($this->agregar->foto);
        return redirect(route('index.usuarios'));
    }
}
