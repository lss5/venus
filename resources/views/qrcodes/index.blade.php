@extends('layouts.app')

@section('content')
<div class="container mb-5">
    <div class="row">
        <div class="col-12 mt-5">
            <h1 class="fs-3 fw-medium">Регистрация вытяжки по QR-коду</h1>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-12 text-justify">
            <p class="fs-5 fw-light">
                Каждая вытяжка промаркирована уникальным QR-кодом, это позволяет контролировать качество оборудования на новом уровне!
                Предлагаем <span class="fw-medium">дополнительную гарантию 6 месяцев</span> при регистрации оборудования,
                для этого отсканируйте QR-код на дне вытяжки. Вы будете направлены на специальную страницу с подробной информацией
                о вытяжке и сопотствующими товарами. Нажмите на кнопку "Регистрация" и заполните необходимые поля.
                После регистрации Вам будет направлено письмо с сообщением об успешной активации дополнительной гарантии.
            </p>
            <p class="fs-5 fw-light">
                В случае возникновения сложностей свяжитесь с нами через форму "Обратной связи" или напишите на почту:
                <a class="fw-medium link-primary link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="mailto:manager@clean-spc.ru">manager@clean-spc.ru</a>
            </p>
        </div>
    </div>
</div>

@endsection