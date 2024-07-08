<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wish Amoblamientos</title>
    <link rel="icon" href="{{ asset('imagenes/logo.ico') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Fuentes  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body class="colaboradoresBody">
    @include('includes-generales.top')
    @include('includes-generales.navegacion')

    <div class="headerObra">
        <div class="contenedor">
            <div class="presetacionObras">
                <h1>{{ $trabajo->titulo }}</h1>
            </div>
        </div>
    </div>

    <div class="contenedor">
        <div class="obraWish">
            <div id="carouselExampleIndicators" class="carousel slide carrouselObraWhis">
                <div class="carousel-indicators">
                    @foreach ($trabajo->imagenes as $index => $imagen)
                        <button type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"
                            aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                            aria-label="Slide {{ $index + 1 }}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner carrouselInnerObraWish">
                    @if ($trabajo->imagenes->isNotEmpty())
                        @foreach ($trabajo->imagenes as $index => $imagen)
                            <div class=" carrouselItemObraWish carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <img src="{{ asset($imagen->ruta) }}" class="d-block w-100 itemActiveButons"
                                    alt="{{ $trabajo->titulo }}">
                                @foreach ($imagen->botones as $boton)
                                    <button class="boton-elegante"
                                        style="position: absolute; left: {{ $boton->posicion_x }}%; top: {{ $boton->posicion_y }}%;"
                                        data-contenido="{{ $boton->contenido }}">
                                    </button>
                                @endforeach
                            </div>
                        @endforeach
                    @else
                        <p>No hay imágenes disponibles para esta obra.</p>
                    @endif
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="informacionObraContenedor">
                <div class="logoEnObra">
                    <h4>Wish Amoblamientos</h4>
                </div>
                @include('includes-generales\separador')
                <div class="informacionObraWish">
                    <p class="descripcionObraWish">{{ $trabajo->descripcion }}</p>
                    <p>{{ $trabajo->detalles }}</p>
                    <p>{{ $trabajo->materiales }}</p>
                </div>
                <div class="informacionVariable informacionVariableOculto">
                    <!-- Aquí se mostrará el contenido dinámico -->
                    <p id="contenido-dinamico"></p>
                </div>
            </div>
        </div>
    </div>

    @include('includes-generales.footer')
</body>
