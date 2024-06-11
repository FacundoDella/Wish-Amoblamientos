@extends('layouts.admin')

@section('content')
    <h1>Crear Trabajo</h1>

    <form action="{{ route('trabajos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" class="form-control" required></textarea>
        </div>
        
        <div class="form-group">
            <label for="detalles">Detalles:</label>
            <textarea id="detalles" name="detalles" class="form-control" required></textarea>
        </div>
        
        <div class="form-group">
            <label for="materiales">Materiales:</label>
            <textarea id="materiales" name="materiales" class="form-control" required></textarea>
        </div>
        
        <div class="form-group">
            <label for="seccion_id">Sección:</label>
            <select id="seccion_id" name="seccion_id" class="form-control" required>
                @foreach($secciones as $seccion)
                    <option value="{{ $seccion->id }}">{{ $seccion->nombre }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="imagenes">Imágenes:</label>
            <input type="file" id="imagenes" name="imagenes[]" class="form-control" multiple required>
        </div>
        
        <button type="submit" class="btn mt-3">Guardar</button>
        
    </form>
@endsection
