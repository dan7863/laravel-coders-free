<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Aquí se mostrará el listado del post {{$prueba}} {{$prueba2}}</h1>

    @include('partials.test');
    {{-- @includeIf('partials.test', ['color' => 'red']); --}}
    {{-- @includeWhen(true, 'partials.test', ['color' => 'red']); --}}
</body>
</html>