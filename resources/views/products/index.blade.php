@extends('layouts.app')

@section('content')
<div class="container mb-5">
    <div class="row">
        <div class="col-12 mt-5">
            <h1 class="fs-3 fw-medium">Каталог товаров</h1>
        </div>
    </div>
    <div class="row my-3">
        <h2 class="fs-4 fw-medium">Настольная вытяжка для маникюра VENUS PROFESSIONAL</h2>
        <div class="col-12 col-lg-6">
            <img src="{{ Vite::asset('resources/images/product/main-2.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-lg-6 d-flex flex-column justify-content-between">
            <p class="">
                Вытяжка с радиальным вентилятором и бумажным фильтром высокой степени очистки.
                Ранее такая мощность всасывания была доступна только во встраиваемых вытяжках.
                С VENUS в Вашем кабинете всегда будет чистый воздух и никакого утомительного шума.
                Для удобного использования добавили плавную регулировку мощности,
                а конструкция вытяжки позволяет с легкостью извлечь и почистить фильтр.
                Надежное крепление на повехности стола обеспечивается ножками из резины, что также минимизирует передаваемые вибрации.
                Выбор комплектующих высокого класса и металлического корпуса делает устройство надежным и долговечным.
                С VENUS PROFESSIONAL создана для использования в режиме длительной работы и позволяет с легкостью достигать высокого результата!
            </p>
            <div class="d-flex flex-row justify-content-evenly align-items-center">
                <p class="card-title fw-medium fs-3">
                    Цена: 10890 руб.
                </p>
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#buy-modal">
                    Заказать
                </button>
            </div>
        </div>
    </div>
    <hr>
    <div class="row my-3">
        <h2 class="fs-4 fw-medium">Фильтр настольной вытяжки для маникюра VENUS PROFESSIONAL</h2>
        <div class="col-12 col-lg-6">
            <img src="{{ Vite::asset('resources/images/product/GB_9977_1.png') }}" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-lg-6 d-flex flex-column justify-content-between">
            <p class="">
                Бумажный фильтр тонкой очистки предназначен для улавливания мелко- и среднедисперсных частиц размером более 10 мкм.
                Отлично справляется с опилом маникюра обеспечивая идеальную чистоту рабочего места.
            </p>
            <div class="d-flex flex-row justify-content-evenly align-items-center">
                <p class="card-title fw-medium fs-3">
                    Цена: 390 руб.
                </p>
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#buy-modal">
                    Заказать
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="buy-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="politics" checked>
                        <label class="form-check-label fs-sm" for="politics">
                            Соглашаюсь с <a href="{{ route('main') }}" target="_blank" class="link-primary link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Политикой конфиденциальности</a>
                        </label>
                        <p class="fs-6 fw-light mb-0 mt-2">
                            Наш менеджер свяжется с Вами в ближайшее время!
                        </p>
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
@endsection