<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1>Aquí se mostrará el listado del post {{$prueba}} {{$prueba2}}</h1>

    @include('partials.test')
    {{-- @includeIf('partials.test', ['color' => 'red']); --}}
    {{-- @includeWhen(true, 'partials.test', ['color' => 'red']); --}}

    @php
        $type = 'danger';
    @endphp

    <div class = "container mx-auto py-12">
        <x-alert :type="$type" class="mt-12">
            <x-slot name="title">
                Título de Prueba
            </x-slot>
            <p>
                Hola Mundo
            </p>
        </x-alert>
    </div>
</body>
</html>