@extends('adminlte::page')

@section('title', 'Usuario')

@section('content_header')

    <h1>Listado de acciones</h1>
@stop

@section('content')
<div class="card text-dark bg-light mt-3 mb-3">

        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="text-white table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Tipo</th>
                        <th>Descripcion</th>
                        <th>Usuario causante</th>
                        <th>Fecha</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($actividades as $actividad)
                        <tr>
                            <td>{{ $actividad->id }}</td>
                            <td>{{ $actividad->log_name }}</td>
                            @if($actividad->description == 'Usuario accedio al sistema')
                                <td>{{ $actividad->description }}</td>
                            @else
                                <td>{{ $actividad->description }} - Nro. {{$actividad->subject_id}}</td>
                            @endif

                            <td>Id. {{ $actividad->causer_id }}</td>
                            <td>{{ \Carbon\Carbon::parse($actividad->created_at)->format('d-m-Y | H:m:s') }}</td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

</div>

@stop




@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
