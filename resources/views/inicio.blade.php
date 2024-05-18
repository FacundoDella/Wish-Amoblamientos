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

<body>

    @include('includes-generales.top')
    @include('includes-generales.navegacion')
    @include('includes-inicio.carrousel')


    <div class="seccion1Fondo">
        <div class="seccion1">
            <div class="seccion1-info">
                <h2>Especialistas en diseño, creación y colocación</h2>
                <p>Contamos con un equipo experto en diseño, creatividad y estrategia de colocación, dedicado a superar
                    las expectativas de nuestros clientes con soluciones innovadoras y personalizadas.</p>
            </div>
            <div class="seccion1-boton">
                <a href="/colaboradores" class="boton btnRed">Colaboradores</a>
            </div>
        </div>
    </div>

    <div class="seccionProductos">
        <div class="productosContenedor">
            <div class="productosInfo">
                <h2>Nuestros Productos</h2>
                <p>¡Podes consultarnos hoy! Respuesta inmediata</p>
            </div>

            <div class="productosGrid">
                <a href="" class="productos producto1">
                    <h3 class="productosTitulo">Cocina</h3>
                    <img class="imagenProductos" src="{{ asset('imagenes/carrousel-3.jpg') }}" alt="Imagen Producto">
                </a>
                <a href="" class="productos producto2">
                    <h3 class="productosTitulo">Sala de Estar</h3>
                    <img class="imagenProductos" src="{{ asset('imagenes/trabajos/salaDeEstar.jpg') }}"
                        alt="Imagen Producto">
                </a>
                <a href="" class="productos producto3">
                    <h3 class="productosTitulo">Comedor</h3>
                    <img class="imagenProductos" src="{{ asset('imagenes/trabajos/comedor.jpg') }}"
                        alt="Imagen Producto">
                </a>
                <a href="" class="productos producto4">
                    <h3 class="productosTitulo">Dormitorio</h3>
                    <img class="imagenProductos" src="{{ asset('imagenes/trabajos/dormitorio.jpg') }}"
                        alt="Imagen Producto">
                </a>
                <a href="" class="productos producto5">
                    <h3 class="productosTitulo">Baño</h3>
                    <img class="imagenProductos" src="{{ asset('imagenes/trabajos/baño.jpg') }}" alt="Imagen Producto">
                </a>
                <a href="" class="productos producto6">
                    <h3 class="productosTitulo">Oficina o Estudio</h3>
                    <img class="imagenProductos" src="{{ asset('imagenes/trabajos/estudio.jpg') }}"
                        alt="Imagen Producto">
                </a>
                <a href="" class="productos producto7">
                    <h3 class="productosTitulo">Exterior</h3>
                    <img class="imagenProductos" src="{{ asset('imagenes/trabajos/exterior.jpg') }}"
                        alt="Imagen Producto">
                </a>
                <a href="" class="productos producto8">
                    <h3 class="productosTitulo">Espacios Multifuncionales</h3>
                    <img class="imagenProductos" src="{{ asset('imagenes/trabajos/multifuncional.jpg') }}"
                        alt="Imagen Producto">
                </a>
                <a href="" class="productos producto9">
                    <h3 class="productosTitulo">Muebles Personalizados</h3>
                    <img class="imagenProductos" src="{{ asset('imagenes/trabajos/perzonalizado.jpg') }}"
                        alt="Imagen Producto">
                </a>
            </div>
        </div>
    </div>
    <div class="contenedor-imagenFija">
        <div class="seccion2">
            <h2>¡Visita nuestro blog!</h2>
            <p>Descubre consejos, guías, materiales y herramientas que utilizamos para inspirarte y ayudarte en tus
                proyectos.</p>
            <a href="" class="boton btnBorder">Nuestro Blog</a>
        </div>
    </div>

    <div class="sobreNosotrosContainer">
        <div class="grid">
            <div class="nosotrosInfo">
                <h2>¿Quienes Somos?</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, quibusdam debitis! Veniam fugiat
                    cumque molestias? Voluptatibus repudiandae sapiente, ullam debitis quis eaque impedit commodi, earum
                    dicta fuga illum quidem dolorem.</p>
            </div>
            <div class="nosotrosImagen">
                <div class="imagenContainer">
                    <img src="{{ asset('imagenes/carrousel-1.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="seccion3">
        <div class="contenedor">
            <div class="informacion">
                <div class="informacionTitulo">
                    <h2>¿Por qué nos eligen?</h2>
                </div>
                <div class="itemsContainer">
                    <div class="items">
                        <h4>Diseño Personalizado</h4>
                        <p>Muebles únicos y a medida.</p>
                    </div>
                    <div class="items">
                        <h4>Calidad Artesanal</h4>
                        <p>Estándares de calidad excepcionales.</p>
                    </div>
                    <div class="items">
                        <h4>Sostenibilidad Ambiental</h4>
                        <p>Materiales sostenibles y ecoamigables.</p>
                    </div>
                    <div class="items">
                        <h4>Experiencia de Cliente Excepcional</h4>
                        <p>Atención dedicada y satisfacción garantizada.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes-generales.footer')
</body>

</html>
