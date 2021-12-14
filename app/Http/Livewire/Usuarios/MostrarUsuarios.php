<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Livewire\Component;

class MostrarUsuarios extends Component
{
    public Usuario $agregar;
    public $foto;
    public function render()
    {
        return view('livewire.usuarios.mostrar-usuarios');
    }
}
