<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                    <img class="imagenDefault" src="{{ asset('imagenes/muebleEditor/imagenMuebleDefault.jpg') }}"
                        alt="">
                    <img class="imagenEditable" src="{{ asset('imagenes/muebleEditor/imagenMuebleEditable.png') }}"
                        alt="">
                    <img class="imagenFondo" src="{{ asset('imagenes/muebleEditor/imagenMuebleDefault.jpg') }}"
                        alt="">
                </div>
                <div class="colorizeEditor">
                    <h3>Colorize</h3>
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
