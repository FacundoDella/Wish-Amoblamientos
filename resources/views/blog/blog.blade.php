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
    <header class="blogHeader">
        <div class="contenedor">
            <div class="blogHeaderInfo">
                <h1>Nuestro Blog</h1>
                <p>Descubre consejos, tendencias e ideas para crear muebles únicos y de calidad. Únete a nuestra
                    comunidad y
                    transforma tus espacios con nuestro contenido especializado.</p>
            </div>
        </div>
    </header>
    <main class="contenedor">
        <div class="blogGrid">
            <div class="blog1 blog">
                <img src="{{ asset('imagenes/blog/blog1.jpg') }}" alt="">
                <div class="infoBlog">
                    <h3>Los Mejores Materiales para Muebles de Calidad</h3>
                    <p>Descubre cuáles son los materiales más resistentes y estéticos para la fabricación de muebles
                        duraderos y elegantes.</p>
                    <a href="/blog/blog1"class="botonMini btn">Ver</a>
                </div>
            </div>
            <div class="blog2 blog">
                <img src="{{ asset('imagenes/blog/blog2.jpg') }}" alt="">
                <div class="infoBlog">
                    <h3>Consejos para el Cuidado y Mantenimiento de Muebles de Madera</h3>
                    <p>Aprende las mejores prácticas para mantener tus muebles de madera en perfectas condiciones por
                        más tiempo.</p>
                    <a href="/blog/blog2"class="botonMini btn">Ver</a>
                </div>
            </div>
            <div class="blog3 blog m0">
                <img src="{{ asset('imagenes/blog/blog3.jpg') }}" alt="">
                <div class="infoBlog">
                    <h3>Innovaciones en la Carpintería: Tendencias y Tecnologías</h3>
                    <p>Explora las últimas tendencias y tecnologías que están revolucionando el mundo de la carpintería
                        y la mueblería.</p>
                    <a href="/blog/blog3"class="botonMini btn">Ver</a>
                </div>
            </div>
            <div class="blog4 blog">
                <img src="{{ asset('imagenes/blog/blog4.jpg') }}" alt="">
                <div class="infoBlog">
                    <h3>Cómo Elegir el Diseño Perfecto para tu Mobiliario</h3>
                    <p>Encuentra el diseño ideal para tus muebles y crea espacios armoniosos y funcionales en tu hogar.
                    </p>
                    <a href="/blog/blog4"class="botonMini btn">Ver</a>
                </div>
            </div>

            <div class="blog5 blog">
                <img src="{{ asset('imagenes/blog/blog5.jpg') }}" alt="">
                <div class="infoBlog">
                    <h3>La Importancia del Trabajo Artesanal en la Mueblería</h3>
                    <p>Conoce el valor y la calidad que el trabajo artesanal aporta a los muebles y cómo se diferencia
                        de la producción en masa.</p>
                    <a href="/blog/blog5"class="botonMini btn">Ver</a>
                </div>
            </div>
            <div class="blog6 blog">
                <img src="{{ asset('imagenes/blog/blog6.jpg') }}" alt="">
                <div class="infoBlog">
                    <h3>Muebles Personalizados: La Clave para un Hogar Único</h3>
                    <p>Descubre cómo los muebles personalizados pueden transformar tu hogar y reflejar tu estilo único.
                    </p>
                    <a href="/blog/blog6"class="botonMini btn">Ver</a>
                </div>
            </div>
        </div>
    </main>
    @include('includes-generales.footer')
</body>

