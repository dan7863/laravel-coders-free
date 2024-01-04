<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('meta')
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @stack('css')
</head>
<body>
    @yield('content')
    @stack('js')
</body>
</html>