import './bootstrap';
import * as bootstrap from 'bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    let navegacion = document.querySelector('.navegacion');
    let navLink = document.querySelectorAll('.nav-link');
    let navTitulo = document.querySelector('.navegacion-titulo');
    let scrollThreshold = 100;
    let screenWidth = window.innerWidth;
    if (navegacion) {
        window.addEventListener('scroll', function () {
            navLink.forEach(function (link) {
                if (screenWidth > 992) {
                    if (window.scrollY > scrollThreshold) {
                        navegacion.classList.add('scrolled');
                        link.classList.add('scroll')
                        navTitulo.classList.add('blanco');
                    } else {
                        navegacion.classList.remove('scrolled');
                        link.classList.remove('scroll');
                        navTitulo.classList.remove('blanco');
                    }
                }


            });
        });
    }
    function handleLinkClick(event) {

        navLink.forEach(function (link) {
            link.classList.remove('selected');
        });

        event.currentTarget.classList.add('selected');
    }

    navLink.forEach(function (link) {
        link.addEventListener('click', handleLinkClick);
    });
});



// Carrousel 
let carouselInstance;

document.addEventListener('DOMContentLoaded', () => {
    const initCarousel = () => {
        const myCarouselElement = document.querySelector('#carouselExampleSlidesOnly');

        // Verifica si el elemento del carrusel existe
        if (myCarouselElement) {
            // Inicializa el carrusel
            carouselInstance = new bootstrap.Carousel(myCarouselElement, {
                interval: 5000,
                touch: false,
                pause: false
            });

            let currentIndex = 0;
            const carrouselItems = document.querySelectorAll('.carousel-item');

            const alternarClases = () => {
                carrouselItems.forEach(item => {
                    if (item.classList.contains('animate-move')) {
                        item.classList.remove('animate-move');
                        item.classList.add('animate-move-up');
                    } else if (item.classList.contains('animate-move-up')) {
                        item.classList.remove('animate-move-up');
                        item.classList.add('animate-move-down');
                    } else if (item.classList.contains('animate-move-down')) {
                        item.classList.remove('animate-move-down');
                        item.classList.add('animate-move-up');
                    }
                });
                currentIndex++;
                if (currentIndex >= carrouselItems.length) {
                    currentIndex = 0;
                    carouselInstance.next();
                }
                setTimeout(alternarClases, 5000);
            };

            alternarClases();
        }
    };

    const destroyCarousel = () => {
        if (carouselInstance) {
            carouselInstance.dispose();
            carouselInstance = null;
        }
    };

    initCarousel();
    window.addEventListener('popstate', () => {
        destroyCarousel();
        initCarousel();
    });
});


let imagenesConBotones = document.querySelector('.itemActiveButons');
let botonesDeImagen = document.querySelectorAll('.boton-elegante');
let informacionVariable = document.querySelector('.informacionVariable');
if (imagenesConBotones) {
    imagenesConBotones.addEventListener('click', () => {
        botonesDeImagen.forEach(boton => {
            if (boton.classList.contains('botonEleganteOculto')) {
                boton.classList.remove('botonEleganteOculto');
                boton.classList.add('botonEleganteVisible');
            } else {
                boton.classList.remove('botonEleganteVisible');
                boton.classList.add('botonEleganteOculto');
                informacionVariable.classList.remove('informacionVariableVisible');
                informacionVariable.classList.add('informacionVariableOculto');
            }
        });
    });
}

botonesDeImagen.forEach(boton => {
    boton.addEventListener('click', () => {
        if (informacionVariable.classList.contains('informacionVariableOculto')) {
            informacionVariable.classList.remove('informacionVariableOculto');
            informacionVariable.classList.add('informacionVariableVisible');
            console.log('visible');
        } else {
            informacionVariable.classList.remove('informacionVariableVisible');
            informacionVariable.classList.add('informacionVariableOculto');
            console.log('oculto');
        }
    })
})

// Sobre Nosotros Ver mas 

