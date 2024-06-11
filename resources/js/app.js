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

    // Agregar el evento de clic a cada enlace
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
                    currentIndex = 0; // Reinicia el índice al principio
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

    // Si estás utilizando un enrutador JavaScript, puedes necesitar volver a inicializar y destruir cuando cambias de ruta
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
            botonDinamico.style.left = coordenadaX + '%'; // Usar porcentaje
            botonDinamico.style.top = coordenadaY + '%'; // Usar porcentaje
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

// Buscamos el botón de "Guardar Botones" en el DOM
let guardarBotonesBtn = document.getElementById('guardarBotones');

if (guardarBotonesBtn) {
    guardarBotonesBtn.addEventListener('click', function (e) {
        e.preventDefault(); // Evita que el formulario se envíe automáticamente

        // Recopilamos la información de los botones
        let botonesData = [];
        document.querySelectorAll('.boton-elegante').forEach(function (boton) {
            let coordenadaX = boton.style.left;
            let coordenadaY = boton.style.top;
            let contenido = boton.closest('.contenidoVariable').querySelector('parrafo').value;
            botonesData.push({
                posicion_x: parseFloat(coordenadaX),
                posicion_y: parseFloat(coordenadaY),
                contenido: contenido
            });
        });

        // Asignamos los datos a los campos ocultos del formulario
        document.getElementById('contenido').value = JSON.stringify(botonesData.map(data => data.contenido));
        document.getElementById('posicion_x').value = JSON.stringify(botonesData.map(data => data.posicion_x));
        document.getElementById('posicion_y').value = JSON.stringify(botonesData.map(data => data.posicion_y));

        // Enviamos el formulario
        document.getElementById('addInputsForm').submit();
    });
}

// TODO ver porque el textarea se envia vacio 