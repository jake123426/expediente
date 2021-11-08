<div class="card text-dark bg-light mt-3 mb-3">

    <div class="card-header">
        <input class="form-control" placeholder="Ingrese el nombre se usuario" wire:model="search">
    </div>


    @if ($usuarios->count())

        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="text-white table-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>CI</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th colspan="3"></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->apellido }}</td>
                            <td>{{ $usuario->CI }}</td>
                            <td>{{ $usuario->celular }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td width="10px">
                                <a class="btn btn-dark btn-sm" href="{{ route('admin.expedientes', $usuario->id) }}">Expedientes</a>
                            </td>

                            <td width="10px">
                                <a class="btn btn-dark btn-sm" href="{{ route('admin.usuarios.edit', $usuario->id) }}">Editar</a>

                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.usuarios.destroy', $usuario) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            </td>


                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        <div class="card-footer">
            {{ $usuarios->links() }}
        </div>
    @else
        <div class="card-body">
            <strong>No hay ningun registro</strong>
        </div>
    @endif
</div>
