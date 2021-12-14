<div>

    <form wire:submit.prevent="crear" wire:click="$emit('saved')">
        <div class="card">
            <div class="card-header">
                Nuevo usuario
            </div>
            <div class="card-body">
                @include('livewire.usuarios.formulario')
            </div>
            <div class="card-footer text-muted">
                <button wire:loading.attr="disabled" wire:target="foto" class="btn btn-success btn-sm">Agregar <i
                        class="fa fa-save" aria-hidden="true"></i></button>
                <a href="{{ route('index.usuarios') }}" class="btn btn-danger btn-sm">Cancelar <i class="fa fa-ban"
                        aria-hidden="true"></i></a>
            </div>
        </div>

    </form>

</div>
