@extends('layouts')

@section('content')
    <h1>Lista de cursos</h1>

    @if ($cursos->count())
        <ul class="list-group">
            @foreach ($cursos as $curso)
                <li class="list-group-item">
                   !- <a >{{ $curso->nombre }}</a>
                   <a href="{{ route('cursos.edit', $curso->id) }}" class="btn btn-primary">Editar</a>
                   <form method="POST" action="{{ route('cursos.destroy', $curso->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>No hay cursos disponibles.</p>
    @endif

    <a href="{{ route('cursos.create') }}" class="btn btn-primary">Crear curso</a>
    <form action="{{ route('cursos.index') }}" method="GET">
        <input type="text" name="filtro" placeholder="Buscar...">
        <button type="submit">Buscar</button>
    </form>
    
@endsection
