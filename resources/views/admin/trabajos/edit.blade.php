@extends('layouts.admin')

@section('content')
    <h1>Editar Trabajo</h1>

    <form action="{{ route('trabajos.update', $trabajo->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input id="titulo" type="text" name="titulo" class="form-control" value="{{ $trabajo->titulo }}" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" class="form-control" required>{{ $trabajo->descripcion }}</textarea>
        </div>
        <div class="form-group">
            <label for="detalles">Detalles:</label>
            <textarea id="detalles" name="detalles" class="form-control" required>{{ $trabajo->detalles }}</textarea>
        </div>
        <div class="form-group">
            <label for="materiales">Materiales:</label>
            <textarea id="materiales" name="materiales" class="form-control" required>{{ $trabajo->materiales }}</textarea>
        </div>

        <div class="form-group">
            <label for="seccion_id">Sección:</label>
            <select id="seccion_id" name="seccion_id" class="form-control" required>
                @foreach ($secciones as $seccion)
                    <option value="{{ $seccion->id }}" {{ $trabajo->seccion_id == $seccion->id ? 'selected' : '' }}>
                        {{ $seccion->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="imagenes">Imágenes:</label>
            <input id="imagenes" type="file" name="imagenes[]" class="form-control" multiple>
            <div class="imagenesEditBlade">
                @foreach ($trabajo->imagenes as $imagen)
                    <div class="contenedorImagenBorrable">
                        <img src="{{ asset($imagen->ruta) }}" alt="Imagen del Trabajo" class="imagenEditBlade"
                            data-imagen-id="{{ $imagen->id }}">
                        <label>
                            <input type="checkbox" name="imagenes_a_eliminar[]" value="{{ $imagen->id }}"> Eliminar
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        <button type="submit" class="btn mt-3">Actualizar</button>
    </form>
@endsection
