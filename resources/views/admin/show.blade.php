@extends('adminlte::page')

@section('title', 'Actuacion')

@section('content_header')
    {{-- <a class="btn btn-warning  btn-lg float-right border border-secondary " href="#">Agregar Actuacion</a> --}}
    <h1>Detalle de Actuación</h1>
@stop

@section('content')
    {{-- @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif --}}
    @livewire('admin.presentacion.presentacion-index', ['ExpId' => $ExpId])

@stop




@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
