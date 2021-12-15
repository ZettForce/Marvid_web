<div>
    <div class="card mx-auto" style="width: 18rem;">
      {{-- <img style="width: 150px; height: 150px;"  class="mx-auto mt-3 card-img-top"
      src="{{Storage::disk('public')->url($agregar->foto ? $agregar->foto : 'images/usuarios/default.png')}}" alt="Image"> --}}
        <div class="card-body">
          <p class="card-text">{{$alumno->nombre}}</p>
          <button wire:click="eliminar" class="btn btn-danger btn-sm">Confirmar <i class="fa fa-trash" aria-hidden="true"></i></button>
          <a href="{{route('index.alumnos')}}" class="btn btn-primary btn-sm">Cancelar <i class="fa fa-save" aria-hidden="true"></i></a>
        </div>
      </div>
</div>