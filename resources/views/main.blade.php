<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/icons/favicon.png') }}">
        <title>Вытяжка для маникюра VENUS PROFESSIONAL - Мощная, Тихая, Надежная</title>
        <meta name="title" content="Вытяжка для маникюра VENUS PROFESSIONAL - Мощная, Тихая, Надежная">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="">
        <header class="p-5 bg-white shadow md:flex md:items-center md:justify-between text-sky-950 z-20" x-data="{ isOpen: false }" @keydown.escape="isOpen = false">
            <div class="flex justify-between items-center">
                <a href="{{ route('main') }}" class="text-2xl cursor-pointer">
                    <span class="font-black">VENUS</span> <span class="font-bold">PROFESSIONAL</span>
                </a>

                <span class="cursor-pointer md:hidden block" @click="isOpen = !isOpen">
                    <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                    </svg>
                    <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                    </svg>
                </span>
            </div>
            <ul class="md:flex md:items-center md:z-auto z-10 md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0"
                :class="{ 'opacity-100': isOpen, 'hidden': !isOpen }"
                x-show.transition="true"
            >
                <li class="mx-3 my-5 md:my-0"><a href="#" class="text-lg hover:text-sky-800 duration-500">Каталог</a></li>
                <li class="mx-3 my-5 md:my-0"><a href="#" class="text-lg hover:text-sky-800 duration-500">Гарантия</a></li>
                <li class="mx-3 my-5 md:my-0"><a href="#" class="text-lg hover:text-sky-800 duration-500">Сотрудничество</a></li>
                <li class="mx-3 my-5 md:my-0"><a href="#" class="text-lg hover:text-sky-800 duration-500">Главная</a></li>
                
                <div class="flex items-center justify-start pl-0 md:pl-5">
                    <a class="px-1" href="https://vk.com/clean_spc" target="blanc">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="32" height="32" fill="currentColor" class="bi text-space"><path d="M31.5 63.5C0 95 0 145.7 0 247V265C0 366.3 0 417 31.5 448.5C63 480 113.7 480 215 480H233C334.3 480 385 480 416.5 448.5C448 417 448 366.3 448 265V247C448 145.7 448 95 416.5 63.5C385 32 334.3 32 233 32H215C113.7 32 63 32 31.5 63.5zM75.6 168.3H126.7C128.4 253.8 166.1 290 196 297.4V168.3H244.2V242C273.7 238.8 304.6 205.2 315.1 168.3H363.3C359.3 187.4 351.5 205.6 340.2 221.6C328.9 237.6 314.5 251.1 297.7 261.2C316.4 270.5 332.9 283.6 346.1 299.8C359.4 315.9 369 334.6 374.5 354.7H321.4C316.6 337.3 306.6 321.6 292.9 309.8C279.1 297.9 262.2 290.4 244.2 288.1V354.7H238.4C136.3 354.7 78 284.7 75.6 168.3z"></path></svg>
                    </a>
                    <a class="px-1" href="https://t.me/cleanspc" target="blanc">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" width="32" height="32" fill="currentColor" class="bi text-space"><path d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z"></path></svg>
                    </a>
                    <!-- <a class="link-body-emphasis" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="32" height="32" fill="currentColor" class="bi text-space"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                    </a> -->
                    <a class="px-1" href="https://www.youtube.com/@clean-spc" target="blanc">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="32" height="32" fill="currentColor" class="bi text-space"><path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"></path></svg>
                    </a>
                </div>
            </ul>
        </header>
        <main class="">

        <div class="parallax flex justify-center items-center relative py-20">
            <div class="text-white z-[2] text-4xl">
                <h1>Настольная вытяжка для маникюра <span class="font-black">VENUS</span> <span class="font-bold">PROFESSIONAL</span></h1>
            </div>
            <div class="absolute top-0 left-0 h-full w-full bg-neutral-950/50 z-[1]"></div>
        </div>

        <div class="py-56 container mx-auto">
            <p>Новый формат настольной вытяжки с радильным вентилятором и бумажным фильтром высокой степени очистки. Мы сделали процесс работы мастера более комфортным и приятным! С VENUS в Вашем кабинете всегда будет чистый воздух и никакого утомительного шума! Для удобного использования добавили плавную регулировку мощности, а конструкция разработана с учетом возможности легкого извлечения фильтра для чистки и обслуживания. Надежное крепление на повехности стола обеспечивается ножками из резины. Выбор комплектующих высокого класса и металлического корпуса делает устройтво надежным и долговечным. VENUS PROFESSIONAL создана для использования в режиме длительной работы и позволяет с легкостью достигать высокого результата!</p>
        </div>
        <div class="parallax_2 flex justify-center items-center relative">
            <div class="text-white z-20 text-xl py-20 container">
                <p>Новый формат настольной вытяжки с радильным вентилятором и бумажным фильтром высокой степени очистки. Мы сделали процесс работы мастера более комфортным и приятным! С VENUS в Вашем кабинете всегда будет чистый воздух и никакого утомительного шума! Для удобного использования добавили плавную регулировку мощности, а конструкция разработана с учетом возможности легкого извлечения фильтра для чистки и обслуживания. Надежное крепление на повехности стола обеспечивается ножками из резины. Выбор комплектующих высокого класса и металлического корпуса делает устройтво надежным и долговечным. VENUS PROFESSIONAL создана для использования в режиме длительной работы и позволяет с легкостью достигать высокого результата!</p>
            </div>
            <div class="absolute top-0 left-0 h-full w-full bg-neutral-950/70 z-10"></div>
        </div>

        {{-- <img src="{{ Vite::asset('resources/images/nail-masters-1.jpeg') }}"> --}}

        </main>

        <footer class="">
            
        </footer>
    </body>
</html>
