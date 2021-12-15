<div wire:init="cargando">
    {{-- <div wire:poll> funciona para recargar pagina en tiempo real --}}
    <h4>Index de usuarios</h4>
    <a type="button" href="{{ route('crear.usuarios') }}" class="float-right mb-3 btn btn-success">Agregar <i
            class="fa fa-plus" aria-hidden="true"></i></a>

    <div class="mb-2 col-3">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
            <input wire:model="search" class="form-control" placeholder="Buscar..." type="search" aria-l
                aria-describedby="addon-wrapping">

        </div>

    </div>

    @if (count($usuarios) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <th scope="row">{{ $usuario->id }}</th>
                        <td> {{ $usuario->username }}</td>
                        <td> {{ $usuario->email }}</td>
                        <th>
                            <img style="width: 40px;height:40px" class="rounded-circle"
                                src="{{ Storage::disk('public')->url($usuario->foto ? $usuario->foto : 'images/usuarios/default.png') }}"
                                alt="">
                        </th>
                        <td>
                            <a href="{{ route('mostrar.usuarios', $usuario) }}" title="Ver más"
                                class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <a href="{{ route('editar.usuarios', $usuario) }}" title="Editar"
                                class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></i></a>
                            <a href="{{ route('borrar.usuarios', $usuario) }}" title="Eliminar"
                                class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>

    @else
        <img class="mx-auto d-block" style="width: 250px; height: 250px"
            src="{{ Storage::disk('public')->url('images/otros/cargando.gif') }}" alt="cargando">
    @endif

    {{-- </div> --}}


    {{ $cargando == true ? $usuarios->links() : null }}
</div>
