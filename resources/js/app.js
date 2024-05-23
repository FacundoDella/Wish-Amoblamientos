import './bootstrap';
import * as bootstrap from 'bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    let navegacion = document.querySelector('.navegacion');
    let navLink = document.querySelectorAll('.nav-link');
    let navTitulo = document.querySelector('.navegacion-titulo');
    let scrollThreshold = 100;
    let screenWidth = window.innerWidth;

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
