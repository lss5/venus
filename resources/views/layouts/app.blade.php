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
    <meta property="og:image" content="{{ Vite::asset('resources/images/product/main.jpg') }}"/>
    <meta property="og:description" content="Настольная вытяжка с радиальным вентилятором и бумажным фильтром. Плавная регулировка мощности, легкое извлечение фильтра. Гарантия 12 месяцев."/>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(96300453, "init", {
             clickmap:true,
             trackLinks:true,
             accurateTrackBounce:true,
             webvisor:true
        });
     </script>
     <noscript><div><img src="https://mc.yandex.ru/watch/96300453" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
     <!-- /Yandex.Metrika counter -->
     <!-- VK pixel -->
     <script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src='https://vk.com/js/api/openapi.js?169',t.onload=function(){VK.Retargeting.Init("VK-RTRG-1853656-dFZlF"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-1853656-dFZlF" style="position:fixed; left:-999px;" alt=""/></noscript>
     <!-- /VK pixel -->
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
