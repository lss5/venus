<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/icons/favicon.png') }}">
    <title>Вытяжка для маникюра VENUS PROFESSIONAL - Мощная, Тихая, Надежная</title>
    <meta name="title" content="Вытяжка для маникюра VENUS PROFESSIONAL - Мощная, Тихая, Надежная">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <header>
        @include('partials.nav')
    </header>

    <main class="mt-navbar">
        @yield('content')
    </main>

    <footer class="container mb-2 py-3 border-top">
        @include('partials.footer')
    </footer>
</body>
</html>
