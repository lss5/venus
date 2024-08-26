@extends('layouts.app')

@section('content')

<div class="container-fluid container-xxl">
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
                    Обратный звонок
                </button>
                <div class="mt-1 fs-3 fw-medium">
                    <span class="text-decoration-line-through fw-light">12800₽</span> 9990₽
                </div>
                <div class="mt-3">
                    <a href="https://www.wildberries.ru/catalog/179403701/detail.aspx" target="_blank" class="btn btn-wb mt-1">Wildberries</a>
                    <a href="https://www.ozon.ru/product/nastolnaya-manikyurnaya-vytyazhka-venus-professional-1403635649/" target="_blank" class="btn btn-ozon mt-1">OZON</a>
                    <a href="https://market.yandex.ru/product--nastolnaia-vytiazhka-dlia-manikiura-venus-professional/54515310" target="_blank" class="btn btn-yamarket mt-1">Я.Маркет</a>
                    <a href="https://megamarket.ru/catalog/details/vytyazhka-dlya-manikyura-venus-professional-600017050378/" target="_blank" class="btn btn-megamarket mt-1">МегаМаркет</a>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="buy-modal" tabindex="-1" aria-labelledby="ModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="ModalLabel">Обратный звонок</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-success text-center fs-sm d-none" role="alert">
                                    Наш менеджер с Вами свяжется в самое ближайшее время!
                                </div>
                                @include('partials.callbackform')
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

