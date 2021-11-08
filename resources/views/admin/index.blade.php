@extends('adminlte::page')

@section('title', 'Actuacion')

@section('content_header')
    @can('admin.create')
    <a class="btn btn-dark  btn-lg float-right border border-secondary " href="{{route('admin.create', $ExpId)}}">Agregar Actuacion</a>
    @endcan
    <h1>Listado de Actuaciones</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
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
