@extends('layouts.app')

@section('content')

<div class="container-fluid container-xxl">
    <div class="row mb-3 mb-lg-5">
        <!-- Левая -->
        <div class="col-12 col-lg-6 px-0">
            <img src="{{ Vite::asset('resources/images/product/main.png') }}" class="img img-fluid" alt="Вытяжка для маникюра VENUS PROFESSIONAL">
        </div>
        <!-- Правая -->
        <div class="col-12 col-lg-6 px-0 d-flex flex-row justify-content-center align-items-center slider-right-space ">
            <div class="my-3 my-lg-5 text-center text-primary">
                <p class="m-0 fs-1 fw-semibold">404</p>
                <p class="mb-3 fs-3 fw-semibold">Страница не найдена!</p>
                <a href="{{ route('main') }}" class="btn btn-primary btn-lg mb-3">
                    На главную
                </a>

                <!-- Modal -->
                <div class="modal fade" id="buy-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Обратный звонок</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-success text-center fs-sm d-none" role="alert">
                                    Наш менеджер с Вами свяжется в самое ближайшее время!
                                </div>
                                <form method="POST" action="{{ route('lead.store') }}" id="contact-form-modal">
                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <div class="mb-3 row">
                                        <label for="name" class="col-sm-2 col-form-label fs-5">Имя</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" name="name">
                                            <div class="form-text text-danger fs-sm text-start"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="phone" class="col-sm-2 col-form-label fs-5">Телефон</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="phone" name="phone">
                                            <div class="form-text text-danger fs-sm text-start"></div>
                                        </div>
                                    </div>
        
                                    <button type="submit" class="w-100 btn btn-lg btn-primary mb-3">
                                        Заказать
                                    </button>
        
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="true" id="politics" name="politics" checked>
                                        <label class="form-check-label fs-sm" for="politics">
                                            Соглашаюсь с <a href="{{ route('main') }}" target="_blank" class="link-primary link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Политикой конфиденциальности</a>
                                        </label>
                                        <div class="form-text text-danger fs-sm text-start"></div>
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

@endsection