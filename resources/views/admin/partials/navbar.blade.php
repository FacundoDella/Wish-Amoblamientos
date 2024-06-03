<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('trabajos.index') }}">Admin</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="{{ route('trabajos.index') }}">Trabajos</a>
          <a class="nav-link" href="{{ route('trabajos.create') }}">Crear Trabajo</a>
          <a class="nav-link" href="{{ route('logout') }}">Salir</a>
        </div>
      </div>
    </div>
  </nav>