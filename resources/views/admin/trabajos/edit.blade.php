@extends('layouts.admin')

@section('content')
    <h1>Editar Trabajo</h1>

    <form action="{{ route('trabajos.update', $trabajo->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" class="form-control" value="{{ $trabajo->titulo }}" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control" required>{{ $trabajo->descripcion }}</textarea>
        </div>
        <div class="form-group">
            <label for="detalles">Detalles:</label>
            <textarea name="detalles" class="form-control" required>{{ $trabajo->detalles }}</textarea>
        </div>
        <div class="form-group">
            <label for="materiales">Materiales:</label>
            <textarea name="materiales" class="form-control" required>{{ $trabajo->materiales }}</textarea>
        </div>

        <div class="form-group">
            <label for="seccion_id">Sección:</label>
            <select name="seccion_id" class="form-control" required>
                @foreach($secciones as $seccion)
                    <option value="{{ $seccion->id }}" {{ $trabajo->seccion_id == $seccion->id ? 'selected' : '' }}>{{ $seccion->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="imagenes">Imágenes:</label>
            <input type="file" name="imagenes[]" class="form-control" multiple>
        </div>

        <button type="submit" class="btn mt-3">Actualizar</button>
    </form>
@endsection
