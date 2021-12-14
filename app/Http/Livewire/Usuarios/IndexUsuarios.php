<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Livewire\Component;
use Livewire\WithPagination;

class IndexUsuarios extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $search;
    public $cargando = false;
    public function render()
    {
        $usuarios = ($this->cargando == true) ? Usuario::where('username', 'LIKE', '%' .$this->search .'%')
        ->orwhere ('email', 'LIKE', '%' .$this->search .'%')
        ->paginate(10) : [];
        return view('livewire.usuarios.index-usuarios', compact('usuarios'));
    }

    public function cargando()
    {
        $this->cargando = true;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