let verMas = document.querySelector('.verMas');
let tresPuntos = document.querySelector('.tresPuntos');
let nosotrosParrafo = document.querySelector('.nosotrosParrafo');
let nosotrosTextoExtra = document.querySelector('.nosotrosTextoExtra');

if (verMas) {
    verMas.addEventListener('click', () => {
        if (nosotrosTextoExtra.classList.contains('nosotrosTextoExtraOculto')) {
            verMas.textContent = 'Ver menos';
            nosotrosParrafo.classList.add('parrafoHeight');
            nosotrosTextoExtra.classList.remove('nosotrosTextoExtraOculto');
            nosotrosTextoExtra.classList.add('nosotrosTextoExtraVisible');
            tresPuntos.classList.remove('nosotrosTextoExtraVisible');
            tresPuntos.classList.add('nosotrosTextoExtraOculto');
        } else {
            verMas.textContent = 'Ver mas';
            nosotrosParrafo.classList.remove('parrafoHeight');
            nosotrosTextoExtra.classList.remove('nosotrosTextoExtraVisible');
            nosotrosTextoExtra.classList.add('nosotrosTextoExtraOculto');
            tresPuntos.classList.remove('nosotrosTextoExtraOculto');
            tresPuntos.classList.add('nosotrosTextoExtraVisible');
        }
    })
}



// Creador de inputs en una imagen
let imagenes = document.querySelectorAll('.imagenOpciones');
let contenedorImagen = document.querySelector('.contenedorImagen');
let contenidoVariable = document.querySelector('.contenidoVariable');
let infoBoton = document.querySelector('.informacionDelBoton');
let parrafoVisible = null;
let textareaVisible = null;
let botonEliminarVisible = null;
let imagen_id = document.querySelector('.imagen_id');

imagenes.forEach(imagen => {
    imagen.addEventListener('click', () => {
        let ImagenSeleccionada = document.createElement('img');
        ImagenSeleccionada.classList.add('imagenOpcionesEdit');
        ImagenSeleccionada.src = imagen.src;
        let imagenSeleccionadaId = imagen.getAttribute('data-imagen-id');
        imagen_id.value = imagenSeleccionadaId;
        ImagenSeleccionada.dataset.imagenId = imagen.dataset.imagenId;
        ImagenSeleccionada.style.position = 'relative';
        contenedorImagen.innerHTML = "";
        contenedorImagen.appendChild(ImagenSeleccionada);
        ImagenSeleccionada.addEventListener('click', crearBoton);

        function crearBoton(e) {
            let rectImagen = ImagenSeleccionada.getBoundingClientRect();
            let coordenadaX = e.offsetX / rectImagen.width * 100; // Convertir a porcentaje
            let coordenadaY = e.offsetY / rectImagen.height * 100; // Convertir a porcentaje

            let botonDinamico = document.createElement('button');
            botonDinamico.classList.add('boton-elegante');
            botonDinamico.style.left = coordenadaX + '%';
            botonDinamico.style.top = coordenadaY + '%';
            contenedorImagen.appendChild(botonDinamico);

            let textareaTexto = document.createElement('textarea');
            textareaTexto.classList.add('textarea-texto');
            infoBoton.appendChild(textareaTexto);
            let parrafoAsociado = document.createElement('p');
            parrafoAsociado.classList.add('parrafo-oculto');
            contenidoVariable.appendChild(parrafoAsociado);

            let botonEliminar = document.createElement('button');
            botonEliminar.textContent = 'Eliminar';
            botonEliminar.classList.add('boton-eliminar');
            botonEliminar.classList.add('botonMini');
            botonEliminar.classList.add('btn');
            infoBoton.appendChild(botonEliminar);

            botonDinamico.textarea = textareaTexto;
            botonDinamico.parrafo = parrafoAsociado;
            botonDinamico.botonEliminar = botonEliminar;

            botonDinamico.addEventListener('mousedown', iniciarArrastre);
            botonDinamico.addEventListener('touchstart', iniciarArrastre);
            botonDinamico.addEventListener('click', function () {
                mostrarContenido(botonDinamico.parrafo, botonDinamico.textarea, botonDinamico.botonEliminar);
            });

            botonEliminar.addEventListener('click', function () {
                eliminarContenido(botonDinamico, textareaTexto, parrafoAsociado, botonEliminar);
            });

            textareaTexto.addEventListener('input', function () {
                botonDinamico.parrafo.textContent = textareaTexto.value;
            });

            function iniciarArrastre(event) {
                event.preventDefault();
                document.addEventListener('mousemove', moverBoton);
                document.addEventListener('mouseup', soltarBoton);
                document.addEventListener('touchmove', moverBoton);
                document.addEventListener('touchend', soltarBoton);
            }

            function moverBoton(event) {
                event.preventDefault();
                let rectImagen = ImagenSeleccionada.getBoundingClientRect();
                let rectContenedor = contenedorImagen.getBoundingClientRect();
                let clientX = event.clientX || event.touches[0].clientX;
                let clientY = event.clientY || event.touches[0].clientY;

                let nuevoX = (clientX - rectContenedor.left - (botonDinamico.offsetWidth / 2)) / rectImagen.width * 100;
                let nuevoY = (clientY - rectContenedor.top - (botonDinamico.offsetHeight / 2)) / rectImagen.height * 100;

                if (nuevoX < 0) nuevoX = 0;
                if (nuevoY < 0) nuevoY = 0;
                if (nuevoX + (botonDinamico.offsetWidth / rectImagen.width * 100) > 100) nuevoX = 100 - (botonDinamico.offsetWidth / rectImagen.width * 100);
                if (nuevoY + (botonDinamico.offsetHeight / rectImagen.height * 100) > 100) nuevoY = 100 - (botonDinamico.offsetHeight / rectImagen.height * 100);

                botonDinamico.style.left = nuevoX + '%';
                botonDinamico.style.top = nuevoY + '%';
            }

            function soltarBoton() {
                document.removeEventListener('mousemove', moverBoton);
                document.removeEventListener('mouseup', soltarBoton);
                document.removeEventListener('touchmove', moverBoton);
                document.removeEventListener('touchend', soltarBoton);
            }
        }
    });
});

