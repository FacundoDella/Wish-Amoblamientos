@extends('layouts.admin')

@section('content')
    <h1>
        Lista de Trabajos @auth de {{ Auth::user()->name }} @endauth
    </h1>

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
            @foreach ($trabajos as $trabajo)
                <tr>
                    <td>{{ $trabajo->id }}</td>
                    <td>{{ $trabajo->titulo }}</td>
                    <td>{{ Str::limit($trabajo->descripcion, 100) }}</td>
                    <td>{{ $trabajo->seccion->nombre }}</td>
                    <td>
                        <a href="{{ route('trabajos.edit', $trabajo->id) }}" class="btn btnMQAdmin">Editar</a>
                        <form action="{{ route('trabajos.destroy', $trabajo->id) }}" method="POST"
                            style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btnMQAdmin">Eliminar</button>
                        </form>
                        <a href="{{ route('addInputs', $trabajo->id) }}" class="btn btnMQAdmin">Inputs</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
@endsection
