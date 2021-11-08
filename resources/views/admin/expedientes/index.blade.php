@extends('adminlte::page')

@section('title', 'Expedientes')

@section('content_header')
<a class="btn btn-dark  btn-lg float-right border border-secondary " href="{{route('admin.usuarios.index')}}">Volver</a>
    <h1>Listado de expedientes</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
        @livewire('admin.expediente.index', ['expedientes' => $expedientes, 'usuario' => $usuario])

@stop




@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