function mostrarContenido(parrafo, textareaContenido, botonEliminar) {
    if (parrafoVisible) {
        parrafoVisible.classList.remove('parrafo-visible');
        parrafoVisible.classList.add('parrafo-oculto');
    }
    parrafo.classList.remove('parrafo-oculto');
    parrafo.classList.add('parrafo-visible');
    parrafoVisible = parrafo;

    if (textareaVisible) {
        textareaVisible.classList.remove('textarea-visible');
        textareaVisible.classList.add('textarea-texto');
    }
    textareaContenido.classList.remove('textarea-texto');
    textareaContenido.classList.add('textarea-visible');
    textareaVisible = textareaContenido;

    if (botonEliminarVisible) {
        botonEliminarVisible.classList.remove('boton-eliminar-visible');
        botonEliminarVisible.classList.add('boton-eliminar');
    }
    botonEliminar.classList.remove('boton-eliminar');
    botonEliminar.classList.add('boton-eliminar-visible');
    botonEliminarVisible = botonEliminar;
}

function eliminarContenido(boton, textarea, parrafo, botonEliminar) {
    boton.remove();
    textarea.remove();
    parrafo.remove();
    botonEliminar.remove();
    parrafoVisible = null;
    textareaVisible = null;
    botonEliminarVisible = null;
}

let guardarBotonesBtn = document.getElementById('guardarBotones');

