@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
<h1>Agregar Usuario</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{ session('info') }}</strong>
    </div>
@endif

<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.usuarios.store', 'autocomplete' => 'off', 'method' => 'POST']) !!}

        @include('admin.user.form')

        {!! Form::submit('Finalizar', ['class' => 'btn btn-dark']) !!}

        {!! Form::close() !!}
        <a class="btn btn-dark  btn-lg float-right " href=" {{ route('admin.usuarios.index') }}">Volver</a>
    </div>
</div>
@stop
