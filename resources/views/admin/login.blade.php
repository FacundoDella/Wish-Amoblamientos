<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Fuentes  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>

    <main class="contenedor alingn-center p-5 mt-5">
        <h1 class="mb-5">Iniciar Sesión</h1>
        <form method="POST" action="{{ route('validar-registro') }}">
            @csrf
            <div class="mb-3">
                <label for="emailInput" class="form-label">Emai</label>
                <input type="email" class="form-control" id="emailInput" name="email" required
                    autocomplete="disable">
                <div id="emailHelp" class="form-text">Nunca compartiremos tu correo electrónico con nadie más.</div>
            </div>
            <div class="mb-3">
                <label for="passwordInput" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="passwordInput" name="password" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input p-2" id="rememberCheck" name="remember">
                <label for="rememberCheck" class="form-check-label">Mantener sesión iniciada</label>
            </div>
            <div>
                <p>¿No tienes Cuenta? <a href="{{ route('registro') }}">Regístrate</a></p>
            </div>
            <button type="submit" class="btn">Iniciar Sesión</button>
        </form>
    </main>
</body>
