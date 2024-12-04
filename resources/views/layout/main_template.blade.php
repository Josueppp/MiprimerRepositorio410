<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laracrud</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    
    @include('fragments.navbar')
    
    @if (session('status'))
        {{session('status')}}
    @endif

    @yield('content') 
</body>
</html>