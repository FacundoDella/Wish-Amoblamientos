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


@include('includes-generales.top')
@include('includes-generales.navegacion')


<body>
    <header class="blogsHeader">
        <h1>Innovaciones en la Carpintería: Tendencias y Tecnologías</h1>
    </header>

    <main class="blog3">
        <div class="contenedor">
            <div class="presentacionBlog3">
                <p>Las innovaciones en la carpintería y la mueblería están transformando la industria, ofreciendo nuevas
                    posibilidades para crear espacios más funcionales, estéticos, sostenibles y conectados. Estas
                    tendencias abren un camino hacia el futuro de la industria, donde la tecnología, la creatividad y la
                    sostenibilidad se unen para crear experiencias únicas para los usuarios.</p>
            </div>
            <section class="blog3Seccion">
                <h2>Diseño Inteligente y Personalizado:</h2>
                <div class="imagenBlog3Contenedor">
                    <img src="{{ asset('imagenes/blog/blog3/diseño3d.jpg') }}" alt="">
                </div>
                <div class="blog3SeccionInfo">
                    <h3>Descripción</h3>
                    <p>La tecnología 3D permite a los diseñadores y carpinteros crear modelos virtuales detallados de
                        muebles, facilitando la visualización del producto final antes de su fabricación. Esto permite
                        realizar ajustes y modificaciones con mayor precisión, reduciendo errores y optimizando el
                        proceso de diseño.</p>
                </div>
            </section>
            <section class="blog3Seccion">
                <h2>Fabricación Digital y Automatizada:</h2>
                <div class="imagenBlog3Contenedor">
                    <img src="{{ asset('imagenes/blog/blog3/CNC.jpg') }}" alt="">
                </div>
                <div class="blog3SeccionInfo">
                    <h3>Descripción</h3>
                    <p>Las máquinas CNC utilizan software para controlar el movimiento de herramientas de corte de alta
                        precisión, automatizando tareas repetitivas y complejas. Esto permite una mayor precisión,
                        eficiencia y rapidez en la fabricación de muebles.</p>
                </div>
            </section>
            <section class="blog3Seccion">
                <h2>Materiales Innovadores y Sostenibles:</h2>
                <div class="imagenBlog3Contenedor">
                    <img src="{{ asset('imagenes/blog/blog3/FSC.jpg') }}" alt="">
                </div>
                <div class="blog3SeccionInfo">
                    <h3>Descripción</h3>
                    <p>La industria de la carpintería está adoptando prácticas más sostenibles, utilizando maderas
                        procedentes de bosques certificados y gestionados de manera responsable. Esto contribuye a la
                        conservación del medio ambiente y reduce el impacto ambiental de la producción de muebles.</p>
                </div>
            </section>
            <section class="blog3Seccion">
                <h2>Nuevos Modelos de Negocio y Producción:</h2>
                <div class="imagenBlog3Contenedor">
                    <img src="{{ asset('imagenes/blog/blog3/muebleEnMovil.jpg') }}" alt="">
                </div>
                <div class="blog3SeccionInfo">
                    <h3>Descripción</h3>
                    <p>La personalización y la producción a la medida están ganando terreno, permitiendo a los clientes
                        crear muebles únicos que se adapten a sus necesidades y gustos específicos.</p>
                </div>
            </section>
            <section class="blog3Seccion">
                <h2>Tecnologías para el Hogar Inteligente:</h2>
                <div class="imagenBlog3Contenedor">
                    <img src="{{ asset('imagenes/blog/blog3/muebleInteligente.jpg') }}" alt="">
                </div>
                <div class="blog3SeccionInfo">
                    <h3>Descripción</h3>
                    <p>Los muebles inteligentes están integrando tecnología que permite controlarlos a través de
                        aplicaciones móviles o comandos de voz. Esto aumenta la comodidad y funcionalidad del
                        mobiliario, adaptándose a las necesidades y preferencias de los usuarios.</p>
                </div>
            </section>

        </div>
    </main>

    @include('includes-generales.footer')
</body>
