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

    <div class="seccion1">
        <div class="seccion1-info">
            <h2>Especialistas en diseño, creación y colocación</h2>
            <p>Somos una empresa con más de 20 años de experiencia en la entrega de productos de calidad.</p>
        </div>
        <div class="seccion1-boton">
            <a href="" class="info-boton">Nuestros Asociados</a>
        </div>
    </div>

    <div class="seccionProductos">
        <div class="productosContenedor">
            <div class="productosInfo">
                <h2>Nuestros Productos</h2>
                <p>¡Podes consultarnos hoy! Respuesta inmediata</p>
            </div>

            <div class="productosGrid">
                <a href="" class="productos">
                    <h3 class="productosTitulo">Cocina</h3>
                    <img class="imagenProductos" src="{{ asset('imagenes/carrousel-3.jpg') }}" alt="Imagen Producto">
                </a>
                <a href="" class="productos">
                    <h3 class="productosTitulo">Sala de Estar</h3>
                    <img class="imagenProductos" src="{{ asset('imagenes/carrousel-3.jpg') }}" alt="Imagen Producto">
                </a>
                <a href="" class="productos">
                    <h3 class="productosTitulo">Comedor</h3>
                    <img class="imagenProductos" src="{{ asset('imagenes/carrousel-3.jpg') }}" alt="Imagen Producto">
                </a>
                <a href="" class="productos">
                    <h3 class="productosTitulo">Dormitorios</h3>
                    <img class="imagenProductos" src="{{ asset('imagenes/carrousel-3.jpg') }}" alt="Imagen Producto">
                </a>
                <a href="" class="productos">
                    <h3 class="productosTitulo">Baño</h3>
                    <img class="imagenProductos" src="{{ asset('imagenes/carrousel-3.jpg') }}" alt="Imagen Producto">
                </a>
                <a href="" class="productos">
                    <h3 class="productosTitulo">Oficina o Estudio</h3>
                    <img class="imagenProductos" src="{{ asset('imagenes/carrousel-3.jpg') }}" alt="Imagen Producto">
                </a>
                <a href="" class="productos">
                    <h3 class="productosTitulo">Exterior</h3>
                    <img class="imagenProductos" src="{{ asset('imagenes/carrousel-3.jpg') }}" alt="Imagen Producto">
                </a>
                <a href="" class="productos">
                    <h3 class="productosTitulo">Espacios Multifuncionales</h3>
                    <img class="imagenProductos" src="{{ asset('imagenes/carrousel-3.jpg') }}" alt="Imagen Producto">
                </a>
                <a href="" class="productos">
                    <h3 class="productosTitulo">Muebles Personalizados</h3>
                    <img class="imagenProductos" src="{{ asset('imagenes/carrousel-3.jpg') }}" alt="Imagen Producto">
                </a>
            </div>
        </div>
    </div>

    <div class="contenedor-imagenFija">
    </div>

</body>

</html>
