<?php

namespace App\Http\Livewire\Alumnos;

use App\Models\Alumno;
use Livewire\Component;
use Livewire\WithPagination;

class IndexAlumnos extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $search;
    public $cargando = false;
    public function render()
    {
        $alumnos = Alumno::orderBy('apellidoPaterno','desc');
        $alumnos = ($this->cargando == true) ? Alumno::where('nombre', 'LIKE', '%' .$this->search .'%')
        ->orwhere ('apellidoPaterno', 'LIKE', '%' .$this->search .'%')
        ->orwhere ('apellidoMaterno', 'LIKE', '%' .$this->search .'%')
        ->paginate(10) : [];
        return view('livewire.alumnos.index-alumnos', compact('alumnos'));
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