if (guardarBotonesBtn) {
    guardarBotonesBtn.addEventListener('click', function (e) {
        e.preventDefault();
        let botonesData = [];
        let contador = -1;
        let contenido = [];
        document.querySelectorAll('.boton-elegante').forEach(function (boton) {
            let coordenadaX = boton.style.left;
            let coordenadaY = boton.style.top;
            contador++;
            let contenedorInformacion = boton.closest('.contenidoVariableContenedor').querySelector('.contenidoVariable');
            let parrafos = contenedorInformacion.querySelectorAll('p');
            contenido = [];

            parrafos.forEach(function (parrafo) {
                contenido.push(parrafo.textContent); // Foreach a todos los parrafos que se crean, para tomar su contenido e insertarlo en el array contenido
            });

            botonesData.push({
                posicion_x: parseFloat(coordenadaX),
                posicion_y: parseFloat(coordenadaY),
                contenido: contenido[contador] // De esta manera accedo al array contenido en cada posicion corresponiente con ayuda del contador
            });
        });

        console.log(botonesData);

        document.getElementById('contenido').value = JSON.stringify(botonesData.map(data => data.contenido));
        document.getElementById('posicion_x').value = JSON.stringify(botonesData.map(data => data.posicion_x));
        document.getElementById('posicion_y').value = JSON.stringify(botonesData.map(data => data.posicion_y));

        // Enviamos el formulario
        document.getElementById('addInputsForm').submit();
    });
}

// SECTION Colorize

$(document).ready(function () {
    $('.load-files').click(function (event) {
        event.preventDefault();

        let opcion = $(this).data('option');
        let colorizeOpciones = $('.colorizeOpciones');

        $.ajax({
            url: '/get-files/' + opcion,
            method: 'GET',
            success: function (response) {

                if (opcion == 1) {
                    colorizeOpciones.empty();
                    if (colorizeOpciones.hasClass('loaded')) {
                        return;
                    } else {
                        colorizeOpciones.addClass('loaded');
                        setTimeout(function () {
                            // se carga el contenido del carrusel desde el archivo Blade, definido en las rutas
                            $.get('/feplacLineas', function (containerFeplacString) { // Retorna un string

                                const tempDiv = document.createElement('div');
                                tempDiv.innerHTML = containerFeplacString; // inserto el sgring en el div temporal

                                // saco el contenido del div temporal y lo agrego al DOM
                                while (tempDiv.firstChild) {
                                    colorizeOpciones.append(tempDiv.firstChild);
                                }

                                const containerFeplac = colorizeOpciones.find('.containerFeplacLinea');

                                let fragment = document.createDocumentFragment();

                                response.forEach(function (file) {
                                    let lineaFeplacEnlace = document.createElement('a');
                                    lineaFeplacEnlace.classList.add('lineaFeplacEnlace');

                                    let lineaFeplac = document.createElement('div');
                                    lineaFeplac.classList.add('lineaFeplac');

                                    let imgFeplacLinea = document.createElement('img');
                                    imgFeplacLinea.src = file.imagenLinea;
                                    imgFeplacLinea.classList.add('imgFeplacLinea');

                                    lineaFeplacEnlace.append(lineaFeplac);
                                    lineaFeplac.append(imgFeplacLinea);
                                    fragment.append(lineaFeplacEnlace);
                                });

                                containerFeplac.append(fragment);
                            });
                        }, 100)
                    }
                } else if (opcion == 2) {
                    colorizeOpciones.empty();
                    if (colorizeOpciones.hasClass('loaded')) {
                        return;
                    } else {
                        colorizeOpciones.addClass('loaded');
                        setTimeout(function () {
                            $.get('/eggerTableros', function (carruselEggerString) {

                                const tempDiv = document.createElement('div');
                                tempDiv.innerHTML = carruselEggerString;

                                while (tempDiv.firstChild) {
                                    colorizeOpciones.append(tempDiv.firstChild);
                                }

                                const containerEgger = colorizeOpciones.find('.containerEggerTableros');
                                const slider = document.createElement('div');
                                slider.classList.add('slider');
                                containerEgger.append(slider);

                                // creo cada elemento a partir de la respuesta y lo inserto en el slider
                                response.forEach(item => {
                                    let itemEgger = document.createElement('div');
                                    itemEgger.classList.add('item');

                                    let imagenEgger = document.createElement('img');
                                    imagenEgger.src = item.imagen;

                                    let titleEgger = document.createElement('p');
                                    titleEgger.textContent = item.title;

                                    let codigoEgger = document.createElement('p');
                                    codigoEgger.textContent = item.codigo;

                                    itemEgger.append(imagenEgger);
                                    itemEgger.append(titleEgger);
                                    itemEgger.append(codigoEgger);

                                    slider.append(itemEgger);

                                })




                            });

                        }, 100)
                    }


                }
            },
            error: function (xhr, status, error) {
                console.error('Error en la solicitud AJAX:', error);
            }
        });
    });
});


