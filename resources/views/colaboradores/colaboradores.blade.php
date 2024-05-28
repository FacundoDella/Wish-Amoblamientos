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
                    <img class="imagenCard" src="{{asset('/imagenes/colaboradores/arquitectoEjemplo.jpg')}}" alt="">
                    <div class="cardInfo">
                        <h4 class="cardTitle">Carlos Ramírez</h4>
                        <h5 class="cardSubtitle">Arquitecto</h5>
                    </div>
                </div>
                <div class="cardBody">
                    <p class="cardText">Carlos Ramírez es un arquitecto con más de 15 años de experiencia en diseño
                        urbano y proyectos de infraestructura. Reconocido por su innovación y enfoque sostenible. Carlos es
                        parte de nuestro equipo desde hace más de 7 años, aportando su visión y experiencia en la creación de
                        entornos urbanos eficientes y sostenibles.</p>
                    <div class="btnContenedor">
                        <a href="#" class="botonMini btn">Contacto</a>
                        <a href="/colaboradores/1" class="botonMini btn">Nuestros Trabajos</a>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="cardHeader">
                    <img class="imagenCard" src="{{asset('/imagenes/colaboradores/ingenieraEjemplo.jpg')}}" alt="">
                    <div class="cardInfo">
                        <h4 class="cardTitle">Ana López</h4>
                        <h5 class="cardSubtitle">Ingeniera Civil</h5>
                    </div>
                </div>
                <div class="cardBody">
                    <p class="cardText">Ana López es una ingeniera civil con más de 10 años de experiencia en la gestión de
                        proyectos de construcción. Destacada por su capacidad de liderazgo y su enfoque en la seguridad y
                        eficiencia. Ana ha sido una pieza clave en la finalización exitosa de varios proyectos de gran escala.</p>
                    <div class="btnContenedor">
                        <a href="#" class="botonMini btn">Contacto</a>
                        <a href="/colaboradores/2" class="botonMini btn">Nuestros Trabajos</a>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="cardHeader">
                    <img class="imagenCard" src="{{asset('/imagenes/colaboradores/diseñadoraEjemplo.jpg')}}" alt="">
                    <div class="cardInfo">
                        <h4 class="cardTitle">Luciana Morales</h4>
                        <h5 class="cardSubtitle">Diseñadora Industrial</h5>
                    </div>
                </div>
                <div class="cardBody">
                    <p class="cardText">Luciana Morales es una diseñadora industrial con un enfoque en la creación de productos funcionales y estéticamente atractivos. Con más de 8 años de experiencia, ha trabajado en una variedad de proyectos, desde mobiliario urbano hasta electrodomésticos innovadores.</p>
                    <div class="btnContenedor">
                        <a href="#" class="botonMini btn">Contacto</a>
                        <a href="/colaboradores/3" class="botonMini btn">Nuestros Trabajos</a>
                    </div>
                </div>
            </div>
            
            
            <div class="card">
                <div class="cardHeader">
                    <img class="imagenCard" src="{{asset('/imagenes/colaboradores/arquitectoEjemplo.jpg')}}" alt="">
                    <div class="cardInfo">
                        <h4 class="cardTitle">María González</h4>
                        <h5 class="cardSubtitle">Urbanista</h5>
                    </div>
                </div>
                <div class="cardBody">
                    <p class="cardText">María González es una urbanista con un enfoque en el desarrollo sostenible y la
                        planificación comunitaria. Con 12 años de experiencia, ha contribuido a la creación de espacios públicos
                        que promueven la cohesión social y el bienestar ambiental.</p>
                    <div class="btnContenedor">
                        <a href="#" class="botonMini btn">Contacto</a>
                        <a href="/colaboradores/4" class="botonMini btn">Nuestros Trabajos</a>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
    </div>

    @include('includes-generales.footer')
</body>
