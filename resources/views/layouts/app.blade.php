<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/icons/favicon.png') }}">
    <title>Вытяжка для маникюра VENUS PROFESSIONAL - Мощная, Тихая, Надежная!</title>
    <meta name="title" content="Вытяжка для маникюра VENUS PROFESSIONAL - Мощная, Тихая, Надежная">
    <meta name="description" content="Настольная вытяжка с радиальным вентилятором и бумажным фильтром. Плавная регулировка мощности, легкое извлечение фильтра. Гарантия 12 месяцев.">
    <meta property="og:title" content="Вытяжка для маникюра VENUS PROFESSIONAL - Мощная, Тихая, Надежная!"/>
    <meta property="og:url" content="https://clean-spc.ru"/>
    <meta property="og:image" content="{{ Vite::asset('resources/images/product/main.png') }}"/>
    <meta property="og:description" content="Настольная вытяжка с радиальным вентилятором и бумажным фильтром. Плавная регулировка мощности, легкое извлечение фильтра. Гарантия 12 месяцев."/>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <header>
        @include('partials.nav')
    </header>

    <main class="pt-navbar">
        @yield('content')
    </main>

    <footer class="container mb-2 py-3 border-top">
        @include('partials.footer')
    </footer>
</body>
</html>
