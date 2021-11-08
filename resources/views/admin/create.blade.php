@extends('adminlte::page')

@section('title', 'Expediente')

@section('content_header')
<h1>Registrar Nueva Actuación</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">

        {!! Form::open(['route' => 'admin.store', 'autocomplete' => 'off', 'files' => true]) !!}
         {!! Form::hidden('expediente_id', $id) !!}

        @include('admin.partials.form')

        {!! Form::submit('Finalizar', ['class' => 'btn btn-dark']) !!}

        {!! Form::close() !!}
        <a class="btn btn-dark  btn-lg float-right " href=" {{ route('admin.home', $id) }}">Volver</a>
    </div>
</div>
@stop


@section('css')
<style>
    .image-wrapper {
        position: relative;
        padding-bottom: 250px;
    }

    .image-wrapper img {
        position: absolute;
        object-fit: cover;
        width: 500px;
        height: 250px;
    }

</style>
@stop

@section('js')

<script>
    //Cambiar Imagen
    document.getElementById("file").addEventListener('change', cambiarImagen);

    function cambiarImagen(event) {
        var file = event.target.files[0];

        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("picture").setAttribute('src', event.target.result);
        };
        reader.readAsDataURL(file);
    }
</script>
@endsection
