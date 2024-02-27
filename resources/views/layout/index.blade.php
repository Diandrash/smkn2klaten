<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMKN 2 Klaten | {{ $title }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-300">
    @include('sweetalert::alert')

    @guest
        @include('layout.navbar_guest')
    @endguest
    @auth
        @include('layout.navbar_auth')
    @endauth
    
    @yield('container')
</body>
</html>