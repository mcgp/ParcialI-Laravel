@extends('layouts')

@section('content')
    <h1>Editar curso</h1>

    <form action="{{ route('cursos.update', $curso->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $curso->nombre }}" required>
            @error('nombre')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" required>{{ $curso->descripcion }}</textarea>
        </div>

        <div class="form-group">
            <label for="duracion">Duración</label>
            <input type="number" name="duracion" id="duracion" class="form-control" value="{{ $curso->duracion }}" required>
        </div>

        <div class="form-group">
            <label for="precio">precio</label>
            <input type="number"  name="precio" id="precio" class="form-control" value="{{ $curso->precio }}" required>
        </div>

        <div class="form-group">
            <label for="fecha_inicio">Fecha inicio</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" value="{{ $curso->fecha_inicio }}" required>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
