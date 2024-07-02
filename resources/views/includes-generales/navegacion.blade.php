<nav class="navbar navbar-expand-lg sticky-top bg-body-tertiary navegacion">
    <div class="container-fluid">
        <div class="navbar-brand" href="#">
            <a href="/" class="enlanceAInicio">
                <img class="imagenLogo"src="{{ asset('imagenes/logoSinFondo.jpg') }}" alt="Logo">
                <h3 class="navegacion-titulo">Wish Amoblamientos</h3>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav navegacion-enlaces">
                <a class="nav-link navlinkEdit" href="/">Inicio</a>
                <a class="nav-link navlinkEdit" id="nosotrosNavLink" href="sobreNosotrosContainer" aria-current="page" href="#">Sobre Nosotros</a>
                <a class="nav-link navlinkEdit" href="/blog">Blog</a>
                <a class="nav-link navlinkEdit" id="obrasNavLink" href="seccionProductos">Obras</a>
                <a class="nav-link navlinkEdit" href="/colaboradores">Colaboradores</a>
                <a class="nav-link navlinkEdit" href="#">Contacto</a>
            </div>
        </div>
    </div>
</nav>
