<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wish Amoblamientos</title>
    <link rel="icon" href="{{ asset('imagenes/logo.ico') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- Fuentes  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>

    @include('includes-generales.top')
    @include('includes-generales.navegacion')

    <main>
        <div class="contenedor">
            <div class="colorize">
                <div class="colorizeImagenEdit">
                    <div class="seleccionaImagen">
                        <p>Debes seleccionar una imagen</p>
                    </div>
                    <form class="formColorizeOptions" id="formColorizeOptions">
                        <div class="opcionColorize">
                            <input type="radio" id="opcion2" name="opcion" value="opcion2">
                            <label for="opcion2">Mueble Superior</label><br>
                        </div>
                        <div class="opcionColorize">
                            <input type="radio" id="opcion1" name="opcion" value="opcion1">
                            <label for="opcion1">Mueble Inferior</label><br>
                        </div>
                    </form>


                    <img class="imagenDefault" src="{{ asset('imagenes/muebleEditor/imagenMuebleDefault.jpg') }}"
                        alt="">


                    <img class="imagenEditable" src="{{ asset('imagenes/muebleEditor/imagenMuebleEditable1.png') }}"
                        alt="">

                    <img class="imagenEditable2" src="{{ asset('imagenes/muebleEditor/imagenMuebleEditable2.png') }}"
                        alt="">


                    <img class="imagenFondo" src="" alt="">
                    <img class="imagenFondo2" src="" alt="">
                </div>
                <div class="colorizeEditor">
                    <h3>Colorize</h3>

                    <a href="" class="colorizeBack" id="feplacLineas">
                        <img src="{{ asset('imagenes/arrow.png') }}" alt="">
                        <p>Volver</p>
                    </a>
                    <a href="" class="colorizeBack" id="Inicio">
                        <img src="{{ asset('imagenes/arrow.png') }}" alt="">
                        <p>Volver</p>
                    </a>

                    <div class="colorizeOpciones">

                        <a class="load-files" href="#" data-option="1">
                            <img src="imagenes/muebleEditor/feplac.jpg" alt="Opción 1">
                        </a>
                        <a class="load-files" href="#" data-option="2">
                            <img src="imagenes/muebleEditor/egger.jpg" alt="Opción 2">
                        </a>

                        {{-- Se renderiza Feplac dinamicamente desde el JS --}}
                    </div>
                </div>
            </div>

        </div>
    </main>


    @include('includes-generales.footer')
</body>

</html>
