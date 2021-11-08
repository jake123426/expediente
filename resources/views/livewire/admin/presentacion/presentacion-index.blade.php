<div class="card text-dark bg-light mt-3 mb-3">

    <div class="card-header">
        <input class="form-control" placeholder="Ingrese la descripcion de la actuacion" wire:model="search">
    </div>


    @if ($act->count())

        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="text-white table-dark">
                    <tr>
                        <th>Fecha</th>
                        <th>Descripción</th>
                        <th>Tipo de actuación</th>
                        <th>NroFojas</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($act as $actuacion)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($actuacion->create_at)->format('d/m/Y') }}</td>
                            <td>{{ $actuacion->descripcion }}</td>
                            <td>{{$actuacion->tipo}}</td>
                            <td>{{ $actuacion->NroFojas }}</td>

                            <td width="10px">
                                <a class="btn btn-dark btn-sm"
                                    href="{{ route('admin.mostrar', $actuacion->id) }}">Ver</a>
                                    {{-- <a class="btn btn-primary btn-sm" href="{{ asset('assets/$actuacion->file}') }}">Ver</a> --}}
                            </td>
                            <td width="10px">
                                <a class="btn btn-dark btn-sm"
                                    href="{{ route('admin.download', $actuacion->file) }}">Descargar</a>
                            </td>


                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        <div class="card-footer">
            {{ $act->links() }}
        </div>
    @else
        <div class="card-body">
            <strong>No hay ningun registro</strong>
        </div>
    @endif
</div>
