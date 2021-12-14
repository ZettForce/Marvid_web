<div>
    <div class="card mx-auto" style="width: 18rem;">
        <img style="width: 150px; height: 150px;"  class="mx-auto mt-3 card-img-top" 
            src="{{Storage::disk('public')->url($agregar->foto ? $agregar->foto : 'images/usuarios/default.png')}}" alt="Image">
        <div class="text-center card-body">
          <h5 class="card-title ">{{$agregar->username}}</h5>
          <small class="card-text"><i class="fa fa-envelope"></i> E-mail: {{$agregar->email}}</small>
          <a href="{{route('index.usuarios')}}" class="btn btn-primary d-block"><i class="fa fa-home"></i> Regresar</a>
        </div>
      </div>
</div>

