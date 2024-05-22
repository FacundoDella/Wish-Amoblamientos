<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Fuentes  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body class="colaboradoresBody">
    @include('includes-generales.top')
    @include('includes-generales.navegacion')

    @include('includes-generales.obras.personalizadosHeader')


    <main class="contenedor">
        <div class="trabajosGrid">
            @include('obras.obras')
            @include('obras.obras')
            @include('obras.obras')
            @include('obras.obras')
            @include('obras.obras')
        </div>
    </main>

    @include('includes-generales.footer')
</body>
