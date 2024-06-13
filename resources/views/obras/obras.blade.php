<div class="trabajo">
    <div class="trabajoInfo">
        <div>
            @if ($trabajo->imagenes->isNotEmpty())
                <img class="trabajoImagen" src="{{ asset($trabajo->imagenes->first()->ruta) }}"
                    alt="{{ $trabajo->titulo }}">
            @endif
        </div>
        <div class="trabajoName">
            <h3>{{ $trabajo->titulo }}</h3>
        </div>
    </div>
    <a class="botonMini btn " href="{{ route('obras.show', $trabajo->id) }}">Ver Obra</a>
</div>
