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
        <nav class="px-3 py-5 md:px-5 bg-white shadow-md md:flex md:flex-wrap md:items-center md:justify-between text-sky-950 z-20" x-data="{ isOpen: false }" @keydown.escape="isOpen = false">
            <div class="flex justify-between items-center order-1">
                <a href="{{ route('main') }}" class="cursor-pointer">
                    <div class="flex flex-col">
                        <span class="text-xs md:text-base font-normal border-sky-950 border-solid border-b-4">Настольная вытяжка для маникюра</span>
                        <span class="text-xl md:text-2xl font-black">VENUS <span class="font-bold">PROFESSIONAL</span></span>
                    </div>
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
            <ul class="bg-white order-3 md:w-full lg:w-auto md:flex md:items-center md:justify-center md:z-auto z-10 md:static absolute w-full left-0 md:py-0 py-4 md:pt-3 lg:pt-0 md:pl-0 pl-7 md:opacity-100 opacity-0"
                :class="{ 'opacity-100': isOpen, '': !isOpen }">
                <li class="mx-2 my-5 md:my-0"><a href="#" class="text-base hover:text-sky-800 duration-500">Каталог</a></li>
                <li class="mx-2 my-5 md:my-0"><a href="#" class="text-base hover:text-sky-800 duration-500">Гарантия</a></li>
                <li class="mx-2 my-5 md:my-0"><a href="#" class="text-base hover:text-sky-800 duration-500">Сотрудничество</a></li>
                <li class="mx-2 my-5 md:my-0"><a href="#" class="text-base hover:text-sky-800 duration-500">Главная</a></li>
            </ul>
            <div class="flex items-center justify-center md:justify-start pt-3 md:pt-0 pl-0 md:pl-5 md:order-2">
                <a class="px-2" href="https://vk.com/clean_spc" target="blanc">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="32" height="32" fill="currentColor" class="bi text-space"><path d="M31.5 63.5C0 95 0 145.7 0 247V265C0 366.3 0 417 31.5 448.5C63 480 113.7 480 215 480H233C334.3 480 385 480 416.5 448.5C448 417 448 366.3 448 265V247C448 145.7 448 95 416.5 63.5C385 32 334.3 32 233 32H215C113.7 32 63 32 31.5 63.5zM75.6 168.3H126.7C128.4 253.8 166.1 290 196 297.4V168.3H244.2V242C273.7 238.8 304.6 205.2 315.1 168.3H363.3C359.3 187.4 351.5 205.6 340.2 221.6C328.9 237.6 314.5 251.1 297.7 261.2C316.4 270.5 332.9 283.6 346.1 299.8C359.4 315.9 369 334.6 374.5 354.7H321.4C316.6 337.3 306.6 321.6 292.9 309.8C279.1 297.9 262.2 290.4 244.2 288.1V354.7H238.4C136.3 354.7 78 284.7 75.6 168.3z"></path></svg>
                </a>
                <a class="px-2" href="https://t.me/cleanspc" target="blanc">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" width="32" height="32" fill="currentColor" class="bi text-space"><path d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z"></path></svg>
                </a>
                <a class="px-2" href="https://www.youtube.com/@clean-spc" target="blanc">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="32" height="32" fill="currentColor" class="bi text-space"><path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"></path></svg>
                </a>
            </div>
        </nav>

        <main class="">
            <div class="flex flex-col md:flex-row justify-end items-end md:items-center relative">
                    <img class="z-0 w-full" src="{{ Vite::asset('resources/images/product/main-2.jpg') }}">

                    <div class="relative md:absolute flex flex-col items-center justify-center z-[2] text-sky-950 py-8 md:py-10 xl:py-16 px-8 sm:w-4/5 md:w-2/5 bg-white/80 rounded mx-auto md:mr-5">
                        <h1 class="text-3xl xl:text-4xl text-center font-semibold">Мощная вытяжка для профессионалов!</h1>
                        <h1 class="text-2xl xl:text-3xl font-medium text-center mt-2">Защити себя и своих клиентов!</h1>
                        {{-- <span class="text-2xl sm:text-3xl xl:text-4xl text-center font-black mt-2">VENUS <span class="font-bold">PROFESSIONAL</span></span> --}}
                    </div>
            </div>

            <div class="container mx-auto px-4 sm:px-0 my-8 md:my-20">
                <hr class="border-sky-950 border-solid border-b-1 block md:hidden">
                <p class="text-lg lg:text-xl font-light text-justify mt-4 md:mt-8">
                    <span class="font-medium uppercase">VENUS PROFESSIONAL</span> - это новая настольная вытяжка с
                    радиальным вентилятором и бумажным фильтром высокой степени очистки.
                    Плавная регулировка мощности поможет подобрать оптимальный режим работы,
                    а конструкция разработана с учетом возможности легкого извлечения фильтра для чистки и обслуживания.
                    Выбор качественных комплектующих и металлического корпуса делает устройтво надежным и долговечным.
                    Мы сделали процесс работы мастера комфортным и безопасным!
                    С VENUS PROFESSIONAL в Вашем кабинете всегда будет чистый воздух и никакого утомительного шума!
                </p>
            </div>

            <div class="parallax_2 flex justify-center items-center relative">
                <div class="container z-[2] text-xl mx-0 md:mx-10 my-20 p-0 md:p-10 bg-white rounded">
                    <h3 class="mt-8 md:mt-2 text-2xl md:text-3xl font-semibold text-center">По-настоящему эффективно!</h3>
                    <div class="container flex flex-col md:flex-row mx-auto px-4 sm:px-0 mt-2 md:mt-4">
                        <div class="w-full lg:w-2/5 flex items-center">
                            <img src="{{ Vite::asset('resources/images/product/GB_9977_1.png') }}" alt="">
                        </div>
                        <div class="w-full lg:w-3/5 flex items-center px-6 md:px-0">
                            <p class="text-lg lg:text-xl font-light text-justify">
                                Мелкодисперсная пыль, состоящая из опасных химикатов, частиц кожи и ногтей клиента
                                летает по кабинету до 24 часов после окончания работ. Вдыхание такой смеси приводит
                                к затруднению дыхания и снижению иммунитета, а также может быть причиной развития
                                различных заболеваний. В VENUS используется бумажный фильт тонкой очистки,
                                позволяющий задерживать мелкодисперсные частицы (в том числе PM10 с диаметром менее
                                10 мкм соответственно). Также, предусмотрели возможность использования антибактериального
                                и угольного фильтров, что позволит еще больше повысить эффективность очистки воздуха.
                            </p>
                        </div>
                    </div>
                    <div class="container flex flex-col md:flex-row mx-auto px-4 sm:px-0 mt-2 md:mt-4">
                        <div class="w-full lg:w-3/5 flex items-center order-2 md:order-1 px-6 md:px-0">
                            <p class="text-lg lg:text-xl font-light text-justify">
                                Простота в использовании и обслуживании - больше никаких мешков! После работы с клиентом,
                                достаточно просто вытряхнуть пыль из фильтра. А при использовании салфеток из ткани - только
                                аккуратно удалить салфетку! Благодаря высокой мощности и большой площади всасывания
                                захватывает гораздо больше пыли в сравнении с обычными пылесосами для маникюра.
                                Больше никакой пыли в кабинете! Чистый мастер, мебель и клиент!
                            </p>
                        </div>
                        <div class="w-full lg:w-2/5 order-1 md:order-2 flex items-center">
                            <img src="{{ Vite::asset('resources/images/product/top.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="container flex flex-col md:flex-row mx-auto px-4 sm:px-0 mt-2 md:mt-4">
                        <div class="w-full lg:w-2/5 flex items-center">
                            <img src="{{ Vite::asset('resources/images/product/vent.webp') }}" alt="">
                        </div>
                        <div class="w-full lg:w-3/5 flex items-center px-6 pb-6 md:p-0">
                            <p class="text-lg lg:text-xl font-light text-justify">
                                В вытяжке используется мощный радиальный вентилятор, который создает непревзойденную тягу и при этом
                                тихий даже на максимальной мощности! Большой размер лопастей позволяет засасывать гораздо большое
                                воздуха при меньших оборотах. Благодаря этому уменьшен шум, увеличена производительность и
                                продлен срок службы вытяжки. Двигатель бесщеточный, на подшипниках. В нем отсутствуют
                                детали изнашивающиеся в процессе эксплуатации, что делает его практически "вечным".
                            </p>
                        </div>
                    </div>
                </div>
                <div class="absolute top-0 left-0 h-full w-full bg-neutral-950/20 z-[1]"></div>
            </div>

            <div class="container flex flex-row justify-center mx-auto mt-8 md:mt-12 mb-4 md:mb-8 px-4 md:px-0 max-h-screen">
                <video src="{{ Vite::asset('resources/images/product/venus.mp4') }}" autoplay muted loop controls preload="auto" class="w-full"></video>
            </div>

            <h3 class="mt-8 md:mt-12 mb-4 text-2xl md:text-3xl font-semibold text-center">Характеристики</h3>
            <div class="container mx-auto">
                <div class="flex flex-col md:flex-row mx-auto mt-2 md:mt-4">
                    <div class="w-full lg:w-1/2 flex items-center">
                        <table class="w-full text-lg lg:text-xl font-light">
                            <tr class="border-solid border-sky-950 border-b">
                                <td class=" py-2 text-start">Производительность</td>
                                <td class=" py-2 text-end font-medium">430 м3/час</td>
                            </tr>
                            <tr class="border-solid border-sky-950 border-b">
                                <td class=" py-2 text-start">Давление</td>
                                <td class=" py-2 text-end font-medium">250 Pa</td>
                            </tr>
                            <tr class="border-solid border-sky-950 border-b">
                                <td class=" py-2 text-start">Уровень шума</td>
                                <td class=" py-2 text-end font-medium">до 59 дБ</td>
                            </tr>
                            <tr class="border-solid border-sky-950 border-b">
                                <td class=" py-2 text-start">Мощность двигателя</td>
                                <td class=" py-2 text-end font-medium">46 Вт</td>
                            </tr>
                            <tr class="border-solid border-sky-950 border-b">
                                <td class=" py-2 text-start">Скорость вращения</td>
                                <td class=" py-2 text-end font-medium">1500-2550 об/мин</td>
                            </tr>
                            <tr class="border-solid border-sky-950 border-b">
                                <td class=" py-2 text-start">Напряжение</td>
                                <td class=" py-2 text-end font-medium">АС 220В</td>
                            </tr>
                            <tr class="border-solid border-sky-950 border-b">
                                <td class=" py-2 text-start">Габариты (ДxШхВ)</td>
                                <td class=" py-2 text-end font-medium">245мм x 217мм х 112мм</td>
                            </tr>
                            <tr class="border-solid border-sky-950 border-b">
                                <td class=" py-2 text-start">Вес</td>
                                <td class=" py-2 text-end font-medium">3 кг</td>
                            </tr>
                            <tr class="">
                                <td class=" py-2 text-start">Гарантия</td>
                                <td class=" py-2 text-end font-medium">12 месяцев</td>
                            </tr>
                        </table>
                    </div>
                    <div class="w-full lg:w-1/2 flex items-center">
                        <p class="text-lg lg:text-xl font-light text-justify">
                            <img src="{{ Vite::asset('resources/images/product/razmer.png') }}">
                        </p>
                    </div>
                </div>
            </div>

            <div class="parallax flex justify-center items-center relative">
                <div class="container z-[2] text-xl mx-0 md:mx-10 my-20 p-0 md:p-10 bg-white rounded">
                    <h3 class="mt-8 md:mt-2 text-2xl md:text-3xl font-semibold text-center">Сделано в России</h3>
                    <p class="mt-2 md:mt-4 text-lg lg:text-xl font-light text-justify">
                        Вытяжка производиться в России на высокоточном оборудовании с программным управлением.
                        Используется стойкая к химическим очистителям порошковая окраска.
                        Все комплектующие проходят строгий контроль качества.
                        Каждое изделие соответствует требованиям необходимых ГОСТ и технических регламетов ЕАС и имеет все необходимые документы.
                    </p>
                </div>
                <div class="absolute top-0 left-0 h-full w-full bg-neutral-950/20 z-[1]"></div>
            </div>

            <div class="container mx-auto px-4 sm:px-0 my-4 md:my-10">
                <h3 class="mt-8 md:mt-2 text-2xl md:text-3xl font-semibold text-center">Бесплатная и быстра доставка</h3>
                <p class="text-lg lg:text-xl font-light text-justify mt-2 md:mt-4">
                    <span class="font-medium">Доставка осуществляется бесплатно</span> до ближайшего к вам офиса СДЭК
                    или другая ТК по согласованию. Возможен самовывоз у партнеров, при условии предварительного согласования
                    с менеджером по телефону. Детали доставки комплектующих и возможность отправки в другие страны уточняйте у менеджера.
                    <br>Для покупки свяжитесь с нами через форму "Обратной связи"
                    или напишите на e-mail: <span class="font-medium">MANAGER@CLEAN-SPC.RU</span>
                    <br>Оплата осуществляется по счету для юридических лиц. Отправка осуществляется в день оплаты. Каждому заказу присваивается трек-номер, который будет отправлен Вам на e-mail или телефон.
                </p>
            </div>

            <div class="container mx-auto px-4 sm:px-0 my-4 md:my-10">
                <h3 class="mt-8 md:mt-2 text-2xl md:text-3xl font-semibold text-center">Закажи прямо сейчас!</h3>
                <div class="w-full flex flex-col md:flex-row">
                    <div class="flex justify-center">
                        ss
                    </div>
                    <div class="flex justify-center">
                        ss
                    </div>
                </div>
            </div>

        </main>

        <footer class="">
            
        </footer>
    </body>
</html>
