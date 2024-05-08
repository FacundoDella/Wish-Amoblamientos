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
        // Primero, eliminamos la clase 'selected' de todos los enlaces
        navLink.forEach(function (link) {
            link.classList.remove('selected');
        });
        
        // Luego, agregamos la clase 'selected' solo al enlace que fue clickeado
        event.currentTarget.classList.add('selected');
    }
    
    // Agregar el evento de clic a cada enlace
    navLink.forEach(function (link) {
        link.addEventListener('click', handleLinkClick);
    });
});

