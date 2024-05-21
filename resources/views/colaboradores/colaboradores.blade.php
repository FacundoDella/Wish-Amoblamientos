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

        <div class="flex">
            <div class="card card1">
                <div class="cardInfo">
                    <h4 class="card-title">Carlos Ramírez</h4>
                    <h5 class="card-Subtitle">Arquitecto</h5>
                </div>
                <div class="hover">
                    <div class="card-body">
                        <p class="card-text">Carlos Ramírez es un arquitecto con más de 15 años de experiencia en diseño
                            urbano
                            y proyectos de infraestructura. Reconocido por su innovación y enfoque sostenible. Carlos es
                            parte
                            de nuestro equipo desde hace más de 7 años, aportando su visión y experiencia en la creación de
                            entornos urbanos eficientes y sostenibles.</p>
                        <div class="btnContenedor">
                            <a href="#" class="botonMini btn">Contacto</a>
                            <a href="/colaboradores/1" class="botonMini btn">Nuestros Trabajos</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card2">
                <div class="cardInfo">
                    <h4 class="card-title">Laura Martínez</h4>
                    <h5 class="card-Subtitle">Diseñadora</h5>
                </div>
                <div class="hover">
                    <div class="card-body">
                        <p class="card-text">Diseñadora de interiores con más de 10 años de experiencia en proyectos
                            residenciales y comerciales. Reconocida por su creatividad y enfoque centrado en el cliente.
                            Laura Martínez es parte de nuestro equipo desde hace más de 5
                            años,
                            contribuyendo con su talento y experiencia en el diseño de interiores.</p>
                        <div class="btnContenedor">
                            <a href="#" class="botonMini btn">Contacto</a>
                            <a href="/colaboradores/1" class="botonMini btn">Nuestros Trabajos</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card3">
                <div class="cardInfo">
                    <h4 class="card-title">David Fernández</h4>
                    <h5 class="card-Subtitle">Consultor de Marketing</h5>
                </div>
                <div class="hover">
                    <div class="card-body">
                        <p class="card-text">David Fernández es un consultor de marketing con más de 8 años de
                            experiencia
                            en
                            estrategias digitales y desarrollo de marca. Conocido por su pensamiento estratégico y
                            enfoque
                            en
                            resultados. David ha sido parte de nuestro equipo durante más de 4 años, aportando su
                            conocimiento y
                            experiencia para impulsar el crecimiento y la presencia digital de nuestros clientes.</p>
                        <div class="btnContenedor">
                            <a href="#" class="botonMini btn">Contacto</a>
                            <a href="/colaboradores/1" class="botonMini btn">Nuestros Trabajos</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card4">
                <div class="cardInfo">
                    <h4 class="card-title">David Fernández</h4>
                    <h5 class="card-Subtitle">Consultor de Marketing</h5>
                </div>
                <div class="hover">
                    <div class="card-body">
                        <p class="card-text">David Fernández es un consultor de marketing con más de 8 años de
                            experiencia
                            en
                            estrategias digitales y desarrollo de marca. Conocido por su pensamiento estratégico y
                            enfoque
                            en
                            resultados. David ha sido parte de nuestro equipo durante más de 4 años, aportando su
                            conocimiento y
                            experiencia para impulsar el crecimiento y la presencia digital de nuestros clientes.</p>
                        <div class="btnContenedor">
                            <a href="#" class="botonMini btn">Contacto</a>
                            <a href="/colaboradores/1" class="botonMini btn">Nuestros Trabajos</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card4">
                <div class="cardInfo">
                    <h4 class="card-title">David Fernández</h4>
                    <h5 class="card-Subtitle">Consultor de Marketing</h5>
                </div>
                <div class="hover">
                    <div class="card-body">
                        <p class="card-text">David Fernández es un consultor de marketing con más de 8 años de
                            experiencia
                            en
                            estrategias digitales y desarrollo de marca. Conocido por su pensamiento estratégico y
                            enfoque
                            en
                            resultados. David ha sido parte de nuestro equipo durante más de 4 años, aportando su
                            conocimiento y
                            experiencia para impulsar el crecimiento y la presencia digital de nuestros clientes.</p>
                        <div class="btnContenedor">
                            <a href="#" class="botonMini btn">Contacto</a>
                            <a href="/colaboradores/1" class="botonMini btn">Nuestros Trabajos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes-generales.footer')
</body>
