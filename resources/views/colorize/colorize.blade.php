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
                        {{-- 
                        <a class="load-files" href="#" data-option="1">
                            <img src="imagenes/muebleEditor/feplac.jpg" alt="Opción 1">
                        </a>
                        <a class="load-files" href="#" data-option="2">
                            <img src="imagenes/muebleEditor/egger.jpg" alt="Opción 2">
                        </a> --}}

                        {{-- Se renderiza Feplac dinamicamente desde el JS --}}

                        <div class="silderContenedor">
                            <button class="sliderBoton boton1"><</button>
                            <div class="slider">
                                <div class="itemSlider">
                                    <img class="itemImagen"
                                        src="https://cdn.egger.com/img/pim/8854529048606/8854529081374/original.png"
                                        alt="">
                                    <p class="itemTitulo">Roble Casella natural claro</p>
                                    <p class="itemCodigo">H1367 ST40</p>
                                </div>
                                <div class="itemSlider">
                                    <img class="itemImagen"
                                        src="https://cdn.egger.com/img/pim/8854381101086/8854531080222/original.png"
                                        alt="">
                                    <p class="itemTitulo">Pino Cascina</p>
                                    <p class="itemCodigo">H1401 ST22</p>
                                </div>
                                <div class="itemSlider">
                                    <img class="itemImagen"
                                        src="https://cdn.egger.com/img/pim/8854405185566/8854539993118/original.png"
                                        alt="">
                                    <p class="itemTitulo">Fineline Metallic antracita</p>
                                    <p class="itemCodigo">H3190 ST19</p>
                                </div>
                                <div class="itemSlider">
                                    <img class="itemImagen"
                                        src="https://cdn.egger.com/img/pim/8854414622750/8854543040542/original.png"
                                        alt="">
                                    <p class="itemTitulo">Roble Kendal coñac</p>
                                    <p class="itemCodigo">H3398 ST12</p>
                                </div>
                                <div class="itemSlider">
                                    <img class="itemImagen"
                                        src="https://cdn.egger.com/img/pim/8854334504990/8854514532382/original.png"
                                        alt="">
                                    <p class="itemTitulo">Textil beige</p>
                                    <p class="itemCodigo">F416 ST10</p>
                                </div>
                                <div class="itemSlider">
                                    <img class="itemImagen"
                                        src="https://cdn.egger.com/img/pim/8854529048606/8854529081374/original.png"
                                        alt="">
                                    <p class="itemTitulo">Roble Casella natural claro</p>
                                    <p class="itemCodigo">H1367 ST40</p>
                                </div>
                                <div class="itemSlider">
                                    <img class="itemImagen"
                                        src="https://cdn.egger.com/img/pim/8854381101086/8854531080222/original.png"
                                        alt="">
                                    <p class="itemTitulo">Pino Cascina</p>
                                    <p class="itemCodigo">H1401 ST22</p>
                                </div>
                                <div class="itemSlider">
                                    <img class="itemImagen"
                                        src="https://cdn.egger.com/img/pim/8854405185566/8854539993118/original.png"
                                        alt="">
                                    <p class="itemTitulo">Fineline Metallic antracita</p>
                                    <p class="itemCodigo">H3190 ST19</p>
                                </div>
                                <div class="itemSlider">
                                    <img class="itemImagen"
                                        src="https://cdn.egger.com/img/pim/8854414622750/8854543040542/original.png"
                                        alt="">
                                    <p class="itemTitulo">Roble Kendal coñac</p>
                                    <p class="itemCodigo">H3398 ST12</p>
                                </div>
                                <div class="itemSlider">
                                    <img class="itemImagen"
                                        src="https://cdn.egger.com/img/pim/8854334504990/8854514532382/original.png"
                                        alt="">
                                    <p class="itemTitulo">Textil beige</p>
                                    <p class="itemCodigo">F416 ST10</p>
                                </div>
                                <div class="itemSlider">
                                    <img class="itemImagen"
                                        src="https://cdn.egger.com/img/pim/8854414622750/8854543040542/original.png"
                                        alt="">
                                    <p class="itemTitulo">Roble Kendal coñac</p>
                                    <p class="itemCodigo">H3398 ST12</p>
                                </div>
                                <div class="itemSlider">
                                    <img class="itemImagen"
                                        src="https://cdn.egger.com/img/pim/8854334504990/8854514532382/original.png"
                                        alt="">
                                    <p class="itemTitulo">Textil beige</p>
                                    <p class="itemCodigo">F416 ST10</p>
                                </div>
                            </div>
                            <button class="sliderBoton boton2">></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>


    @include('includes-generales.footer')
</body>

</html>
