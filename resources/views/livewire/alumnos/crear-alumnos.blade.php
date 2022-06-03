<div>

    <form wire:submit.prevent="crear" wire:click="$emit('saved')">
        <div class="card">
            <div class="card-header" style="text-align: center;color:white;background-color:#800000" >
                Datos del Alumno
            </div>
            <div class="card-body">
                @include('livewire.alumnos.formulario')
            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-success btn-sm">Agregar <i
                        class="fa fa-save" aria-hidden="true"></i></button>
                <a href="{{ route('index.alumnos') }}" class="btn btn-danger btn-sm">Cancelar <i class="fa fa-ban"
                        aria-hidden="true"></i></a>
            </div>
        </div>

    </form>

</div>