// Codigo para el slider de colorize
document.addEventListener('DOMContentLoaded', () => {
    let sliderTablerosBoton = document.querySelector('.boton1');
    let sliderTablerosBoton2 = document.querySelector('.boton2');
    let sliderTableros = document.querySelector('.slider');

    const itemHeight = sliderTableros.firstElementChild.clientHeight + 10;
    const itemWidth = sliderTableros.firstElementChild.clientWidth + 10;

    let itemsCantidad = document.querySelectorAll('.itemSlider');
    let cantidad = 0;
    itemsCantidad.forEach(item => {
        cantidad++;
    })
    let posicion = 0;
    let posicionX = 0;

    if (sliderTablerosBoton) {
        sliderTablerosBoton.addEventListener('click', () => {
            if (posicionX > 0 && window.innerWidth < 768) {
                posicionX -= itemWidth;
                console.log('izquierda');
                console.log(posicionX);
                sliderTableros.style.transform = `translateX(${-posicionX}px)`;


            } else if (posicion > 0 && window.innerWidth > 768) {
                posicion -= itemHeight;
                console.log('arriba');
                console.log(posicion);
                sliderTableros.style.transform = `translateY(${-posicion}px)`;
            }
        });
    }
    if (sliderTablerosBoton2) {
        sliderTablerosBoton2.addEventListener('click', () => {

            if (window.innerWidth < 380) {
                if (posicionX < (cantidad * itemWidth) - itemWidth * 3) {
                    posicionX += itemWidth;
                    console.log('derecha 380');
                    console.log(posicionX);
                    sliderTableros.style.transform = `translateX(${-posicionX}px)`;
                }

            }
            else if (window.innerWidth < 469) {

                if (posicionX < (cantidad * itemWidth) - itemWidth * 4) {
                    posicionX += itemWidth;
                    console.log('derecha 469');
                    console.log(posicionX);
                    sliderTableros.style.transform = `translateX(${-posicionX}px)`;
                }
            }
            else if (window.innerWidth < 560) {
                if (posicionX < (cantidad * itemWidth) - itemWidth * 5) {
                    posicionX += itemWidth;
                    console.log('derecha 560');
                    console.log(posicionX);
                    sliderTableros.style.transform = `translateX(${-posicionX}px)`;
                }

            }
            else if (window.innerWidth < 645) {

                if (posicionX < (cantidad * itemWidth) - itemWidth * 6) {
                    posicionX += itemWidth;
                    console.log('derecha 645');
                    console.log(posicionX);
                    sliderTableros.style.transform = `translateX(${-posicionX}px)`;
                }
            }
            else if (window.innerWidth < 730) {
                if (posicionX < (cantidad * itemWidth) - itemWidth * 7) {
                    posicionX += itemWidth;
                    console.log('derecha 730');
                    console.log(posicionX);
                    sliderTableros.style.transform = `translateX(${-posicionX}px)`;
                }

            }
            else if (window.innerWidth > 768 && window.innerWidth < 992) {
                if (posicion < (cantidad * itemHeight) - itemHeight * 3) {
                    posicion += itemHeight;
                    console.log('abajo');
                    console.log(posicion);
                    sliderTableros.style.transform = `translateY(${-posicion}px)`;
                }
            } else if (window.innerWidth >= 992) {
                if (posicion < (cantidad / 2) * itemHeight - itemHeight * 3) {
                    posicion += itemHeight;
                    console.log('abajo');
                    console.log(posicion);
                    sliderTableros.style.transform = `translateY(${-posicion}px)`;
                }
            }
        });
    }
})
