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
        <h1>Muebles Personalizados: La Clave para un Hogar Único</h1>
    </header>

    <main class="blog3">
        <div class="contenedor">
            <div class="presentacionBlog3">
                <p>Despierta tu creatividad y transforma tu hogar en un espacio que te refleje al 100%. Los muebles personalizados son la clave para crear ambientes únicos y llenos de personalidad, donde cada pieza cuenta una historia y aporta un toque especial a tu decoración.</p>
            </div>

            <section class="blog3Seccion">
                <h2>Dale vida a tus ideas:</h2>
                <div class="imagenBlog3Contenedor">
                    <img src="{{ asset('imagenes/blog/blog6/ideasPersonalizadas.jpg') }}" alt="">
                </div>
                <div class="blog3SeccionInfo">
                    <h3>Descripción</h3>
                    <p>¿Sueñas con un mueble que se adapte perfectamente a ese rincón especial? Con los muebles personalizados, tus ideas cobran vida. Describe tu visión al carpintero o diseñador, y ellos te ayudarán a crear la pieza perfecta para tu hogar.
                    </p>
                </div>
            </section>

            <section class="blog3Seccion">
                <h2>Un espacio que te define:</h2>
                <div class="imagenBlog3Contenedor">
                    <img src="{{ asset('imagenes/blog/blog6/espacio.jpg') }}" alt="">
                </div>
                <div class="blog3SeccionInfo">
                    <h3>Descripción</h3>
                    <p>Olvídate de los muebles genéricos que encuentras en todas partes. Los muebles personalizados te permiten expresar tu estilo único y crear un espacio que te define. Elige colores, materiales, formas y acabados que combinen con tu personalidad y creen un ambiente armonioso.</p>
                </div>
            </section>

            <section class="blog3Seccion">
                <h2> Aprovecha al máximo cada espacio:</h2>
                <div class="imagenBlog3Contenedor">
                    <img src="{{ asset('imagenes/blog/blog6/extraño.jpg') }}" alt="">
                </div>
                <div class="blog3SeccionInfo">
                    <h3>Descripción</h3>
                    <p>¿Tienes un espacio extraño o difícil de amueblar? Los muebles personalizados son la solución ideal. Se adaptan a cualquier rincón, por pequeño o irregular que sea, maximizando el espacio disponible y creando un ambiente funcional y acogedor.</p>
                </div>
            </section>

            <section class="blog3Seccion">
                <h2>Materiales de la más alta calidad:</h2>
                <div class="imagenBlog3Contenedor">
                    <img src="{{ asset('imagenes/blog/blog6/altaCalidad.jpg') }}" alt="">
                </div>
                <div class="blog3SeccionInfo">
                    <h3>Descripción</h3>
                    <p>En la elaboración de muebles personalizados se utilizan materiales de la más alta calidad, cuidadosamente seleccionados para garantizar su durabilidad y belleza atemporal. Madera maciza, telas finas, herrajes resistentes... cada detalle está cuidado para crear piezas únicas y duraderas.</p>
                </div>
            </section>

            <section class="blog3Seccion">
                <h2> Un proceso colaborativo:</h2>
                <div class="imagenBlog3Contenedor">
                    <img src="{{ asset('imagenes/blog/blog6/colaborativo.jpg') }}" alt="">
                </div>
                <div class="blog3SeccionInfo">
                    <h3>Descripción</h3>
                    <p>La creación de muebles personalizados es un proceso colaborativo en el que tú eres el protagonista. Trabaja en conjunto con el carpintero o diseñador para dar forma a tus ideas, asegurándote de que el resultado final sea exactamente lo que estabas buscando.</p>
                </div>
            </section>

            <section class="blog3Seccion">
                <h2>Una inversión a largo plazo:</h2>
                <div class="imagenBlog3Contenedor">
                    <img src="{{ asset('imagenes/blog/blog6/durabilidad.jpg') }}" alt="">
                </div>
                <div class="blog3SeccionInfo">
                    <h3>Descripción</h3>
                    <p>Los muebles personalizados son una inversión a largo plazo que te acompañará durante años. Su calidad superior y diseño atemporal los convierten en piezas duraderas que no pasan de moda, valorizándose con el tiempo.</p>
                </div>
            </section>

            <section class="blog3Seccion">
                <h2>Un toque de exclusividad:</h2>
                <div class="imagenBlog3Contenedor">
                    <img src="{{ asset('imagenes/blog/blog6/exclusivo.jpg') }}" alt="">
                </div>
                <div class="blog3SeccionInfo">
                    <h3>Descripción</h3>
                    <p>Olvídate de los muebles repetitivos que encuentras en todas partes. Los muebles personalizados son piezas únicas y exclusivas que no encontrarás en ninguna tienda. Serán el centro de atención de tu hogar y reflejarán tu buen gusto y tu capacidad para apreciar el trabajo artesanal.</p>
                </div>
            </section>
        </div>
    </main>

    @include('includes-generales.footer')
</body>
