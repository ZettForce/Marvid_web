<div>


    <form wire:submit.prevent="editar">


        <div class="card">
            <div class="card-header">
                Editar usuario
            </div>
            <div class="card-body">
                @include('livewire.usuarios.formulario')
            </div>
            <div class="card-footer text-muted">
                <button wire:loading.attr="disabled" wire:target="foto" class="btn btn-primary btn-sm">Actualizar <i
                        class="fa fa-pencil" aria-hidden="true"></i></button>
                <a href="{{ route('index.usuarios') }}" class="btn btn-danger btn-sm">Cancelar <i class="fa fa-ban"
                        aria-hidden="true"></i></a>
            </div>
        </div>
    </form>

</div>
