@extends('layouts.admin')

@section('content')
    <h1>Crear Trabajo</h1>

    <form action="{{ route('trabajos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="detalles">Detalles:</label>
            <textarea name="detalles" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="materiales">Materiales:</label>
            <textarea name="materiales" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="seccion_id">Sección:</label>
            <select name="seccion_id" class="form-control" required>
                @foreach($secciones as $seccion)
                    <option value="{{ $seccion->id }}">{{ $seccion->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="imagenes">Imágenes:</label>
            <input type="file" name="imagenes[]" class="form-control" multiple>
        </div>

        <button type="submit" class="btn mt-3">Guardar</button>
    </form>
@endsection
