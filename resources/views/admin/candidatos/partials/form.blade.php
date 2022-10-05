<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del nombre ...']) !!}

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese el Slug del animal ...',
        'readonly',
    ]) !!}

    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('description', 'Descripción:') !!}
    {!! Form::textarea('description', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese una descripción del animal ...',
    ]) !!}

    @error('description')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('foto', 'Foto:') !!}
    {!! Form::file('foto', [
        'class' => 'form-control',
    ]) !!}

    @error('foto')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('edad', 'Edad:') !!}
    {!! Form::number('edad', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingresa la edad del animal en meses ...',
    ]) !!}

    @error('edad')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('categoria_id', 'Categoria:') !!}
    {!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control']) !!}

    @error('categoria_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('genero_id', 'Genero:') !!}
    {!! Form::select('genero_id', $generos, null, ['class' => 'form-control']) !!}

    @error('genero_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('raza_id', 'Raza:') !!}
    {!! Form::select('raza_id', $razas, null, ['class' => 'form-control']) !!}

    @error('raza_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('tamaño_id', 'Tamaño:') !!}
    {!! Form::select('tamaño_id', $tamaños, null, ['class' => 'form-control']) !!}

    @error('tamaño_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>


