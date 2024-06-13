<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Registro</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Fuentes  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>

    @include('admin.partials.navbar')

    <main class=" addInputContenedor">
        <h1 class="tituloDelCreadorInputs">Creador de inputs para una imagen</h1>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="imagenesOpcionesGeneral">
            <h2>Selecciona una imagen del trabajo "{{ $trabajo->id }}"</h2>
            <div class="imagenesOpcionesContenedor">
                @foreach ($trabajo->imagenes as $imagen)
                    <div class="contenedorImagenOpcional">
                        <img src="{{ asset($imagen->ruta) }}" alt="Imagen del Trabajo" class="imagenOpciones"
                            data-imagen-id="{{ $imagen->id }}">
                        {{-- @foreach ($imagen->botones as $boton)
                            <button class="boton-elegante"
                                style="position: absolute; left: {{ $boton->posicion_x }}px; top: {{ $boton->posicion_y }}px;">
                                {{ $boton->contenido }}
                            </button>
                        @endforeach --}}
                    </div>
                @endforeach
            </div>
        </div>
        <div class="contenidoVariableContenedor">
            <div class="imagenEditor">
                <div class="contenedorImagen"></div>
            </div>
            <div class="informacionDelBoton"></div>
            <div class="contenidoVariable"></div>
        </div>
        <div class="formularioContenedor">
            <form id="addInputsForm" action="{{ route('botones.store') }}" method="POST">
                @csrf
                <input class="imagen_id" type="hidden" name="imagen_id" value="">
                <input type="hidden" name="contenido" id="contenido">
                <input type="hidden" name="posicion_x" id="posicion_x">
                <input type="hidden" name="posicion_y" id="posicion_y">
                <button id="guardarBotones" type="submit" class="botonMini btn">Guardar Botones</button>
            </form>
        </div>
    </main>
    <script>
        const botonesUrl = '{{ url('admin/botones') }}';
        const csrfToken = '{{ csrf_token() }}';
        const imagenId = '';
    </script>
</body>
