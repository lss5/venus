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
        <nav class="navbar navbar-expand-lg bg-white fixed-top shadow-sm" id="navbar-site">
            <div class="container">
                <a class="navbar-brand" href="{{ route('main') }}">
                    <div class="d-flex flex-column text-primary">
                        <span class="fw-normal fs-6 border-bottom border-5 border-primary">Настольная вытяжка для маникюра</span>
                        <span class="fw-bolder fs-4 text-center">VENUS <span class="fw-semibold">PROFESSIONAL</span></span>
                    </div>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" style="">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-normal">
                        <li class="nav-item"><a class="nav-link" href="/srok-sluzhby-i-garantiya">Гарантия</a></li>
                        <li class="nav-item"><a class="nav-link" href="/cooperation">Доставка и оплата</a></li>
                        <li class="nav-item"><a class="nav-link" href="/cooperation">Сотрудничество</a></li>
                    </ul>
                    <ul class="my-3 my-lg-0 list-unstyled d-flex justify-content-center">
                        <li class="ms-3"><a class="link-body-emphasis text-primary" href="https://vk.com/clean_spc" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="32" height="32" fill="currentColor">
                                <path d="M31.5 63.5C0 95 0 145.7 0 247V265C0 366.3 0 417 31.5 448.5C63 480 113.7 480 215 480H233C334.3 480 385 480 416.5 448.5C448 417 448 366.3 448 265V247C448 145.7 448 95 416.5 63.5C385 32 334.3 32 233 32H215C113.7 32 63 32 31.5 63.5zM75.6 168.3H126.7C128.4 253.8 166.1 290 196 297.4V168.3H244.2V242C273.7 238.8 304.6 205.2 315.1 168.3H363.3C359.3 187.4 351.5 205.6 340.2 221.6C328.9 237.6 314.5 251.1 297.7 261.2C316.4 270.5 332.9 283.6 346.1 299.8C359.4 315.9 369 334.6 374.5 354.7H321.4C316.6 337.3 306.6 321.6 292.9 309.8C279.1 297.9 262.2 290.4 244.2 288.1V354.7H238.4C136.3 354.7 78 284.7 75.6 168.3z"></path>
                            </svg>
                        </a></li>
                        <li class="ms-3"><a class="link-body-emphasis text-primary" href="https://t.me/cleanspc" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" width="32" height="32" fill="currentColor">
                                <path d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z"></path>
                            </svg>
                        </a></li>
                        <li class="ms-3"><a class="link-body-emphasis text-primary" href="https://www.youtube.com/@clean-spc" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="32" height="32" fill="currentColor">
                                <path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"></path>
                            </svg>
                        </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid container-xxl mt-navbar">
            <div class="row">
                <!-- Левая -->
                <div class="col-12 col-lg-6 px-0">
                    <img src="{{ Vite::asset('resources/images/product/main.png') }}" class="img img-fluid" alt="Вытяжка для маникюра VENUS PROFESSIONAL">
                </div>
                <!-- Правая -->
                <div class="col-12 col-lg-6 px-0 d-flex flex-row justify-content-center align-items-center slider-right-space ">
                    <div class="my-3 my-lg-5 text-center text-primary">
                        <p class="m-0 fs-2">Мощная вытяжка для профессионалов!</p>
                        <p class="mb-3 fs-3 fw-semibold">Защити себя и своих клиентов!</p>
                        <button type="button" class="btn btn-primary btn-lg mb-3" data-bs-toggle="modal" data-bs-target="#buy-modal">
                            Заказать
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="buy-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Обратный звонок</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form data-request="onSend">
                                            <div class="mb-3 row">
                                                <label for="name" class="col-sm-2 col-form-label fs-5">Имя</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="name">
                                                </div>
                                                <div class="form-text text-danger fs-sm">
                                                    Поле обязательно для заполнения
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="contact" class="col-sm-2 col-form-label fs-5">Телефон</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="contact">
                                                </div>
                                                <div class="form-text text-danger fs-sm">
                                                    Поле обязательно для заполнения
                                                </div>
                                            </div>
                
                                            <button type="submit" class="w-100 btn btn-lg btn-primary mb-3" data-attach-loading="">
                                                Заказать
                                            </button>
                
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value="" id="politics" checked>
                                                <label class="form-check-label fs-sm" for="politics">
                                                    Соглашаюсь с <a href="{{ route('main') }}" target="_blank" class="link-primary link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Политикой конфиденциальности</a>
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="https://www.wildberries.ru/catalog/179403701/detail.aspx" target="_blank" class="btn btn-wb">Wildberries</a>
                                        <a href="https://www.ozon.ru/product/nastolnaya-manikyurnaya-vytyazhka-venus-professional-1403635649/" target="_blank" class="btn btn-ozon">OZON</a>
                                        <a href="https://market.yandex.ru/product--nastolnaia-vytiazhka-dlia-manikiura-venus-professional/54515310" target="_blank" class="btn btn-yamarket">Я.Маркет</a>
                                        <a href="https://megamarket.ru/catalog/details/vytyazhka-dlya-manikyura-venus-professional-600017050378/" target="_blank" class="btn btn-megamarket">МегаМаркет</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-block d-lg-none">
            <hr class="text-primary border-3 border-primary">
        </div>

        <div class="container mt-3 mt-lg-5">
            <div class="row">
                <span class="fs-5 fw-light text-justify">
                    <span class="fw-medium text-uppercase">VENUS PROFESSIONAL</span> - это новая настольная вытяжка с
                    радиальным вентилятором и бумажным фильтром высокой степени очистки.
                    Плавная регулировка мощности поможет подобрать оптимальный режим работы,
                    а конструкция разработана с учетом возможности легкого извлечения фильтра для чистки и обслуживания.
                    Выбор качественных комплектующих и металлического корпуса делает устройтво надежным и долговечным.
                    Мы сделали процесс работы мастера комфортным и безопасным!
                    С VENUS PROFESSIONAL в Вашем кабинете всегда будет чистый воздух и никакого утомительного шума!
                </span>
            </div>

            <div class="row my-3 my-lg-5">
                {{-- <h2 class="mb-3 fw-medium fs-3 text-center">По-настоящему эффективно!</h2> --}}
                <div class="col-12 col-lg-6 d-flex align-items-center order-0">
                    <img src="{{ Vite::asset('resources/images/product/GB_9977_1.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center order-1">
                    <h3 class="text-center fw-medium fs-4">Выходи на новый уровень!</h3>
                    <p class="m-0 fs-5 fw-light text-justify">
                        Мелкодисперсная пыль, состоящая из опасных химикатов, частиц кожи и ногтей клиента
                        летает по кабинету до 24 часов после окончания работ. Вдыхание такой смеси приводит
                        к затруднению дыхания и снижению иммунитета, а также может быть причиной развития
                        различных заболеваний. В VENUS используется бумажный фильт тонкой очистки,
                        позволяющий задерживать мелкодисперсные частицы (в том числе PM10 с диаметром менее
                        10 мкм). Также, предусмотрели возможность использования антибактериального
                        и угольного фильтров, что позволит еще больше повысить эффективность очистки воздуха.
                    </p>
                </div>
                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center order-3 order-lg-2">
                    <h3 class="text-center fw-medium fs-4">Простота в использовании и обслуживании!</h3>
                    <p class="m-0 fs-5 fw-light text-justify">
                        Больше никаких мешков! После работы с клиентом,
                        достаточно просто вытряхнуть пыль из фильтра. А при использовании салфеток из ткани - только
                        аккуратно удалить салфетку! Благодаря высокой мощности и большой площади всасывания
                        захватывает гораздо больше пыли (в сравнении с обычными пылесосами для маникюра) и экономит место на столе мастера.
                        Больше никакой пыли в кабинете! Чистый мастер, мебель и клиент!
                    </p>
                </div>
                <div class="col-12 col-lg-6 d-flex align-items-center order-2 order-lg-3">
                    <img src="{{ Vite::asset('resources/images/product/top.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-lg-6 d-flex align-items-center order-4">
                    <img src="{{ Vite::asset('resources/images/product/vent.webp') }}" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center order-5">
                    <h3 class="text-center fw-medium fs-4">Мощный радиальный вентилятор</h3>
                    <p class="m-0 fs-5 fw-light text-justify">
                        В вытяжке используется вентилятор промышленного класса, который создает непревзойденную тягу и при этом
                        тихий даже на максимальной мощности! Большой размер лопастей позволяет засасывать гораздо большое
                        воздуха при меньших оборотах. Благодаря этому уменьшен шум, увеличена производительность и
                        продлен срок службы вытяжки. Двигатель бесщеточный, на подшипниках. В нем отсутствуют
                        детали изнашивающиеся в процессе эксплуатации, что делает его практически "вечным".
                    </p>
                </div>
            </div>

            <div class="row my-3 my-lg-0">
                <div class="col-12 col-lg-4 d-flex align-items-start my-1 my-lg-5">
                    <div class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06zM6 5.04 4.312 6.39A.5.5 0 0 1 4 6.5H2v3h2a.5.5 0 0 1 .312.11L6 10.96V5.04zm7.854.606a.5.5 0 0 1 0 .708L12.207 8l1.647 1.646a.5.5 0 0 1-.708.708L11.5 8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L10.793 8 9.146 6.354a.5.5 0 1 1 .708-.708L11.5 7.293l1.646-1.647a.5.5 0 0 1 .708 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="fs-3 text-primary fw-medium">Тихая</h3>
                        <p class="fs-5 fw-light">Уровень шума <span class="fw-medium">менее 59 дБ</span>, что обесечит больше комфорта Вам и Вашим клиентам </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 d-flex align-items-start my-1 my-lg-5">
                    <div class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" viewBox="0 0 496 512" >
                            <path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm84-143.4c-20.8 25-51.5 39.4-84 39.4s-63.2-14.3-84-39.4c-8.5-10.2-23.6-11.5-33.8-3.1-10.2 8.5-11.5 23.6-3.1 33.8 30 36 74.1 56.6 120.9 56.6s90.9-20.6 120.9-56.6c8.5-10.2 7.1-25.3-3.1-33.8-10.2-8.4-25.3-7.1-33.8 3.1zM136.5 211c7.7-13.7 19.2-21.6 31.5-21.6s23.8 7.9 31.5 21.6l9.5 17c2.1 3.7 6.2 4.7 9.3 3.7 3.6-1.1 6-4.5 5.7-8.3-3.3-42.1-32.2-71.4-56-71.4s-52.7 29.3-56 71.4c-.3 3.7 2.1 7.2 5.7 8.3 3.4 1.1 7.4-.5 9.3-3.7l9.5-17zM328 152c-23.8 0-52.7 29.3-56 71.4-.3 3.7 2.1 7.2 5.7 8.3 3.5 1.1 7.4-.5 9.3-3.7l9.5-17c7.7-13.7 19.2-21.6 31.5-21.6s23.8 7.9 31.5 21.6l9.5 17c2.1 3.7 6.2 4.7 9.3 3.7 3.6-1.1 6-4.5 5.7-8.3-3.3-42.1-32.2-71.4-56-71.4z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="fs-3 text-primary fw-medium">Удобная</h3>
                        <p class="fs-5 fw-light">Плавная регулировка мощности и легкое извлечение фильтра - все для комфорта мастера</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 d-flex align-items-start my-1 my-lg-5">
                    <div class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"></path>
                            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="fs-3 text-primary fw-medium">Надежная</h3>
                        <p class="fs-5 fw-light">Безщеточный двигатель и металлический корпус делают вытяжку долговечной</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <p class="fs-5 fw-light text-justify">
                    Вытяжка <span class="fw-medium">производиться в России</span> на высокоточном оборудовании с
                    программным управлением.
                    Используется стойкая к химическим очистителям полимерная окраска.
                    Все комплектующие проходят строгий контроль качества.
                    Каждое изделие имеет все необходимые документы и соответствует требованиям необходимых ГОСТ и
                    технических регламетов ЕАС.
                </p>
            </div>

            <div class="row my-0 my-lg-5">
                <div class="col-12 col-lg-6 d-flex justify-content-center flex-column mb-3 mb-lg-0">
                    <h4 class="my-0 mb-3 fw-medium fs-4 text-center">Характеристики</h4>
                    <ul class="list-group list-group-flush fs-5 fw-light">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div>Материал корпуса</div>
                            <span class="fw-medium text-end">Cталь</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div>Производительность</div>
                            <span class="fw-medium text-end">430 м<sup>3</sup>/час</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div>Срок службы</div>
                            <span class="fw-medium text-end">40 000 часов</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div>Уровень шума</div>
                            <span class="fw-medium text-end">до 59 дБ</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div>Мощность двигателя</div>
                            <span class="fw-medium text-end">50 Вт</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div>Скорость вращения</div>
                            <span class="fw-medium text-end">1500-2550 об/мин</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div>Напряжение питания</div>
                            <span class="fw-medium text-end">АС 220В, 50Гц</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div>Габариты (ДxШхВ)</div>
                            <span class="fw-medium text-end">245мм x 217мм х 112мм</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div>Вес</div>
                            <span class="fw-medium text-end">3 кг</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div>Гарантия</div>
                            <span class="fw-medium text-end">12 месяцев</span>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="https://clean-spc.ru/themes/venus/assets/images/product/razmer.png" alt=""
                        class="img-fluid mt-3">
                </div>
            </div>
        
            <!-- Обратная связь -->
            <div class="row mb-3 mb-lg-5" id="buy">
                <!-- Левая сторона -->
                <div class="col-12 col-lg-6 my-2 my-lg-0 text-center">
                    <div class="card mb-3 mb-lg-0 rounded-3 shadow-sm border-primary h-100">
                        <div class="card-header py-3 text-bg-primary border-primary">
                            <h4 class="my-0 fw-medium fs-4">Комплектация</h4>
                        </div>
                        <div class="card-body px-5 px-lg-3">
                            <ol class="list-unstyled list-group-numbered fs-5 fw-light my-3 text-start">
                                <li class="list-group-item">Вытяжка <span class="fw-medium">VENUS PROFESSIONAL</span></li>
                                <li class="list-group-item">Бумажный фильтр (2шт)</li>
                                <li class="list-group-item">Сетевой кабель с заземлением</li>
                                <li class="list-group-item">Руководство по эксплуатации и паспорт</li>
                                <li class="list-group-item">Сертификат соответствия ЕАС</li>
                            </ol>
                            <p class="card-title fw-medium fs-3">
                                Цена: 10890 руб.
                            </p>
                            {{-- <p class="text-body-secondary fs-6 fw-light mt-3">Гарантия низкой цены! Мы готовы предоставить Вам дополнительную скидку, если Вы найдете цену ниже!</p> --}}
                        </div>
                        <div class="card-footer">
                            <a href="https://www.ozon.ru/product/nastolnaya-manikyurnaya-vytyazhka-venus-professional-1403635649/" target="_blank" class="btn btn-ozon">OZON</a>
                            <a href="https://www.wildberries.ru/catalog/179403701/detail.aspx" target="_blank" class="btn btn-wb">Wildberries</a>
                            <a href="https://market.yandex.ru/product--nastolnaia-vytiazhka-dlia-manikiura-venus-professional/54515310" target="_blank" class="btn btn-yamarket mt-2 mt-sm-0">Я.Маркет</a>
                            <a href="https://megamarket.ru/catalog/details/vytyazhka-dlya-manikyura-venus-professional-600017050378/" target="_blank" class="btn btn-megamarket mt-2 mt-sm-0">МегаМаркет</a>
                        </div>
                    </div>
                </div>
                <!-- Правая сторона -->
                <div class="col-12 col-lg-6 my-2 my-lg-0">
                    <div class="bg-body-tertiary border rounded-3 h-100 mx-auto px-3 px-md-5">
                        <h2 class="mt-3 mt-lg-4 fw-medium fs-3">Обратный звонок</h2>
                        <form data-request="onSend">
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label fs-5">Имя</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-text text-danger fs-sm">
                                    Поле обязательно для заполнения
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="contact" class="col-sm-2 col-form-label fs-5">Телефон</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="contact">
                                </div>
                                <div class="form-text text-danger fs-sm">
                                    Поле обязательно для заполнения
                                </div>
                            </div>

                            <button type="submit" class="w-100 btn btn-lg btn-primary mb-3" data-attach-loading="">
                                Заказать
                            </button>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="politics" checked>
                                <label class="form-check-label fs-sm" for="politics">
                                    Соглашаюсь с <a href="{{ route('main') }}" class="link-primary link-underline link-underline-opacity-0 link-underline-opacity-75-hover">политикой конфиденциальности</a>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row my-3 my-lg-5">
                <h2 class="mb-3 text-center fs-3 fw-medium">Бесплатная и быстрая доставка</h2>
                <div class="col-12">
                    <p class="fs-5 fw-light text-justify mb-2">
                        <span class="fw-medium">Доставка осуществляется бесплатно</span>
                        до ближайшего к вам офиса <span class="fw-medium">СДЭК</span> или отделения <span class="fw-medium">Почты России</span>.
                        Каждому заказу присваивается трек-номер, который будет отправлен Вам на e-mail или телефон. Отправка осуществляется в день оплаты.
                        Самовывоз возможен у партнеров, при условии предварительного согласования с менеджером по
                        телефону - <a class="fw-medium link-primary link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="{{ route('main') }}">список адресов магазинов</a>.
                        Детали доставки комплектующих и возможность отправки в другие страны уточняйте у менеджера.
                    </p>
                    <p class="fs-5 fw-light mb-2">
                        Для покупки свяжитесь с нами через форму "Обратной связи" или напишите на почту:
                        <a class="fw-medium link-primary link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="mailto:manager@clean-spc.ru">MANAGER@CLEAN-SPC.RU</a>.
                    </p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mb-3 mb-lg-5">
                <h4 class="text-center text-primary fs-2 fw-medium">Не экономьте на своем здоровье!</h4>
                <h4 class="text-center text-primary fs-3 fw-semibold">Приобретайте качественное оборудование с которым легко и приятно работать!</h4>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="container mb-3 mb-lg-3 py-3 border-top">
        <div class="row">
            <div class="col-12 col-lg-8 d-flex flex-column align-items-center justify-content-between">
                <ul class="nav d-flex justify-content-center fs-6 fw-normal">
                    <li class="nav-item"><a href="/srok-sluzhby-i-garantiya" class="nav-link px-2 text-body-secondary text-muted">Адреса магазинов</a></li>
                    <li class="nav-item"><a href="/cooperation" class="nav-link px-2 text-body-secondary text-muted">Сотрудничество</a></li>
                    <li class="nav-item"><a href="/politics" class="nav-link px-2 text-body-secondary text-muted">Политика конфенденциальности</a></li>
                </ul>
                <ul class="my-1 my-lg-3 list-unstyled d-flex justify-content-center">
                    <li class="ms-3"><a class="link-body-emphasis text-primary" href="https://vk.com/clean_spc" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="32" height="32" fill="currentColor">
                            <path d="M31.5 63.5C0 95 0 145.7 0 247V265C0 366.3 0 417 31.5 448.5C63 480 113.7 480 215 480H233C334.3 480 385 480 416.5 448.5C448 417 448 366.3 448 265V247C448 145.7 448 95 416.5 63.5C385 32 334.3 32 233 32H215C113.7 32 63 32 31.5 63.5zM75.6 168.3H126.7C128.4 253.8 166.1 290 196 297.4V168.3H244.2V242C273.7 238.8 304.6 205.2 315.1 168.3H363.3C359.3 187.4 351.5 205.6 340.2 221.6C328.9 237.6 314.5 251.1 297.7 261.2C316.4 270.5 332.9 283.6 346.1 299.8C359.4 315.9 369 334.6 374.5 354.7H321.4C316.6 337.3 306.6 321.6 292.9 309.8C279.1 297.9 262.2 290.4 244.2 288.1V354.7H238.4C136.3 354.7 78 284.7 75.6 168.3z"></path>
                        </svg>
                    </a></li>
                    <li class="ms-3"><a class="link-body-emphasis text-primary" href="https://t.me/cleanspc" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" width="32" height="32" fill="currentColor">
                            <path d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z"></path>
                        </svg>
                    </a></li>
                    <li class="ms-3"><a class="link-body-emphasis text-primary" href="https://www.youtube.com/@clean-spc" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="32" height="32" fill="currentColor">
                            <path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"></path>
                        </svg>
                    </a></li>
                </ul>
                <span class="mt-1 mb-0 fs-sm">2021 - 2024 ©Все права защищены.</span>
            </div>
            <div class="col-12 col-lg-4 d-flex align-items-center justify-content-center fs-sm">
                <div class="d-flex flex-column align-items-center">
                    <span class="mb-0 fw-normal">ИП Лотоцкий С.С.</span>
                    <span class="mb-0 text-body-secondary">ИНН 551201655808</span>
                    <span class="mb-0 text-body-secondary">ОГРНИП 321554300043633</span>
                    <span class="mb-0 text-body-secondary">Россия, г.Омск</span>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
