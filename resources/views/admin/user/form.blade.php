{{-- <div class="form-group w-25">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control' , 'placeholder' => 'Nombre del usuario...']) !!}

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group w-25">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'Apellido del usuario...']) !!}

    @error('apellido')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group w-25">
    {!! Form::label('CI', 'CI:') !!}
    {!! Form::text('CI', null, ['class' => 'form-control', 'placeholder' => 'CI del usuario...']) !!}

    @error('CI')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group w-25">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::text('celular', null, ['class' => 'form-control', 'placeholder' => 'Celular del usuario...']) !!}
    @error('celular')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group w-25">
    {!! Form::label('email', 'Correo:') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Correo del usuario...']) !!}

    @error('email')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group w-25">
    {!! Form::label('password', 'Contraseña:') !!}
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Cotraseña del usuario...']) !!}

    @error('password')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<h2 class="h5">Listado de roles</h2>
<div class="form-group">
    @foreach ($roles as $role)
        <div>
            <label>
                {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                {{$role->name}}
            </label>
        </div>
    @endforeach

</div> --}}

<div class="form-row">
    <div class="form-group col-md-6 ">
        {!! Form::label('name', 'Nombre:') !!}
        {!! Form::text('name', null, ['class' => 'form-control' , 'placeholder' => 'Nombre del usuario...']) !!}

        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('apellido', 'Apellido:') !!}
        {!! Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'Apellido del usuario...']) !!}

        @error('apellido')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>


<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('CI', 'CI:') !!}
        {!! Form::text('CI', null, ['class' => 'form-control', 'placeholder' => 'CI del usuario...']) !!}

        @error('CI')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('celular', 'Celular:') !!}
        {!! Form::text('celular', null, ['class' => 'form-control', 'placeholder' => 'Celular del usuario...']) !!}
        @error('celular')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('email', 'Correo:') !!}
        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Correo del usuario...']) !!}

        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('password', 'Contraseña:') !!}
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Cotraseña del usuario...']) !!}

        @error('password')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<h2 class="h5">Listado de roles</h2>
<div class="form-group">
    @foreach ($roles as $role)
        <div>
            <label>
                {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                {{$role->name}}
            </label>
        </div>
    @endforeach

</div>