<div class="container my-3">
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

    <div class="row my-3">
        <div class="col-12 col-lg-8 mx-auto">
            <h2 class="text-center fw-medium fs-4 mb-3">Видеообзор от Алены Лаврентьевой</h2>
            <video class="object-fit-cover w-100" width="100%" controls muted src="{{ Vite::asset('resources/videos/lavrenteva.mp4') }}" poster="{{ Vite::asset('resources/images/video/lavrenteva.png') }}"></video>
        </div>
    </div>

    <div class="row my-3">
        {{-- <h2 class="mb-3 fw-medium fs-3 text-center">По-настоящему эффективно!</h2> --}}
        <div class="col-12 col-lg-5 d-flex align-items-center order-0">
            <img src="{{ Vite::asset('resources/images/product/GB_9977_1.png') }}" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-lg-7 d-flex flex-column justify-content-center order-1">
            <h3 class="text-center fw-medium fs-4">Выходи на новый уровень!</h3>
            <p class="m-0 fs-5 fw-light text-justify">
                Мелкодисперсная пыль, состоящая из опасных химикатов, частиц кожи и ногтей клиента
                летает по кабинету до 24 часов после окончания работ. Вдыхание такой смеси приводит
                к затруднению дыхания и снижению иммунитета, а также может быть причиной развития
                различных заболеваний. В VENUS используется бумажный фильтр тонкой очистки,
                позволяющий задерживать мелкодисперсные частицы (в том числе PM10 с диаметром менее
                10 мкм). Также, предусмотрели возможность использования антибактериального
                и угольного фильтров, что позволит еще больше повысить эффективность очистки воздуха.
            </p>
        </div>
        <div class="col-12 col-lg-7 d-flex flex-column justify-content-center order-3 order-lg-2">
            <h3 class="text-center fw-medium fs-4">Простота в использовании и обслуживании!</h3>
            <p class="m-0 fs-5 fw-light text-justify">
                <span class="fw-medium">Больше никаких мешков!</span> После работы с клиентом,
                достаточно просто вытряхнуть пыль из фильтра. А при использовании салфеток из ткани - только
                аккуратно удалить салфетку! Благодаря высокой мощности и большой площади всасывания
                захватывает гораздо больше пыли (в сравнении с обычными пылесосами для маникюра) и экономит место на столе мастера.
                Больше никакой пыли в кабинете! Чистый мастер, мебель и клиент!
            </p>
        </div>
        <div class="col-12 col-lg-5 d-flex align-items-center order-2 order-lg-3">
            <img src="{{ Vite::asset('resources/images/product/top.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-lg-4 d-flex align-items-center order-4">
            <img src="{{ Vite::asset('resources/images/product/vent.webp') }}" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-lg-8 d-flex flex-column justify-content-center order-5">
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

    <div class="row my-3">
        <p class="fs-5 fw-light text-justify">
            Вытяжка <span class="fw-medium">производиться в России</span> на высокоточном оборудовании с
            программным управлением.
            Используется стойкая к химическим очистителям полимерная окраска.
            Все комплектующие проходят строгий контроль качества.
            Каждое изделие имеет все необходимые документы и соответствует требованиям необходимых ГОСТ и
            технических регламетов ЕАС.
        </p>
    </div>

    <div class="row">
        <div class="col-12 col-lg-4 d-flex align-items-start my-1 my-lg-3">
            <div class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3 text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06zM6 5.04 4.312 6.39A.5.5 0 0 1 4 6.5H2v3h2a.5.5 0 0 1 .312.11L6 10.96V5.04zm7.854.606a.5.5 0 0 1 0 .708L12.207 8l1.647 1.646a.5.5 0 0 1-.708.708L11.5 8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L10.793 8 9.146 6.354a.5.5 0 1 1 .708-.708L11.5 7.293l1.646-1.647a.5.5 0 0 1 .708 0z"></path>
                </svg>
            </div>
            <div>
                <h3 class="fs-3 text-primary fw-medium">Тихая</h3>
                <p class="fs-5 fw-normal">Низкий уровень шума обесечит больше комфорта Вам и Вашим клиентам </p>
            </div>
        </div>
        <div class="col-12 col-lg-4 d-flex align-items-start my-1 my-lg-3">
            <div class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3 text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" viewBox="0 0 496 512" >
                    <path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm84-143.4c-20.8 25-51.5 39.4-84 39.4s-63.2-14.3-84-39.4c-8.5-10.2-23.6-11.5-33.8-3.1-10.2 8.5-11.5 23.6-3.1 33.8 30 36 74.1 56.6 120.9 56.6s90.9-20.6 120.9-56.6c8.5-10.2 7.1-25.3-3.1-33.8-10.2-8.4-25.3-7.1-33.8 3.1zM136.5 211c7.7-13.7 19.2-21.6 31.5-21.6s23.8 7.9 31.5 21.6l9.5 17c2.1 3.7 6.2 4.7 9.3 3.7 3.6-1.1 6-4.5 5.7-8.3-3.3-42.1-32.2-71.4-56-71.4s-52.7 29.3-56 71.4c-.3 3.7 2.1 7.2 5.7 8.3 3.4 1.1 7.4-.5 9.3-3.7l9.5-17zM328 152c-23.8 0-52.7 29.3-56 71.4-.3 3.7 2.1 7.2 5.7 8.3 3.5 1.1 7.4-.5 9.3-3.7l9.5-17c7.7-13.7 19.2-21.6 31.5-21.6s23.8 7.9 31.5 21.6l9.5 17c2.1 3.7 6.2 4.7 9.3 3.7 3.6-1.1 6-4.5 5.7-8.3-3.3-42.1-32.2-71.4-56-71.4z"></path>
                </svg>
            </div>
            <div>
                <h3 class="fs-3 text-primary fw-medium">Удобная</h3>
                <p class="fs-5 fw-normal">Плавная регулировка мощности и легкое извлечение фильтра - все для комфорта мастера</p>
            </div>
        </div>
        <div class="col-12 col-lg-4 d-flex align-items-start my-1 my-lg-3">
            <div class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3 text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"></path>
                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"></path>
                </svg>
            </div>
            <div>
                <h3 class="fs-3 text-primary fw-medium">Надежная</h3>
                <p class="fs-5 fw-normal">Безщеточный двигатель и металлический корпус делают вытяжку долговечной</p>
            </div>
        </div>
    </div>

    <div class="row my-0 my-lg-3">
        <div class="col-12 col-lg-6 d-flex justify-content-center flex-column mb-3 mb-lg-0">
            <h2 class="mb-3 text-center fs-3 fw-medium">Характеристики</h2>
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
            <img src="{{ Vite::asset('resources/images/product/razmer.png') }}" alt="" class="img-fluid mt-3">
        </div>
    </div>

    <div class="row my-3 my-lg-5">
        <h2 class="mb-3 text-center fs-3 fw-medium">Отзывы о вытяжке VENUS PROFESSIONAL</h2>
        <div class="col-12 col-lg-3">
            <video class="object-fit-cover w-100" width="100%" controls muted src="{{ Vite::asset('resources/videos/review2.MP4') }}" poster="{{ Vite::asset('resources/images/video/review2.png') }}"></video>
        </div>
        <div class="col-12 col-lg-9">
            <video class="object-fit-cover w-100" width="100%" controls muted src="{{ Vite::asset('resources/videos/review1.MP4') }}" poster="{{ Vite::asset('resources/images/video/review1.png') }}"></video>
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
                телефону - <a class="fw-medium link-primary link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="{{ route('pages.partners') }}">список адресов магазинов</a>.
                Детали доставки комплектующих и возможность отправки в другие страны уточняйте у менеджера.
            </p>
            <p class="fs-5 fw-light mb-2">
                Для покупки свяжитесь с нами через форму "Обратной связи" или напишите на почту:
                <a class="fw-medium link-primary link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="mailto:manager@clean-spc.ru">MANAGER@CLEAN-SPC.RU</a>.
            </p>
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
                        Акция: <span class="text-decoration-line-through fw-light">12800₽</span> 9990₽
                    </p>
                    <p class="text-secondary fs-6 fw-light mt-1">Гарантия низкой цены! Нашли дешевле - сделаем скидку!</p>
                </div>
                <div class="card-footer">
                    <a href="https://www.ozon.ru/product/nastolnaya-manikyurnaya-vytyazhka-venus-professional-1403635649/" target="_blank" class="btn btn-ozon mt-1 mt-sm-0">OZON</a>
                    <a href="https://www.wildberries.ru/catalog/179403701/detail.aspx" target="_blank" class="btn btn-wb mt-1 mt-sm-0">Wildberries</a>
                    <a href="https://market.yandex.ru/product--nastolnaia-vytiazhka-dlia-manikiura-venus-professional/54515310" target="_blank" class="btn btn-yamarket mt-1 mt-sm-0">Я.Маркет</a>
                    <a href="https://megamarket.ru/catalog/details/vytyazhka-dlya-manikyura-venus-professional-600017050378/" target="_blank" class="btn btn-megamarket mt-1 mt-sm-0">МегаМаркет</a>
                </div>
            </div>
        </div>
        <!-- Правая сторона -->
        <div class="col-12 col-lg-6 my-2 my-lg-0">
            <div class="d-flex flex-column justify-content-center align-items-start bg-body-tertiary border rounded-3 h-100 mx-auto px-3 px-md-5">
                <h2 class="my-3 mt-lg-4 fw-medium fs-3">Обратный звонок</h2>
                <div class="alert alert-success text-center fs-sm d-none w-100" role="alert">
                    Наш менеджер с Вами свяжется в самое ближайшее время!
                </div>
                @include('partials.callbackform')
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mb-3 mb-lg-5">
        <h4 class="text-center text-primary fs-2 fw-medium">Не экономьте на своем здоровье!</h4>
        <h4 class="text-center text-primary fs-3 fw-semibold">Приобретайте качественное оборудование с которым легко и приятно работать!</h4>
    </div>
</div>

@endsection