

<div class="form-group ">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows'=> 1, 'placeholder' => 'Descripción....']) !!}

    @error('descripcion')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group ">
    {!! Form::label('tipo', 'Tipo de actuacion:') !!}
    {!! Form::textarea('tipo', null, ['class' => 'form-control', 'rows'=> 1, 'placeholder' => 'Tipo....']) !!}

    @error('tipo')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>


    <div class="row mb-3">

        <div class="col">
                {!! Form::label('file', 'Seleccione archivo o imagen') !!}
                {!! Form::file('file', ['class' => 'form-control-file', 'enctype' => 'multipart/form-data']) !!}

                @error('file')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>

    </div>


<div class="form-group">
    {!! Form::label('NroFojas', 'Cantidad de fojas:') !!}
    {!! Form::text('NroFojas', null, ['class' => 'form-control', 'placeholder' => 'Introducir']) !!}

    @error('NroFojas')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
