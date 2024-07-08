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

    <div class="colaboradoresHeader">
        <div class="contenedor">
            <div class="presetacion">
                <h1>Colaboradores</h1>
                <p>En nuestra empresa, contamos con un equipo excepcional de profesionales dedicados y talentosos que
                    aportan su experiencia y creatividad en cada proyecto. Nuestra misión es ofrecer soluciones
                    innovadoras
                    y personalizadas que superen las expectativas de nuestros clientes. Permítenos presentarte a algunos
                    de
                    nuestros destacados colaboradores:</p>

            </div>
        </div>
    </div>


    <div class="contenedor">
        <div class="cardGrid">

            <div class="card">
                <div class="cardHeader">
                    <img class="imagenCard" src="{{ asset('/imagenes/colaboradores/diseñadoraLorena.jpg') }}"
                        alt="">
                    <div class="cardInfo">
                        <h4 class="cardTitle">Ianni Lorena Interiorismo</h4>
                        <h5 class="cardSubtitle">Diseñadora</h5>
                    </div>
                </div>
                <div class="cardBody">
                    <p class="cardText">Ianni Lorena Interiorismo es una diseñadora destacada por su habilidad para
                        crear espacios únicos y personalizados, reflejando la esencia y personalidad de sus clientes con
                        innovación y estilo. Wish Amoblamientos confía plenamente en el trabajo de Ianni Lorena
                        Interiorismo, asegurando resultados excepcionales y una experiencia de diseño incomparable.</p>
                    <div class="btnContenedor">
                        <a href="https://www.instagram.com/iannilorenainteriorismo" class="botonMini btn">Contacto</a>
                        <a href="/colaboradores/1" class="botonMini btn">Nuestros Trabajos</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="cardHeader">
                    <img class="imagenCard" src="{{ asset('/imagenes/colaboradores/arquitectaMariana.jpg') }}"
                        alt="">
                    <div class="cardInfo">
                        <h4 class="cardTitle">Mariana Gentilini</h4>
                        <h5 class="cardSubtitle">Arquitectura y Diseño</h5>
                    </div>
                </div>
                <div class="cardBody">
                    <p class="cardText">Mariana Gentilini es una arquitecta diseñadora destacada por su habilidad para crear espacios únicos y personalizados, reflejando la esencia y personalidad de sus clientes con innovación y estilo.Wish Amoblamientos confía plenamente en el trabajo de Mariana Gentilini, asegurando resultados excepcionales y una experiencia de diseño incomparable.</p>
                    <div class="btnContenedor">
                        <a href="https://www.instagram.com/danussigentilini.arq/" class="botonMini btn">Contacto</a>
                        <a href="/colaboradores/1" class="botonMini btn">Nuestros Trabajos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    @include('includes-generales.footer')
</body>
