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


<body>
    <header class="blogsHeader">
        <h1>La Importancia del Trabajo Artesanal en la Mueblería</h1>
    </header>

    <main class="blog3">
        <div class="contenedor">
            <div class="presentacionBlog3">
                <p>En un mundo dominado por la producción en masa y la estandarización, el trabajo artesanal en la
                    mueblería se erige como un refugio de calidad, exclusividad y valor. A diferencia de los muebles
                    producidos en serie, que buscan la eficiencia y el bajo costo a expensas de la calidad y la atención
                    al detalle, los muebles artesanales son obras de arte creadas con pasión, dedicación y un profundo
                    conocimiento de las técnicas tradicionales.</p>
            </div>
            <section class="blog3Seccion">
                <h2>Un Legado de Habilidades Tradicionales:</h2>
                <div class="imagenBlog3Contenedor">
                    <img src="{{ asset('imagenes/blog/blog4/tradicional.jpg') }}" alt="">
                </div>
                <div class="blog3SeccionInfo">
                    <h3>Descripción</h3>
                    <p>La elaboración artesanal de muebles se basa en la transmisión de conocimientos y técnicas
                        heredadas de generación en generación. Los artesanos dominan el manejo de herramientas manuales
                        y eléctricas, así como las propiedades de diferentes maderas y materiales. Cada pieza es
                        trabajada a mano, cuidando cada detalle y asegurando la más alta calidad en el acabado final.
                    </p>
                </div>
            </section>
            <section class="blog3Seccion">
                <h2>Exclusividad y Personalización:</h2>
                <div class="imagenBlog3Contenedor">
                    <img src="{{ asset('imagenes/blog/blog4/unico.jpg') }}" alt="">
                </div>
                <div class="blog3SeccionInfo">
                    <h3>Descripción</h3>
                    <p>A diferencia de los muebles producidos en masa, que son idénticos entre sí, cada pieza artesanal
                        es única e irrepetible. Los artesanos trabajan en estrecha colaboración con los clientes para
                        comprender sus necesidades, gustos y preferencias, creando muebles que se adaptan perfectamente
                        a su estilo de vida y a la estética de su hogar.</p>
                </div>
            </section>
            <section class="blog3Seccion">
                <h2>Durabilidad y Valor a Largo Plazo:</h2>
                <div class="imagenBlog3Contenedor">
                    <img src="{{ asset('imagenes/blog/blog4/durabilidad.jpg') }}" alt="">
                </div>
                <div class="blog3SeccionInfo">
                    <h3>Descripción</h3>
                    <p>Los muebles artesanales están hechos con materiales de alta calidad y técnicas de construcción
                        robustas, lo que garantiza su durabilidad y resistencia al paso del tiempo. A diferencia de los
                        muebles producidos en masa, que suelen tener una vida útil corta y requieren reemplazos
                        frecuentes, los muebles artesanales pueden durar generaciones, convirtiéndose en piezas valiosas
                        y apreciadas por la familia.</p>
                </div>
            </section>
            <section class="blog3Seccion">
                <h2>Un Enfoque Sostenible y Responsable:</h2>
                <div class="imagenBlog3Contenedor">
                    <img src="{{ asset('imagenes/blog/blog4/sustentable.jpg') }}" alt="">
                </div>
                <div class="blog3SeccionInfo">
                    <h3>Descripción</h3>
                    <p>Muchos artesanos de la mueblería se comprometen con la sostenibilidad y la responsabilidad
                        ambiental. Utilizan maderas procedentes de bosques certificados, reducen al mínimo el
                        desperdicio de materiales y aplican técnicas de producción que minimizan el impacto ambiental.
                        Al elegir muebles artesanales, estás contribuyendo a un futuro más sostenible y a la
                        preservación de los recursos naturales.</p>
                </div>
            </section>
            <section class="blog3Seccion">
                <h2>Un Apoyo a la Economía Local y al Patrimonio Cultural:</h2>
                <div class="imagenBlog3Contenedor">
                    <img src="{{ asset('imagenes/blog/blog4/artesano.jpg') }}" alt="">
                </div>
                <div class="blog3SeccionInfo">
                    <h3>Descripción</h3>
                    <p>Al comprar muebles artesanales, estás apoyando directamente a pequeños artesanos locales y
                        contribuyes a la revitalización de la economía local. Además, estás preservando el patrimonio
                        cultural y las tradiciones de tu comunidad, ya que la elaboración artesanal de muebles forma
                        parte de la identidad y la historia de muchos pueblos y regiones.</p>
                </div>
            </section>

        </div>
    </main>

    @include('includes-generales.footer')
</body>
