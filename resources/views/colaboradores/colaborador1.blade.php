<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Fuentes  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>


@include('includes-generales.top')
@include('includes-generales.navegacion')


<div class="colaboradorHeader">
    <h1>Obras realizadas con Colaborador1</h1>
</div>


<div class="contenedor">
    <div class="obras">
        @include('includes-generales.separador')
        <div class="obra">
            <div class="obraInfo">
                <h2>Muebles de Cocina</h2>
                <p>En nuestro reciente proyecto de restauración, transformamos completamente una cocina, creando muebles
                    a medida que combinan funcionalidad y estilo. Cada pieza fue diseñada con atención al detalle,
                    utilizando materiales de alta calidad para asegurar durabilidad y estética. Desde gabinetes
                    espaciosos y modernos hasta elegantes estanterías y prácticos organizadores, hemos logrado un
                    espacio armonioso y acogedor que cumple con las necesidades diarias y realza la belleza del hogar.
                    Nuestro objetivo fue no solo renovar la cocina, sino también mejorar la experiencia culinaria y de
                    convivencia en este importante espacio del hogar.</p>
            </div>
            <div class="obraImagenes">
                <div class="antes">
                    <h3>Antes</h3>
                    <div id="carouselExampleFade1" class="carousel slide carousel-fade carrouselComparacion">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('imagenes/carrousel-1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('imagenes/carrousel-2.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('imagenes/carrousel-3.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade1"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade1"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="despues">
                    <h3>Después</h3>
                    <div id="carouselExampleFade2" class="carousel slide carousel-fade carrouselComparacion">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('imagenes/carrousel-3.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('imagenes/carrousel-2.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('imagenes/carrousel-1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade2"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade2"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
        @include('includes-generales.separador')
        <div class="obra">
            <div class="obraInfo">
                <h2>Mueble para TV Personalizado</h2>
                <p>En nuestro último proyecto de diseño, nos embarcamos en la creación de un mueble para TV a medida,
                    fusionando funcionalidad y estilo en una única pieza. Cada detalle fue meticulosamente concebido,
                    utilizando los más finos materiales para garantizar tanto su durabilidad como su elegancia. Desde el
                    diseño de los compartimentos espaciosos para dispositivos electrónicos hasta la incorporación de
                    estantes elegantes y organizadores ocultos, nuestro enfoque fue crear un mueble que no solo
                    complemente la decoración existente, sino que también eleve la experiencia de entretenimiento en el
                    hogar.
                    <br>
                </p>
            </div>
            <div class="obraImagenes">
                <div class="fijo">
                    <h3>Imagenes</h3>
                    <div id="carouselExampleFade3" class="carousel slide carousel-fade carrouselComparacionFijo">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('imagenes/carrousel-1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('imagenes/carrousel-2.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('imagenes/carrousel-3.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade3"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade3"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
        @include('includes-generales.separador')
    </div>
</div>

@include('includes-generales.footer')
