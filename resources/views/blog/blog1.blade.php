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
        <h1>Los Mejores Materiales para Muebles de Calidad</h1>
    </header>

    <main>
        <div class="contenedor">
            <section class="blog1Presentacion">
                <h2>La elección del mejor material para tus muebles dependerá de tus necesidades, presupuesto y estilo
                    de
                    decoración. </h2>
            </section>
            @include('includes-generales/separador')
            <section class="blog1secciones">
                <div class="blog1seccionesTituloContainer">
                    <h2 class="blog1seccionesTitulo">Madera Maciza: <span>El Clásico Intemporal</span></h2>
                </div>
                <img src="{{ asset('imagenes/blog/blog1/maderaMaciza.jpg') }}" alt="" class="blog1imagenes">
                <div class="blog1Descripcion">
                    <p>La madera maciza es el material por excelencia para la fabricación de muebles, ya que ofrece una
                        combinación inigualable de resistencia, belleza y calidez. Proviene directamente del tronco del
                        árbol, conservando todas sus propiedades naturales.</p>
                </div>
                <div class="blog1CaracteristicasContenedor">
                    <h3>Características:</h3>
                    <ul class="blog1Caracteristicas">
                        <li class="blog1CaracteristicasLi"> <span>Durabilidad: </span>La madera maciza es extremadamente
                            resistente al desgaste, lo
                            que garantiza la longevidad de tus muebles.</li>
                        <li class="blog1CaracteristicasLi"> <span>Estética: </span>Las vetas y texturas únicas de la
                            madera maciza aportan un toque
                            natural y elegante a cualquier espacio.</li>
                        <li class="blog1CaracteristicasLi"> <span>Versatilidad:</span>Se puede utilizar para crear una
                            amplia variedad de estilos de
                            muebles, desde rústicos hasta modernos.</li>
                        <li class="blog1CaracteristicasLi"> <span>Mantenimiento: </span>Requiere cuidados regulares para
                            mantener su belleza, como
                            barnizado o encerado.</li>
                    </ul>
                </div>
            </section>
            @include('includes-generales/separador')
            <section class="blog1secciones">
                <div class="blog1seccionesTituloContainer">
                    <h2 class="blog1seccionesTitulo">Madera Contrachapada: <span>La Alternativa Versátil</span></h2>
                </div>
                <img src="{{ asset('imagenes/blog/blog1/maderaContrachapada.jpg') }}"alt="Imagen de un mueble de madera contrachapada con diferentes capas"
                    class="blog1imagenes">
                <div class="blog1Descripcion">
                    <p>La madera contrachapada está compuesta por varias capas finas de madera encoladas entre sí, lo
                        que la convierte en una opción más asequible que la madera maciza, sin sacrificar completamente
                        su resistencia.</p>
                </div>
                <div class="blog1CaracteristicasContenedor">
                    <h3>Características:</h3>
                    <ul class="blog1Caracteristicas">
                        <li class="blog1CaracteristicasLi"> <span>Resistencia: </span>Es menos resistente que la madera
                            maciza, pero lo suficientemente
                            fuerte para la mayoría de las aplicaciones de muebles.</li>
                        <li class="blog1CaracteristicasLi"> <span>Estabilidad: </span>Menos propensa a deformarse o
                            agrietarse que la madera maciza.
                        </li>
                        <li class="blog1CaracteristicasLi"> <span>Versatilidad:</span>Se puede utilizar para crear una
                            amplia variedad de formas y
                            diseños.</li>
                        <li class="blog1CaracteristicasLi"> <span>Costo: </span>Más económica que la madera maciza, lo
                            que la convierte en una buena
                            opción para presupuestos ajustados.</li>
                    </ul>
                </div>
            </section>
            @include('includes-generales/separador')
            <section class="blog1secciones">
                <div class="blog1seccionesTituloContainer">
                    <h2 class="blog1seccionesTitulo">MDF (Fibra de Madera de Densidad Media): <span>El Material
                            Económico</span></h2>
                </div>
                <img src="{{ asset('imagenes/blog/blog1/MDF.jpg') }}" alt="Imagen de un mueble de MDF con acabado liso"
                    class="blog1imagenes">
                <div class="blog1Descripcion">
                    <p>El MDF está compuesto por fibras de madera finamente trituradas y unidas con resina, lo que lo
                        convierte en un material económico y fácil de trabajar.</p>
                </div>
                <div class="blog1CaracteristicasContenedor">
                    <h3>Características:</h3>
                    <ul class="blog1Caracteristicas">
                        <li class="blog1CaracteristicasLi"> <span>Costo: </span>El material más económico de esta lista,
                            ideal para presupuestos
                            limitados.</li>
                        <li class="blog1CaracteristicasLi"> <span>Superficie lisa: </span>Ofrece una superficie lisa y
                            uniforme, perfecta para pintar o
                            lacar.</li>
                        <li class="blog1CaracteristicasLi"> <span>Fácil de trabajar: </span>Se puede cortar, fresar y
                            lijar con facilidad.</li>
                        <li class="blog1CaracteristicasLi"> <span>Menos resistente: </span>No tan resistente a la
                            humedad ni al desgaste como la madera
                            maciza o la madera contrachapada.</li>
                    </ul>
                </div>
            </section>
            @include('includes-generales/separador')
            <section class="blog1secciones">
                <div class="blog1seccionesTituloContainer">
                    <h2 class="blog1seccionesTitulo">Metal: <span>Durabilidad Industrial</span></h2>
                </div>
                <img src="{{ asset('imagenes/blog/blog1/metal.jpg') }}"
                    alt="Imagen de un mueble de metal con estilo industrial" class="blog1imagenes">
                <div class="blog1Descripcion">
                    <p>El metal, como el acero inoxidable o el aluminio, aporta una estética moderna e industrial a los
                        muebles.</p>
                </div>
                <div class="blog1CaracteristicasContenedor">
                    <h3>Características:</h3>
                    <ul class="blog1Caracteristicas">
                        <li class="blog1CaracteristicasLi"> <span>Durabilidad: </span>Extremadamente resistente al
                            desgaste, la humedad y el calor.
                        </li>
                        <li class="blog1CaracteristicasLi"> <span>Fácil de limpiar: </span>Se limpia fácilmente con un
                            paño húmedo.</li>
                        <li class="blog1CaracteristicasLi"> <span>Ligero: </span>Ideal para muebles que se deben mover
                            con frecuencia.</li>
                        <li class="blog1CaracteristicasLi"> <span>Estética: </span>Aporta un toque moderno e industrial
                            a la decoración.</li>
                    </ul>
                </div>
            </section>
            @include('includes-generales/separador')
            <section class="blog1secciones">
                <div class="blog1seccionesTituloContainer">
                    <h2 class="blog1seccionesTitulo">Cuero: <span>Elegancia y Confort</span></h2>
                </div>
                <img src="{{ asset('imagenes/blog/blog1/cuero.jpg') }}"
                    alt="Imagen de un mueble de cuero con acabado envejecido" class="blog1imagenes">
                <div class="blog1Descripcion">
                    <p>El cuero es un material natural que aporta lujo, confort y elegancia a los muebles.</p>
                </div>
                <div class="blog1CaracteristicasContenedor">
                    <h3>Características:</h3>
                    <ul class="blog1Caracteristicas">
                        <li class="blog1CaracteristicasLi"> <span>Durabilidad: </span>Muy resistente al desgaste, con el
                            cuidado adecuado puede durar
                            muchos años.</li>
                        <li class="blog1CaracteristicasLi"> <span>Confort: </span>Aporta una sensación cálida y
                            acogedora al tacto.</li>
                        <li class="blog1CaracteristicasLi"> <span>Estética: </span>Aporta un toque sofisticado y
                            elegante a la decoración.</li>
                        <li class="blog1CaracteristicasLi"> <span>Mantenimiento: </span>Requiere cuidados regulares para
                            mantener su flexibilidad y
                            evitar que se agriete.</li>
                    </ul>
                </div>
            </section>
            @include('includes-generales/separador')
            <section class="blog1secciones">
                <div class="blog1seccionesTituloContainer">
                    <h2 class="blog1seccionesTitulo">Vidrio: <span>Transparencia y Modernidad</span></h2>
                </div>
                <img src="{{ asset('imagenes/blog/blog1/vidrio.jpg') }}"
                    alt="Imagen de un mueble de vidrio con diseño minimalista" class="blog1imagenes">
                <div class="blog1Descripcion">
                    <p>El vidrio aporta un toque de transparencia, ligereza y modernidad a los muebles.</p>
                </div>
                <div class="blog1CaracteristicasContenedor">
                    <h3>Características:</h3>
                    <ul class="blog1Caracteristicas">
                        <li class="blog1CaracteristicasLi"> <span>Elegancia: </span>Aporta un toque sofisticado y
                            minimalista a la decoración.</li>
                        <li class="blog1CaracteristicasLi"> <span>Versatilidad: </span>Se puede utilizar para crear una
                            amplia variedad de diseños.
                        </li>
                        <li class="blog1CaracteristicasLi"> <span>Facilidad de limpieza: </span>Se limpia fácilmente con
                            un paño húmedo.</li>
                        <li class="blog1CaracteristicasLi"> <span>Fragilidad: </span>Es un material frágil que requiere
                            cuidado especial para evitar
                            roturas.</li>
                    </ul>
                </div>
            </section>
        </div>
    </main>



    @include('includes-generales.footer')
</body>
