@extends('adminlte::page')

@section('title', 'Usuario')

@section('content_header')
    <a class="btn btn-dark  btn-lg float-right border border-secondary " href="{{route('admin.usuarios.create')}}">Agregar Usuario</a>
    <h1>Listado de Usuarios</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    @livewire('admin.user.usuario')

@stop




@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
