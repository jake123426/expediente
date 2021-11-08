<div class="card text-dark bg-light mt-3 mb-3">

    <div class="car-header">
        <form action="{{ route('admin.agregar', $usuario) }}" method="POST" >
            @csrf
            <div class="form-group m-4">
                <input type="text" class="form-control w-25" placeholder="Nro Exprediente" name="NroExpediente">
                <button class="btn btn-dark btn-lg mt-2" type="submit">Agregar</button>
            </div>

        </form>
    </div>



    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead class="text-white table-dark">
                <tr>
                    <th>Nro.</th>
                    <th>Fecha de Ingreso</th>
                    <th>Proceso</th>
                    <th>Tribunal</th>
                    {{-- <th colspan="2"></th> --}}
                </tr>
            </thead>
            <tbody>

                @foreach ($exp as $expediente)
                    <tr>
                        <td>{{ $expediente->NroExpediente }}</td>
                        <td>{{ \Carbon\Carbon::parse($expediente->create_at)->format('d/m/Y') }}</td>
                        <td>{{ $expediente->proceso }}</td>
                        <td>{{ $expediente->tribunal }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>
