@extends('layouts')

@section('content')
    <h1>Crear curso</h1>

    <form action="{{ route('cursos.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}" required>
            @error('nombre')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" required></textarea>
            @error('descripcion')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="duracion">Duración</label>
            <input type="number" name="duracion" id="duracion" class="form-control" value="{{ old('duracion') }}" required>
            @error('duracion')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="precio">precio</label>
            <input type="number" step="0.01" name="precio" id="precio" class="form-control" value="{{ old('precio') }}" required>
            @error('precio')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="fecha_inicio">Fecha inicio</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" value="{{ old('fecha_inicio') }}" required>
            @error('fecha_inicio')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection
