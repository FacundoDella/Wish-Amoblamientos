@extends('layouts.admin')

@section('content')
    <h1>Lista de Trabajos</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('trabajos.create') }}" class="btn">Crear Trabajo</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Sección</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trabajos as $trabajo)
                <tr>
                    <td>{{ $trabajo->id }}</td>
                    <td>{{ $trabajo->titulo }}</td>
                    <td>{{ $trabajo->descripcion }}</td>
                    <td>{{ $trabajo->seccion->nombre }}</td>
                    <td>
                        <a href="{{ route('trabajos.edit', $trabajo->id) }}" class="btn">Editar</a>
                        <form action="{{ route('trabajos.destroy', $trabajo->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
