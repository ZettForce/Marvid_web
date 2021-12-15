<div>
    <div class="card mx-auto" style="width: 20rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h4 class="text-center card-title">{{$alumno->nombre}}</h4>
          <p class="text-center card-text">{{$alumno->nombre}} {{$alumno->apellidoPaterno}} {{$alumno->apellidoMaterno}}</p>
        </div>
        <ul class="text-center list-group list-group-flush">
          <li class="text-center list-group-item">{{$alumno->domicilio}}</li>
          <li class="text-center list-group-item">{{$alumno->colonia}}</li>
          <li class="text-center list-group-item">{{$alumno->matricula}}</li>
        </ul>
      </div>
</div>
