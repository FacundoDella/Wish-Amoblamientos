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

<body class="colaboradoresBody">
    @include('includes-generales.top')
    @include('includes-generales.navegacion')



    <div class="headerObra">
        <div class="contenedor">
            <div class="presetacionObras">
                <h1>Amueblado de Cocina en MDF Laminado</h1>
            </div>
        </div>
    </div>


    <div class="contenedor">
        <div class="obraWish">
            <div id="carouselExampleIndicators" class="carousel slide carrouselObraWhis">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner carrouselInnerObraWish">
                    <div class=" carrouselItemObraWish carousel-item active ">
                        <img src="{{ asset('imagenes/carrousel-2.jpg') }}" class="d-block w-100 itemActiveButons"
                            alt="...">
                        {{-- Estos Botones van a ser dinamicos despues, van a hacer un foreach y van a leer la info de la base de datos --}}
                        <button class="boton-elegante botonEleganteOculto" style="top: 20%; left: 40%;">
                            <div class="botonElegante"></div>
                        </button>
                        <button class="boton-elegante botonEleganteOculto" style="top: 40%; left: 60%;">
                            <div class="botonElegante"></div>
                        </button>
                        <button class="boton-elegante botonEleganteOculto" style="top: 66%; left: 45%;">
                            <div class="botonElegante"></div>
                        </button>


                    </div>
                    <div class=" carrouselItemObraWish carousel-item">
                        <img src="{{ asset('imagenes/carrousel-3.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class=" carrouselItemObraWish carousel-item">
                        <img src="{{ asset('imagenes/carrousel-1.jpg') }}" class="d-block w-100" alt="...">
                    </div>
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
                    <p class="descripcionObraWish">Esta obra de arte se inspira en la belleza natural de los paisajes
                        montañosos, capturando la serenidad y majestuosidad de las cumbres nevadas. Cada pincelada
                        refleja
                        la calma y la grandeza del entorno, creando una sensación de paz y asombro en el espectador.
                    </p>
                    <p class="detallesObraWish">
                        La pieza se realizó utilizando técnicas mixtas, combinando óleo y acrílico sobre lienzo para
                        lograr
                        texturas únicas y colores vibrantes. La integración de diferentes técnicas aporta profundidad y
                        dinamismo a la obra.
                    </p>
                    <p class="materialesObraWish">Los materiales utilizados en esta obra incluyen pigmentos de alta
                        calidad, lienzos de algodón, y barnices protectores que garantizan la durabilidad y preservación
                        de
                        los colores originales a lo largo del tiempo.</p>
                </div>
                {{-- Informacion variable que va a ser leida de la base de datos, dependiendo de a que boton se le haga click --}}
                <div class="informacionVariable informacionVariableOculto">
                    <p>Los materiales utilizados en esta obra incluyen pigmentos de alta
                        calidad, lienzos de algodón, y barnices protectores que garantizan la durabilidad y preservación
                        de
                        los colores originales a lo largo del tiempo.
                        Los materiales utilizados en esta obra incluyen pigmentos de alta
                        calidad, lienzos de algodón, y barnices protectores que garantizan la durabilidad y preservación
                        de
                        los colores originales a lo largo del tiempo
                    </p>
                </div>
            </div>
        </div>
    </div>


    @include('includes-generales.footer')
</body>
